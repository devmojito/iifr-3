<?php
/**
 * Dev-only router for PHP built-in server.
 * Returns false for static assets so the server handles MIME types natively.
 */

require_once dirname(__DIR__) . '/api/iifr-mime.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = is_string($uri) && $uri !== '' ? $uri : '/';
$assetPath = iifr_strip_mount_prefix($uri, '/v5.1');

// Built-in server only resolves paths as-is; /v5.1/* must go through api/index.php.
if ($uri === $assetPath && $assetPath !== '/' && is_file(__DIR__ . $assetPath) && !preg_match('#\.php$#i', $assetPath)) {
    return false;
}

require __DIR__ . '/api/index.php';
