$(function(){
	$("#titulo").keyup(function(){
		if($(this).val().trim()==""){
			$(this).parent().removeClass("has-success");
			$(this).parent().addClass("has-error");
			$("#titInput .error").show();
		}
		else{
			$(this).parent().removeClass("has-error");
			$(this).parent().addClass("has-success");
			$("#titInput .error").hide();
		}
	});

	$("#sigIng").click(function(evnt){
		evnt.preventDefault();
		var anadible=true;
		for(var i=0; i<$(".ingrediente").length; i++){
			var errorMostrado=$(".ingrediente")[i];
			if($(errorMostrado).val().trim()==''){
				anadible=false;
			}
		}
		if(anadible){
			$(".ingrediente").parent().removeClass("has-error");
			var inputSig="<input name='ing' type='text' required class='form-control ingrediente ing"+i+"' placeholder='Introduce el siguiente ingrediente.' style='width: 85%; display: inline-block; margin-right: 10px'><span class='glyphicon glyphicon-pencil editar"+i+"' style='color: #CC0; margin: 0px 3px; cursor: pointer'></span><span class='glyphicon glyphicon-remove borrar"+i+"' style='color: #C00; margin: 0px 3px; cursor: pointer'></span>";
			$(this).before(inputSig);
			$(".editar"+i).click(function(evnt){
				evnt.preventDefault();
				$(".ing"+i).attr('disabled', false);
				$(".ing"+i).focus();
			});
			$(".ing"+(i-1)).attr("disabled", true);
			$(".borrar"+i).click(function(evnt){
				evnt.preventDefault();
				$(".ing"+i).remove();
				$(".editar"+i).remove();
				$(".borrar"+i).remove();
			});

			$(".ing"+i).focusout(function(){
				if($(".ing"+i).val().trim()!=""){
					$(this).attr('disabled', true);
					$(this).parent().removeClass("has-error");
				}
				else{
					$(this).parent().addClass("has-error");
				}
			});
		}
		else{
			$(".ingrediente").parent().addClass("has-error");
		}
	});

	$(".editar0").click(function(evnt){
		evnt.preventDefault();
		$(".ing0").attr('disabled', false);
		$(".ing0").focus();
	});

	$(".ingrediente").focusout(function(){
		if($(".ing0").val().trim()!=""){
			$(this).attr('disabled', true);
		}
		else{
			$(this).parent().addClass("has-error");
		}
	});

	$("#paso").keyup(function(){
		if($(this).val().trim()==""){
			$(this).parent().removeClass("has-success");
			$(this).parent().addClass("has-error");
			$("#pasoInput .error").show();
		}
		else{
			$(this).parent().removeClass("has-error");
			$(this).parent().addClass("has-success");
			$("#pasoInput .error").hide();
		}
	});

	$("#enviar").click(function(evnt){
		evnt.preventDefault();
		$(".error").hide();
		if($("#titulo").val().trim()==""){
			$("#titInput .error").show();
		}
		else if($(".ing0").val().trim()==""){
			$("#ingInput .error").show();
		}
		else if($("#paso").val().trim()==""){
			$("#pasoInput .error").show();
		}
		else{
			var anadible=true;
			for(var i=0; i<$(".error").length; i++){
				var errorMostrado=$(".error")[i];
				if($(errorMostrado).css('display')!='none'){
					anadible=false;
				}
			}
			if(!anadible){
				$("#errorDatos").show();
			}
			else{
				var ingredientes="";
				for(var i=0; i<$(".ingrediente").length; i++){
					ingredientes+=$(".ing"+i).val()+";";
				}

				$.ajax({
		            type: 'POST',
		            url: '../php/addRecipe.php',
		            data: 'nuser=' + $(".nameUser").text() + '&titulo=' + $('#titulo').val()+ '&ingredientes=' + ingredientes + '&pasos=' + $('#paso').val(),
		            success:function(data){
		                if(data=='1'){
		                	location.href="../index.php";
		                	console.log(data);
		                }
		                else{
		                	console.log(data);
		                }
		            },
		            error:function(err){
		            	$("#errorAnadir").show();
		                console.log(err);
		            }
		        });
			}
		}
	});
});