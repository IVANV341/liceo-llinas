<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$publicPath = __DIR__ . '/public';
if ($uri !== '/' && file_exists($publicPath . $uri)) {
    return false; // sirve archivos estáticos tal cual
}
require_once $publicPath . '/index.php';
