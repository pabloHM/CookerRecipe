$(function(){
	$.ajax({
        type: 'POST',
        url: 'php/misRecetas.php',
        data: 'user=' + $('.nameUser').text(),
        success:function(data){
        	var recetas=data.split(";");
        	for(var i=0; i<recetas.length-1; i++){
        		var elemento = '<a href="#" class="list-group-item item">';
	            elemento += '<span class="nReceta'+i+'">'+recetas[i]+'</span>';
	            elemento += "<span class='borrar elemBor"+i+" glyphicon glyphicon-remove'></span>";
	            elemento += '</a>';
	            elemento += '<div class="pReceta">';
	            elemento += '<div class="ingredientes"><div class="tIng">Ingredientes:</div></div>';
	            elemento += '<div class="pasos"><div class="tPasos">Preparación:</div></div>';
	            elemento += '</div>';
	            $(".list-group").append(elemento);
        	}

        	$(".item").click(function(evnt){
		    	evnt.preventDefault();
		    	$(".ingred").remove();
		    	$(".prep").remove();
		    	$.ajax({
			        type: 'POST',
			        url: 'php/datosReceta.php',
			        data: 'user=' + $('.nameUser').text()+'&titulo='+$(':first-child', this).text(),
			        success:function(data){
			        	var ingredientes=data.split("^*")[0];
			        	var pasos=data.split("^*")[1];
			        	var ingArray=ingredientes.split(";");
			        	for(var i=0; i<ingArray.length-1; i++){
			        		$(".ingredientes").append("<p class='ingred'>"+ingArray[i]+"</p>");
			        	}
			        	
			        	var saltoPasos=pasos.split("\n");
			        	for(var i=0; i<saltoPasos.length; i++){
			        		$(".pasos").append("<p class='prep'>"+saltoPasos[i]+"</p>");
			        	}
			        },
			        error:function(err){
			        	$("#errorLogup").show();
			            console.log(err);
			        }
			    });

		    	if($(this).next(".pReceta").css('display')=='none'){
			    	$(this).next(".pReceta").slideDown("slow");
		    	}
		    	else{
		    		$(this).next(".pReceta").slideUp("fast");
		    	}
		    });

			$(".borrar").click(function(evnt){
				evnt.preventDefault();
				var confirmar=confirm("¿Estás seguro que deseas borrar esta receta?");
				var that = $(this).parent();
				if(confirmar){
					$.ajax({
				        type: 'POST',
				        url: 'php/delReceta.php',
				        data: 'user=' + $('.nameUser').text()+'&titulo='+$(":first-child", that).text(),
				        success:function(data){
				        	console.log(data);
				        },
				        error:function(err){
				        	console.log(err);
				        	alert("Ha surgido un problema con el servidor al borrar los datos.")
				        }
				    });
				}

				location.reload();
			});
        },
        error:function(err){
        	$("#errorLogup").show();
            console.log(err);
        }
    });
});