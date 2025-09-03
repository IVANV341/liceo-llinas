<?php
// Router para el servidor embebido de PHP.
// Si el archivo estático existe (png, jpg, css, js), se sirve tal cual.
// Si no, se reescribe a index.php de Laravel.
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}
require __DIR__ . '/index.php';
