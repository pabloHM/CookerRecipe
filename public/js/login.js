$(function(){
	var timeSlide = 1000;
	$('button').click(function(evnt){
		evnt.preventDefault();
		$.ajax({
                    type: 'POST',
                    url: 'php/login.php',
                    data: 'user' + $('#user').val() + '&pass' + $('#pass').val(),
                    success:function(msg){
                        if ( msg == 1 ){
                            $('#alertBoxes').html('<div class="box-success"></div>');
                            $('.box-success').hide(0).html('Espera un momento…');
                            $('.box-success').slideDown(timeSlide);
                            setTimeout(function(){
                                window.location.href = ".";
                            },(timeSlide + 500));
                            console.log("TODO BIEN");
                        }
                        else{
                            $('#alertBoxes').html('<div class="box-error"></div>');
                            $('.box-error').hide(0).html('Lo sentimos, pero los datos son incorrectos: ' + msg);
                            $('.box-error').slideDown(timeSlide);
                            console.log("ERROR EN LOS DATOS");
                            console.log(msg);
                        }
                        $('#timer').fadeOut(300);
                    },
                    error:function(){
                        $('#timer').fadeOut(300);
                        $('#alertBoxes').html('<div class="box-error"></div>');
                        $('.box-error').hide(0).html('Ha ocurrido un error durante la ejecución');
                        $('.box-erro2r').slideDown(timeSlide);
                        console.log("HA PETA´O");
                    }
                });
	});
});