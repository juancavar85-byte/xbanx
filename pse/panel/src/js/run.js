function iniciar_sesion(u,p){   
    $.post( "run/sesion.php",{ usr: u, pass: p }, function( data ) {
        if (data == "OK") {
            window.location.href = "dashboard";
        }else{
            if (data == "NO") {
                alert("Usuario no Registrado");
                /*$(".mensaje").show();
                $(".mensaje").html("Usuario no Registrado");
                $("#txtUsuario").focus();*/
            }else{
                if (data == "ERR") {
                    alert("Problemas de conexión");
                    /*$(".mensaje").show();
                    $(".mensaje").html("Problemas de conexión");
                    $("#txtUsuario").focus();*/
                }   
            }                           
        }
    });     
}


function cerrar_sesion(){
    $.post( "../run/cerar-sesion.php", function(data) {
        if (data == "OK") {
            window.location.href = "../";
        }
    });  
}


function sonido(){
    $.post( "../run/sonido.php", function(data) {
        if (data == "SI") 
            $("#snd").get(0).play();
        else
            if (data == "OTP") 
                $("#sndOTP").get(0).play();            
    });
}

function load_items(){
    $.post( "../run/items.php",{ caso: sitP }, function( data ) {
        $(".items-trans").html(data);     
        sonido();
    });
}

