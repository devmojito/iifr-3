<?php

declare(strict_types=1);

require_once __DIR__ . '/../iifr-mail.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$allowedReturn = ['contact.php' => true, 'ecp.php' => true, 'apply.php' => true];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php', true, 303);
    exit;
}

$returnTo = isset($_POST['return_to']) && is_string($_POST['return_to']) && isset($allowedReturn[$_POST['return_to']])
    ? $_POST['return_to']
    : 'contact.php';

$context = isset($_POST['context']) && is_string($_POST['context']) ? trim($_POST['context']) : '';
$allowedContext = ['Contact' => true, 'ECP' => true, 'Apply' => true];
$safeContext = isset($allowedContext[$context]) ? $context : 'Contact';

$honeypot = isset($_POST['website']) ? trim((string) $_POST['website']) : '';
if ($honeypot !== '') {
    $_SESSION['iifr_form_success'] = true;
    $hpFrag = ($returnTo === 'apply.php') ? '#apply-cta' : '#inquiry-form';
    header('Location: ' . $returnTo . $hpFrag, true, 303);
    exit;
}

$name = isset($_POST['name']) ? trim((string) $_POST['name']) : '';
$email = isset($_POST['email']) ? trim((string) $_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim((string) $_POST['phone']) : '';
$message = isset($_POST['message']) ? trim((string) $_POST['message']) : '';

if ($name === '' || $email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['iifr_form_error'] = 'Please enter your name and a valid email address.';
    $errFrag = ($returnTo === 'apply.php') ? '#apply-cta' : '#inquiry-form';
    header('Location: ' . $returnTo . $errFrag, true, 303);
    exit;
}

if ($safeContext !== 'Apply' && $message === '') {
    $_SESSION['iifr_form_error'] = 'Please enter your name, a valid email address, and a message.';
    $errFrag = ($returnTo === 'apply.php') ? '#apply-cta' : '#inquiry-form';
    header('Location: ' . $returnTo . $errFrag, true, 303);
    exit;
}

if (strlen($message) > 8000) {
    $_SESSION['iifr_form_error'] = 'Your message is too long. Please shorten it and try again.';
    $lenFrag = ($returnTo === 'apply.php') ? '#apply-cta' : '#inquiry-form';
    header('Location: ' . $returnTo . $lenFrag, true, 303);
    exit;
}

$lines = [
    'IIFR website inquiry',
    'Context: ' . $safeContext,
    '',
    'Name: ' . $name,
    'Email: ' . $email,
    'Phone: ' . ($phone !== '' ? $phone : '—'),
];
if ($message !== '') {
    $lines[] = '';
    $lines[] = 'Message:';
    $lines[] = $message;
}
$lines[] = '';
$lines[] = 'Submitted: ' . gmdate('c');
$body = implode("\n", $lines);

$subject = $safeContext === 'Apply'
    ? 'IIFR — Application (ECP or EFM)'
    : 'IIFR — Website inquiry (' . $safeContext . ')';

$sent = iifr_send_transactional_email(iifr_form_notify_to(), $subject, $body, $email);

if (!$sent) {
    $_SESSION['iifr_form_error'] = 'We could not send your message from this server. Please email ' . IIFR_INFO_EMAIL . ' directly.';
    $failFrag = ($returnTo === 'apply.php') ? '#apply-cta' : '#inquiry-form';
    header('Location: ' . $returnTo . $failFrag, true, 303);
    exit;
}

$_SESSION['iifr_form_success'] = true;
$okFrag = ($returnTo === 'apply.php') ? '#apply-cta' : '#inquiry-form';
header('Location: ' . $returnTo . $okFrag, true, 303);
exit;
