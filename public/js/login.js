$(function(){
	$("#user").keyup(function(){
        var lon=$("#user").val().trim().length;
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

    $("#pass").keyup(function(){
        var filter=/^(?=.*[0-9])[a-zA-Z0-9!@#$%^&*]{6,15}$/;
        if(filter.test($("#pass").val().trim())){
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
    
	$('#enviar').click(function(evnt){
		evnt.preventDefault();
		$.ajax({
            type: 'POST',
            url: 'php/login.php',
            data: 'user=' + $('#user').val().trim() + '&pass=' + $('#pass').val().trim() + '&save='+ $('#saveCheck').prop('checked'),
            success:function(data){
                if(data==1){
                	console.log("Login registrado");
                    console.log($('#saveCheck').prop('checked'));
                	location.reload();
                }
                else{
                	$("#loginError").hide();
                	$("#loginError").show();
                	$("#login").height($("#login").height()+$("#loginError").height());
                	console.log(data);
                }
            },
            error:function(err){
            	$("#dbError").show();
                console.log(err);
            }
        });
	});
});