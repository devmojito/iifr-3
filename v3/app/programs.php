<?php
/**
 * Legacy URL: redirect /programs.php to /programmes.php (301).
 */
$target = 'programmes.php';
if (!empty($_SERVER['QUERY_STRING'])) {
    $target .= '?' . $_SERVER['QUERY_STRING'];
}
header('Location: ' . $target, true, 301);
exit;
