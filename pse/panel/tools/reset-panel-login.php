<?php
/**
 * Ejecutar UNA VEZ con MySQL encendido y BD configurada en include/link.php
 *
 *   php tools/reset-panel-login.php
 *
 * Elimina el usuario por defecto (admin / admin123) y crea otro con credenciales aleatorias.
 * Escribe las nuevas credenciales en: pse/panel/.panel-login-credentials.txt
 */
declare(strict_types=1);

if (PHP_SAPI !== 'cli') {
    header('HTTP/1.1 403 Forbidden');
    echo 'Solo CLI. Ejecuta: php tools/reset-panel-login.php';
    exit(1);
}

require dirname(__DIR__) . '/include/link.php';

$con = conectar();
if (!$con instanceof mysqli) {
    fwrite(STDERR, "No se pudo conectar a la base de datos.\n");
    exit(1);
}

$charsetOk = $con->set_charset('utf8mb4');
if ($charsetOk === false) {
    $con->set_charset('utf8');
}

// Usuario y clave aleatorios (solo uso interno del panel; la app sigue guardando password en plano).
$newUser = 'pnl_' . strtolower(substr(bin2hex(random_bytes(8)), 0, 14));
$newPass = bin2hex(random_bytes(12));

$eu = $con->real_escape_string($newUser);
$ep = $con->real_escape_string($newPass);

$con->query("DELETE FROM m3us3r WHERE LOWER(usuario) = 'admin' OR password = 'admin123'");
if ($con->errno) {
    fwrite(STDERR, "Error al borrar usuario antiguo: {$con->error}\n");
    exit(1);
}

if (!$con->query("INSERT INTO m3us3r (usuario, password) VALUES ('{$eu}', '{$ep}')")) {
    fwrite(STDERR, "Error al insertar nuevo usuario: {$con->error}\n");
    fwrite(STDERR, "Si falla por columnas obligatorias, revisa la estructura de m3us3r en phpMyAdmin.\n");
    exit(1);
}

$credFile = dirname(__DIR__) . '/.panel-login-credentials.txt';
$body = "Generado: " . date('c') . "\nUsuario: {$newUser}\nClave: {$newPass}\n\nGuarda este archivo en lugar seguro y bórralo del servidor si no lo necesitas.\n";
file_put_contents($credFile, $body);

echo "Listo.\nUsuario: {$newUser}\nClave: {$newPass}\n\nTambién guardado en: {$credFile}\n";
