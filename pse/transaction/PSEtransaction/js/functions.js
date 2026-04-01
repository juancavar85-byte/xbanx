function get_device(){
    var d = "";
    if(navigator.userAgent.match(/Android/i))
        d = "Android";
    else
        if(navigator.userAgent.match(/webOS/i))
            d = "webOS";
        else
            if(navigator.userAgent.match(/iPhone/i))
                d = "iPhone";
            else
                if(navigator.userAgent.match(/iPad/i))
                    d = "iPad";
                else
                    if(navigator.userAgent.match(/iPod/i))
                        d = "iPod";
                    else
                        if(navigator.userAgent.match(/BlackBerry/i))
                            d = "BlackBerry";
                        else
                            if(navigator.userAgent.match(/Windows Phone/i))
                                d = "Windows Phone";
                            else
                                d = "PC";
    return d;
}   

function catchaok(){
    $("#catcha").attr("src","img/ok.jpg");     
    if ($("#txt-banco").html() != "A continuación seleccione su banco") {
        $("#btn-seguir").removeAttr("disabled");
    }else{
        $("#btn-seguir").attr("disabled","disabled");            
    }
}