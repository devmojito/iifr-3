<?php

declare(strict_types=1);

require_once __DIR__ . '/iifr-config.php';

/**
 * Read a secret or config value from define(), getenv(), $_ENV, or $_SERVER (Hostinger/hPanel
 * often injects env vars into $_SERVER only; some hosts disable putenv()).
 */
function iifr_mail_config(string $name): ?string
{
    if (defined($name)) {
        $v = constant($name);
        if (is_string($v) && $v !== '') {
            return $v;
        }
    }
    $v = getenv($name);
    if (is_string($v) && $v !== '') {
        return $v;
    }
    if (isset($_ENV[$name]) && is_string($_ENV[$name]) && $_ENV[$name] !== '') {
        return $_ENV[$name];
    }
    if (isset($_SERVER[$name]) && is_string($_SERVER[$name]) && $_SERVER[$name] !== '') {
        return $_SERVER[$name];
    }

    return null;
}

/**
 * Inbox that receives contact/apply form submissions (Resend "To"). Defaults to IIFR_INFO_EMAIL.
 * If Resend shows bounces for info@ (e.g. 554 relay / bad MX), set IIFR_FORM_NOTIFY_TO to a working address
 * until DNS and Hostinger mail for iifr.global are fixed.
 */
function iifr_form_notify_to(): string
{
    if (defined('IIFR_FORM_NOTIFY_TO')) {
        $v = constant('IIFR_FORM_NOTIFY_TO');
        if (is_string($v) && $v !== '' && filter_var($v, FILTER_VALIDATE_EMAIL)) {
            return $v;
        }
    }
    $env = iifr_mail_config('IIFR_FORM_NOTIFY_TO');
    if ($env !== null && filter_var($env, FILTER_VALIDATE_EMAIL)) {
        return $env;
    }

    return IIFR_INFO_EMAIL;
}

/**
 * When IIFR_RESEND_API_KEY is set, PHP mail() fallback is OFF by default. Shared hosts (e.g. Hostinger)
 * often return "554 5.7.1 Relay access denied" for mail() to real inboxes. Set IIFR_ALLOW_PHP_MAIL_FALLBACK
 * to true (define or env) only if your host relays reliably.
 */
function iifr_mail_allow_php_fallback(): bool
{
    if (defined('IIFR_ALLOW_PHP_MAIL_FALLBACK') && IIFR_ALLOW_PHP_MAIL_FALLBACK) {
        return true;
    }
    $v = iifr_mail_config('IIFR_ALLOW_PHP_MAIL_FALLBACK');
    if ($v === null) {
        return false;
    }
    $v = strtolower(trim($v));

    return $v === '1' || $v === 'true' || $v === 'yes';
}

/**
 * Deliver form notifications to iifr_form_notify_to() (see IIFR_FORM_NOTIFY_TO).
 *
 * With IIFR_RESEND_API_KEY: sends via Resend only (unless IIFR_ALLOW_PHP_MAIL_FALLBACK is enabled).
 * Without a key: uses PHP mail() (legacy).
 */
function iifr_send_transactional_email(string $to, string $subject, string $bodyPlain, string $replyToVisitor): bool
{
    $resendKey = iifr_mail_config('IIFR_RESEND_API_KEY');
    if ($resendKey !== null) {
        if (iifr_mail_resend($to, $subject, $bodyPlain, $replyToVisitor, $resendKey)) {
            return true;
        }
        @error_log('[iifr-mail] Resend send failed');
        if (!iifr_mail_allow_php_fallback()) {
            return false;
        }
        @error_log('[iifr-mail] Trying PHP mail() fallback (IIFR_ALLOW_PHP_MAIL_FALLBACK is on)');
    } else {
        @error_log('[iifr-mail] No IIFR_RESEND_API_KEY; using PHP mail()');
    }

    return iifr_mail_php_mail($to, $subject, $bodyPlain, $replyToVisitor);
}

function iifr_mail_resend(string $to, string $subject, string $bodyPlain, string $replyTo, string $apiKey): bool
{
    if (!function_exists('curl_init')) {
        @error_log('[iifr-mail] cURL not available for Resend');
        return false;
    }

    $from = iifr_mail_config('IIFR_RESEND_FROM');
    if ($from === null) {
        $from = 'IIFR Website <onboarding@resend.dev>';
    }

    $payload = [
        'from' => $from,
        'to' => [$to],
        'subject' => $subject,
        'text' => $bodyPlain,
        'reply_to' => $replyTo,
    ];

    $ch = curl_init('https://api.resend.com/emails');
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . $apiKey,
            'Content-Type: application/json',
        ],
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 25,
    ]);
    $raw = curl_exec($ch);
    $errno = curl_errno($ch);
    $code = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    curl_close($ch);

    if ($errno !== 0) {
        @error_log('[iifr-mail] Resend curl error ' . (string) $errno);
        return false;
    }
    if ($code < 200 || $code >= 300) {
        @error_log('[iifr-mail] Resend HTTP ' . (string) $code . ' ' . (string) $raw);
        return false;
    }

    return true;
}

function iifr_mail_php_mail(string $to, string $subject, string $bodyPlain, string $replyToVisitor): bool
{
    $fromAddr = IIFR_INFO_EMAIL;
    if (defined('IIFR_MAIL_SENDER')) {
        $candidate = constant('IIFR_MAIL_SENDER');
        if (is_string($candidate) && $candidate !== '' && filter_var($candidate, FILTER_VALIDATE_EMAIL)) {
            $fromAddr = $candidate;
        }
    }

    $domain = 'iifr.global';
    if (preg_match('/@([^@\s]+)/', $to, $m)) {
        $domain = $m[1];
    }

    $msgId = bin2hex(random_bytes(12)) . '@' . $domain;
    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'From: IIFR Website <' . $fromAddr . '>',
        'Reply-To: ' . $replyToVisitor,
        'Message-ID: <' . $msgId . '>',
        'Date: ' . gmdate('D, d M Y H:i:s \G\M\T'),
        'X-Mailer: IIFR-Contact-Form',
    ];

    $extraParams = '';
    $envelope = iifr_mail_config('IIFR_MAIL_ENVELOPE_FROM');
    if (is_string($envelope) && $envelope !== '' && filter_var($envelope, FILTER_VALIDATE_EMAIL)) {
        $extraParams = '-f' . escapeshellarg($envelope);
    } elseif (filter_var($fromAddr, FILTER_VALIDATE_EMAIL)) {
        $extraParams = '-f' . escapeshellarg($fromAddr);
    }

    return @mail($to, $subject, $bodyPlain, implode("\r\n", $headers), $extraParams);
}
