<?php
/**
 * Router for PHP built-in server for WordPress
 */

$root = $_SERVER['DOCUMENT_ROOT'];
$path = '/'.ltrim(parse_url($_SERVER['REQUEST_URI'])['path'],'/');

// Serve static files directly
if (file_exists($root.$path) && is_file($root.$path)) {
    return false;
}

// Otherwise, route to index.php
$_SERVER['SCRIPT_FILENAME'] = $root.'/index.php';
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['PHP_SELF'] = '/index.php';
require_once $root.'/index.php';
