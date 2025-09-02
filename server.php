<?php
// Router para el servidor embebido de PHP en producción (Railway).
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$publicPath = __DIR__ . '/public';

// Si el archivo estático existe (png, jpg, css, js...), entrégalo tal cual.
if ($uri !== '/' && file_exists($publicPath . $uri)) {
    return false;
}

// Todo lo demás, pásalo al index de Laravel.
require_once $publicPath . '/index.php';
