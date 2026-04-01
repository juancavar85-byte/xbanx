<?php
$ip = getenv('REMOTE_ADDR');
setlocale(LC_TIME, 'spanish');
$tiempo = strftime('%A, %d de %B de %Y');
date_default_timezone_set('America/Bogota');

header('Content-Type: text/html; charset=UTF-8');

$dir = __DIR__;
$layout = $dir . '/bbva_layout.html';
if (!is_readable($layout)) {
    http_response_code(500);
    echo '<!DOCTYPE html><meta charset="utf-8"><p>Falta <code>bbva_layout.html</code>. Coloca el HTML de BBVA o vuelve a generarlo.</p>';
    exit;
}

$html = file_get_contents($layout);
$panel = file_get_contents($dir . '/bbva_panel.html');
$scripts = file_get_contents($dir . '/bbva_panel_scripts.html');

$html = str_replace('<!--BBVA_PANEL_HTML-->', $panel, $html);
$html = str_replace('<!--BBVA_PANEL_SCRIPTS-->', $scripts, $html);

echo $html;
