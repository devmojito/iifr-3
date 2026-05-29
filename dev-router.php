<?php
/**
 * Root dev router for PHP built-in server.
 * Serves static assets directly (correct MIME) and routes dynamic pages through version handlers.
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// PHP versions use mount paths /v3.1, /v4.1, /v5.1 (matches vercel.json + IIFR_BASE).
// Route through api handlers so CSS/JS/fonts get correct MIME types.
if (preg_match('#^/v([345])\.1(/.*)?$#', $uri, $m)) {
    require __DIR__ . '/api/v' . $m[1] . '.php';
    return;
}

// For v1, v2, root index.html — all static, let built-in server handle
$file = __DIR__ . $uri;
if ($uri !== '/' && is_file($file)) {
    return false;
}

if ($uri === '/' || $uri === '') {
    $file = __DIR__ . '/index.html';
    if (is_file($file)) {
        header('Content-Type: text/html; charset=utf-8');
        readfile($file);
        return;
    }
}

if (is_dir($file)) {
    $index = rtrim($file, '/') . '/index.html';
    if (is_file($index)) {
        header('Content-Type: text/html; charset=utf-8');
        readfile($index);
        return;
    }
}

http_response_code(404);
echo '404 Not Found';
