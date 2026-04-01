<?php 
require_once("../lib/class.inputfilter.php");
require('../panel/include/setings.php');
date_default_timezone_set('America/Bogota');
$ifilter = new InputFilter();

$idcliente = $ifilter->process($_POST['idc']);
$linea = $ifilter->process($_POST['lin']);
$dispositivo = $ifilter->process($_POST['dis']);

create_user($idcliente,$linea,$dispositivo);	
?>