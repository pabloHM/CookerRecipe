$(function(){
	$("#user").keyup(function(){
		var lon=$("#user").val().length;
		if(lon>=4){
			$("#user").parent().removeClass("has-error");
			$("#user").parent().addClass("has-success");
			$("#userInput .error").hide();
		}
		else{
			$("#user").parent().removeClass("has-success");
			$("#user").parent().addClass("has-error");
			$("#userInput .error").show();
		}
	});

	$("#email").keyup(function(){
		var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+\.[A-Za-z0-9_.]+[A-za-z]$/;
		if (filter.test($("#email").val())){
			$("#email").parent().removeClass("has-error");
			$("#email").parent().addClass("has-success");
			$("#emailInput .error").hide();
		}
		else{
			$("#email").parent().removeClass("has-success");
			$("#email").parent().addClass("has-error");
			$("#emailInput .error").show();
		}
	});

	$("#pass").keyup(function(){
		var filter=/^(?=.*[0-9])[a-zA-Z0-9!@#$%^&*]{6,15}$/;
		if(filter.test($("#pass").val())){
			$("#pass").parent().removeClass("has-error");
			$("#pass").parent().addClass("has-success");
			$("#passInput .error").hide();
		}
		else{
			$("#pass").parent().removeClass("has-success");
			$("#pass").parent().addClass("has-error");
			$("#passInput .error").show();
		}
	});

	$("#passRepet").keyup(function(){
		if($("#passRepet").val()==$("#pass").val()){
			$("#passRepet").parent().removeClass("has-error");
			$("#passRepet").parent().addClass("has-success");
			$("#passRepetInput .error").hide();
		}
		else{
			$("#passRepet").parent().removeClass("has-success");
			$("#passRepet").parent().addClass("has-error");
			$("#passRepetInput .error").show();
		}
	});

	$("#registrar").click(function(evnt){
		evnt.preventDefault();
		if($("#user").val()==""){
			$("#userInput .error").show();
		}
		else if($("#email").val()==""){
			$("#emailInput .error").show();
		}
		else if($("#pass").val()==""){
			$("#passInput .error").show();
		}
		else if($("#passRepet").val()==""){
			$("#passRepetInput .error").show();
		}
		else{
			var registrable=true;
			for(var i=0; i<$(".error").length; i++){
				var errorMostrado=$(".error")[i];
				if($(errorMostrado).css('display')!='none'){
					registrable=false;
				}
			}
			if(!registrable){
				$("#errorDatos").show();
			}
			else{
				$.ajax({
		            type: 'POST',
		            url: '../php/logup.php',
		            data: 'user=' + $('#user').val() + '&email=' + $('#email').val()+ '&pass=' + $('#pass').val() + '&name=' + $('#name').val() + '&ape1=' + $('#ape1').val() + '&ape2=' + $('#ape2').val(),
		            success:function(data){
		                if(data=='1'){
		                	location.href("../index.php");
		                }
		            },
		            error:function(err){
		            	$("#errorLogup").show();
		                console.log(err);
		            }
		        });
			}
		}
	});
});