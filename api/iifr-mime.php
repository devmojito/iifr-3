<?php

declare(strict_types=1);

function iifr_strip_mount_prefix(string $path, string $prefix): string
{
    if ($path === $prefix || str_starts_with($path, $prefix . '/')) {
        return substr($path, strlen($prefix)) ?: '/';
    }

    return $path;
}

function iifr_content_type_for_path(string $path): string
{
    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));

    return match ($ext) {
        'css' => 'text/css; charset=utf-8',
        'js' => 'application/javascript; charset=utf-8',
        'json' => 'application/json; charset=utf-8',
        'svg' => 'image/svg+xml',
        'png' => 'image/png',
        'jpg', 'jpeg' => 'image/jpeg',
        'webp' => 'image/webp',
        'gif' => 'image/gif',
        'avif' => 'image/avif',
        'mp4' => 'video/mp4',
        'woff' => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf' => 'font/ttf',
        'eot' => 'application/vnd.ms-fontobject',
        'pdf' => 'application/pdf',
        'html', 'htm' => 'text/html; charset=utf-8',
        default => 'application/octet-stream',
    };
}
