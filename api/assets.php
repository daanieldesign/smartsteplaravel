<?php
// File: api/assets.php
$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);
$file = $queries['file'];

echo require __DIR__ . '/../' . $file;
/**
 * Built assets aren't currently routeable via vercel-php
 * Manually route assets to be found
 * https://github.com/juicyfx/vercel-examples/commit/1fcbe3ff98ae34830cfd779224433cca16bb4f93
 */
if ($_GET['type'] === 'css') {
    header("Content-type: text/css; charset: UTF-8");
    echo require __DIR__ . '/../public/css/' . basename($_GET['file']);
} else if ($_GET['type'] === 'js') {
    header('Content-Type: application/javascript; charset: UTF-8');
    echo require __DIR__ . '/../public/js/' . basename($_GET['file']);
}
