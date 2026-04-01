<?php
/**
 * XAMPP / Apache: mismo contrato que api/vuelos.js (Vercel).
 * La URL visible sigue siendo /api/vuelos gracias al .htaccess.
 * Nombre distinto a vuelos.js para evitar conflicto en deploy de Vercel.
 */
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

$path = __DIR__ . '/places.json';
if (!is_readable($path)) {
    http_response_code(500);
    echo json_encode(['error' => 'places.json no disponible']);
    exit;
}

$places = json_decode(file_get_contents($path), true);
if (!is_array($places)) {
    http_response_code(500);
    echo json_encode(['error' => 'JSON inválido']);
    exit;
}

function norm($s) {
    $t = strtolower((string) $s);
    if (function_exists('iconv')) {
        $t = @iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $t) ?: $t;
    }
    return preg_replace('/[^a-z0-9\s]/', '', $t);
}

$q = norm(isset($_GET['query']) ? $_GET['query'] : '');
$rec = isset($_GET['recommendation']) && $_GET['recommendation'] === 'true';
$rawSize = isset($_GET['size']) ? (int) $_GET['size'] : 15;
$size = max(1, min(50, $rawSize > 0 ? $rawSize : 15));

$out = [];
if ($q === '' && $rec) {
    usort($places, function ($a, $b) {
        return ($b['positions'] ?? 0) - ($a['positions'] ?? 0);
    });
    $out = array_slice($places, 0, $size);
} elseif (strlen($q) >= 1) {
    foreach ($places as $p) {
        $hay = norm(
            ($p['displayText'] ?? '') . ' ' .
            ($p['code'] ?? '') . ' ' .
            ($p['displayDestinationHtml'] ?? '')
        );
        if (strpos($hay, $q) !== false) {
            $out[] = $p;
            if (count($out) >= $size) {
                break;
            }
        }
    }
}

echo json_encode($out);
