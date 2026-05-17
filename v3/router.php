<?php

// Local dev router (php -S localhost:8000 router.php). Matches api/index.php + Vercel behaviour.

$path = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/');
$root = __DIR__;
$file = $root . $path;

if ($path !== '/' && file_exists($file) && !is_dir($file)) {
    return false;
}

if ($path === '/' || $path === '/index.php' || $path === '/index') {
    require $root . '/app/home.php';
    return;
}

if (is_dir($file) && file_exists($file . '/index.php')) {
    require $file . '/index.php';
    return;
}

if ($path !== '/' && preg_match('#^/([^/]+)\.php$#i', $path, $m)) {
    $script = $root . '/app/' . $m[1] . '.php';
    if (is_file($script)) {
        require $script;
        return;
    }
}

if ($path !== '/' && !preg_match('#\.php$#i', $path)) {
    $rel = ltrim($path, '/');
    if ($rel !== '' && !str_contains($rel, '/')) {
        $script = $root . '/app/' . $rel . '.php';
        if (is_file($script)) {
            require $script;
            return;
        }
    }
}

http_response_code(404);
require $root . '/app/404.php';
