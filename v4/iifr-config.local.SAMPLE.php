<?php

declare(strict_types=1);

/**
 * Template only. Production uses committed iifr-config.local.php (Hostinger git pull).
 * For a new environment, copy this to iifr-config.local.php and edit, or use hPanel env vars.
 */

define('IIFR_RESEND_API_KEY', 're_paste_your_key_here');
define('IIFR_RESEND_FROM', 'IIFR Website <notifications@iifr.global>');

// If info@iifr.global bounces at the receiving server, send forms here until mail/MX is fixed:
// define('IIFR_FORM_NOTIFY_TO', 'your-working-inbox@gmail.com');
