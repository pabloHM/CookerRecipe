$(function(){
	var timeSlide = 1000;
	var contClicks=0;
	$('#enviar').click(function(evnt){
		evnt.preventDefault();
		$.ajax({
            type: 'POST',
            url: 'php/login.php',
            data: 'user=' + $('#user').val().trim() + '&pass=' + $('#pass').val().trim(),
            success:function(data){
                if(data==1){
                	console.log("Login registrado");
                	location.reload();
                }
                else{
                	contClicks++;
                	$("#loginError").show();
                	if(contClicks==1){
                		$("#login").height($("#login").height()+$("#loginError").height());
                	}
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