<?php
/**
 * Root dev router for PHP built-in server.
 * Serves static assets directly (correct MIME) and routes dynamic pages through version handlers.
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// For versioned paths, check if it's a static file first — let built-in server handle MIME
if (preg_match('#^/(v[345])(/.*)?$#', $uri, $m)) {
    $version = $m[1];
    $rest = $m[2] ?? '/';
    $filePath = __DIR__ . '/' . $version . $rest;

    // Static file exists and is not PHP → let built-in server serve it natively
    if ($rest !== '/' && is_file($filePath) && !preg_match('#\.php$#i', $filePath)) {
        return false;
    }

    // Dynamic route → go through API handler
    require __DIR__ . '/api/' . $version . '.php';
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
