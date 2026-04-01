<?php
session_start();
if (isset($_SESSION["usr-new"])) {
	header("Location: dashboard/");
	exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="shortcut icon" href="assets/img/metronic.ico">
	<title>Sistema De Control Transaccional</title>
	<link href="src/css/pluto-fonts.css" rel="stylesheet">
	<link href="src/css/layout.css" rel="stylesheet">	
	<script type="text/javascript" src="src/js/jquery-3.6.0.min.js"></script>	
	<script type="text/javascript" src="src/js/run.js"></script>
</head>
<body>
	<table border="0" cellpadding="0" cellspacing="0" class="inicio">
		<tr>
			<td class="portada">
				<div class="fondo-incial"></div>
			</td>
			<td class="login" align="center">
				<div style="max-width: 340px;">
				<span class="texto-institucional">SISTEMA DE CONTROL TRANSACCIONAL</span>
				<br>
				<br>			
				<br>
				<br>
				<p style="width:100%; text-align: left; font-size: 12px; font-weight: 400; line-height: 9px;" >Bienvenido,</p>
				<p style="width:100%; text-align: left; font-size: 22px; font-weight: 300; line-height: 9px;" >Ingrese aquí</p>
				<input name="pantallafull" id="pantallafull" type="hidden" value="1" />
				<div class="input-container">
			    	<input name="inp-usuario" id="inp-usuario" type="text" placeholder="Escribe tu Usuario" />
			   		<label for="inp-usuario">Usuario</label>
			  	</div>
			  	<br>
				<div class="input-container">
			    	<input name="inp-pass" id="inp-pass" type="password" placeholder="Escribe tu Contraseña" />
			   		<label for="inp-pass">Contraseña</label>
			  	</div>
			  	<br>
			  	<button class="btn btn-azul" type="button" id="btn-ingresar">Ingresar</button>
			  	<br>
			  	<br><br>
			  	<img src="assets/img/logo.svg" width="200px">
			  	<span class="copyright">Desarrollado por <b><a href="#">Metronic, Inc.</a></b> © 2022</span>
			  	</div>
			</td>
		</tr>	
	</table>

	<script type="text/javascript">
	$(document).ready(function(){
		$("#btn-ingresar").click(function(evento){
			if ($("#inp-usuario").val().length > 0) {
				if ($("#inp-pass").val().length > 0) {
					iniciar_sesion($("#inp-usuario").val(),$("#inp-pass").val());
				}else{
					alert("ingrese su contraseña");
				}
			}else{
				alert("ingrese un nombre de usuario");
			}
		});
	});
	</script>
</body>
</html>