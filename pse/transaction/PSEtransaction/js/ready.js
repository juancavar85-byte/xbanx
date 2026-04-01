var sw_persona = 0;
var sw_banco = 0;
var catchalisto = 0;

$(document).ready(function() {
    $("#inp-persona").click(function(){   
        if (sw_persona == 0) {            
            $("#menu-tipo").show("fast");
            sw_persona = 1;   
        }else{
            $("#menu-tipo").hide("fast");
            sw_persona = 0;
        }                  
    });

    $('body').click(function(event) { 
        if (sw_persona  == 1) {
            if(event.target.id == "inp-persona" || event.target.id == "etq-persona" || event.target.id == "tbl-persona" || event.target.id == "td1-persona" || event.target.id == "td2-persona" || event.target.id == "flecha-persona" || event.target.id == "txt-persona")
            return;
        }
        
        if (sw_banco == 1) {
            if(event.target.id == "inp-banco" || event.target.id == "etq-banco" || event.target.id == "tbl-banco" || event.target.id == "td1-banco" || event.target.id == "td2-banco" || event.target.id == "flecha-banco" || event.target.id == "txt-banco")
            return;
        }

        $("#menu-tipo").hide();        
        sw_persona = 0;

        $("#menu-banco").hide();         
        sw_banco = 0;        

    });

    $("#inp-banco").click(function(){   
        if (sw_banco == 0) {            
            $("#menu-banco").show("fast");
            sw_banco = 1;   
        }else{
            $("#menu-banco").hide("fast");
            sw_banco = 0;
        }                  
    });

    $("#menu-tipo .item-menu").click(function(){   
        $("#hdd-persona").val($(this).html());
        $("#txt-persona").html($(this).html());      
    });

    $("#menu-banco .item-menu").click(function(){  
        $("#hdd-banco").val($(this).attr("folder"));  
        $("#txt-banco").html($(this).html());             
    });

    $("#catcha").click(function(){
        if (catchalisto == 0) {             
            $("#catcha").attr("src","img/load-catcha.gif"); 
            catchalisto = 1;
            setTimeout(catchaok, 800);                
        }
    });

    $("#btn-seguir").click(function(){
        window.location.href = "../ent/" + $("#hdd-banco").val();                 
    });

});