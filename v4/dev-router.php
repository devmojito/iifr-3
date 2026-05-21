<?php
/**
 * Dev-only router for PHP built-in server.
 * Returns false for static assets so the server handles MIME types natively.
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $uri;

if ($uri !== '/' && is_file($file) && !preg_match('#\.php$#i', $uri)) {
    return false;
}

require __DIR__ . '/api/index.php';
