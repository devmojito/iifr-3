<?php

declare(strict_types=1);

/**
 * Vercel entrypoint. Public PHP pages live in /app so Vercel does not serve root index.php
 * as a static file (filesystem wins over rewrites). Static assets stay in /assets etc.
 */

$root = dirname(__DIR__);
$rootReal = realpath($root);
if ($rootReal === false) {
    http_response_code(500);
    header('Content-Type: text/plain; charset=utf-8');
    echo 'Server configuration error';
    exit;
}

$appDir = $rootReal . DIRECTORY_SEPARATOR . 'app';

chdir($rootReal);

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = is_string($path) && $path !== '' ? rawurldecode($path) : '/';
if (str_contains($path, '..')) {
    iifr_serve404($appDir);
}

if ($path === '/index.php' || $path === '/index') {
    require $appDir . DIRECTORY_SEPARATOR . 'home.php';
    exit;
}

$fullPath = $rootReal . $path;
if ($path !== '/' && !str_starts_with($path, '/api/') && file_exists($fullPath) && !is_dir($fullPath)) {
    $resolved = realpath($fullPath);
    if ($resolved === false || !str_starts_with($resolved, $rootReal)) {
        iifr_serve404($appDir);
    }
    if (preg_match('#\.php$#i', $resolved)) {
        if (!str_starts_with($resolved, $appDir . DIRECTORY_SEPARATOR)) {
            iifr_serve404($appDir);
        }
        require $resolved;
        exit;
    }
    $mime = function_exists('mime_content_type') ? @mime_content_type($resolved) : null;
    $contentType = (is_string($mime) && $mime !== '') ? $mime : 'application/octet-stream';
    header('Content-Type: ' . $contentType);
    readfile($resolved);
    exit;
}

if ($path === '/') {
    require $appDir . DIRECTORY_SEPARATOR . 'home.php';
    exit;
}

if (is_dir($fullPath) && is_file($fullPath . DIRECTORY_SEPARATOR . 'index.php')) {
    $idx = $fullPath . DIRECTORY_SEPARATOR . 'index.php';
    $resolved = realpath($idx);
    if ($resolved !== false && str_starts_with($resolved, $rootReal) && preg_match('#\.php$#i', $resolved)) {
        if (!str_starts_with($resolved, $appDir . DIRECTORY_SEPARATOR)) {
            iifr_serve404($appDir);
        }
        require $resolved;
        exit;
    }
}

if ($path !== '/' && preg_match('#^/([^/]+)\.php$#i', $path, $m)) {
    $script = $appDir . DIRECTORY_SEPARATOR . $m[1] . '.php';
    if (is_file($script)) {
        require $script;
        exit;
    }
}

if ($path !== '/' && !preg_match('#\.php$#i', $path)) {
    $rel = ltrim($path, '/');
    if ($rel !== '' && !str_contains($rel, '/')) {
        $script = $appDir . DIRECTORY_SEPARATOR . $rel . '.php';
        if (is_file($script)) {
            require $script;
            exit;
        }
    }
}

iifr_serve404($appDir);

function iifr_serve404(string $appDir): void
{
    http_response_code(404);
    header('Content-Type: text/html; charset=utf-8');
    require $appDir . DIRECTORY_SEPARATOR . '404.php';
    exit;
}
