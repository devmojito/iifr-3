<?php

declare(strict_types=1);

/**
 * Primary inbox for website forms, mailto links, and enquiries.
 */
if (!defined('IIFR_INFO_EMAIL')) {
    define('IIFR_INFO_EMAIL', 'info@iifr.global');
}

/**
 * Optional: where form notifications are delivered (Resend recipient). Defaults to IIFR_INFO_EMAIL.
 * Use if info@ bounces until Hostinger email + MX for iifr.global are correct.
 */
// if (!defined('IIFR_FORM_NOTIFY_TO')) {
//     define('IIFR_FORM_NOTIFY_TO', 'inbox@example.com');
// }

/**
 * Optional: From address for PHP mail() when your host only allows sending as a specific mailbox.
 * Must be a valid email. If unset, IIFR_INFO_EMAIL is used.
 *
 * Reliable delivery: iifr-config.local.php (Resend keys) ships with this repo for Hostinger git deploy.
 * Alternatively set IIFR_RESEND_API_KEY / IIFR_RESEND_FROM in hPanel environment variables.
 */
// if (!defined('IIFR_MAIL_SENDER')) {
//     define('IIFR_MAIL_SENDER', 'no-reply@iifr.global');
// }

$__iifr_local = __DIR__ . '/iifr-config.local.php';
if (is_file($__iifr_local)) {
    require $__iifr_local;
}
unset($__iifr_local);
