

$(document).ready(function($){ 	

	const urlParams = new URLSearchParams(window.location.search);
	const opcion = urlParams.get("o");
	$("#hdd-opcion").val(opcion);


    $("#btn-banco-mobile,#btn-banco").click(function(){      
   		if ($("#txt-email").val() != "") {
   			$("#cargando").show();
   			enviar_pse($("#txt-email").val());
   		}else{
   			$("#txt-email").css({"border": "1px solid #a94442", "box-shadow": "inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483"});     
   			$("#err-email").show();   		
   		}
    });
});