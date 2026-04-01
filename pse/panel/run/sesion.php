<?php
session_start();
require('../include/link.php');

if ($con = conectar()) {
	$consulta = sentencia($con,"SELECT * FROM m3us3r WHERE usuario = '".$_POST['usr']."' AND password = '".$_POST['pass']."'");
	if (contarfilas($consulta)) {
		$_SESSION["usr-new"] = $_POST['usr'];
		$_SESSION["sesion"] = "OK";	
		echo "OK";
	}else{
		echo "NO";
	}
}else{
	echo "ERR";
}


?>