<!DOCTYPE html>
<html>
	<head lang='ES'>
		<title>Recetas de Cocina</title>
		<meta charset='UTF-8' />
		<!--Librerías-->
		<link rel="stylesheet" type="text/css" href="bin/Bootstrap/bootstrap.min.css">
		<script type="text/javascript" src='bin/jQuery/jquery-1.11.3.min.js'></script>
		<script type="text/javascript" src='bin/Bootstrap/bootstrap.min.js'></script>
		<!--Custom CSS-->
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<!--Custom JS-->
		<script type="text/javascript" src='js/login.js'></script>
	</head>
	<body>
		<div class='col-md-3 col-sm-2 col-xs-1'></div>
		<?php
			session_start();
			if(!isset($_SESSION['uName'])){
		?>
		<div id='content' class='col-md-6 col-sm-8 col-xs-10'>
			<div id='login'>
				<form autocomplete="on" role='form'>
					<div id='userInput' class='form-group'>
						<label for='user'>Usuario:</label>
						<input name='user' type='text' required id='user' class='form-control' placeholder='Introduce tu usuario'>
					</div>
					<div id='passInput' class='form-group'>
						<label for='pass'>Contraseña:</label>
						<input name='pass' type='password' required id='pass' class='form-control' placeholder='Introduce la contraseña'>
					</div>
					<div class="checkbox">
					    <label>
					    	<input type="checkbox">Recordar contraseña
					    </label>
					</div>
					<div id='loginError' class='error'>Hubo un error en los datos introducidos.</div>
					<div id='bdError' class='error'>Hubo un error en la conexión a la base de datos. Disculpe las molestias.</div>
					<button id='enviar' type="submit" class="btn btn-primary">Enviar</button>
					<button id='registrar' class="btn btn-warning"><a href='pages/registro.html'>Registrar</a></button>
				</form>
			</div>
		</div>
		<?php
			}else{
		?>
		<div id='content' class='col-md-6 col-sm-8 col-xs-10'>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
    				<div class="navbar-header">
      					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        					<span class="sr-only">Toggle navigation</span>
        						<span class="icon-bar"></span>
        						<span class="icon-bar"></span>
        						<span class="icon-bar"></span>
      					</button>
      					<a class="navbar-brand" href="#">CoockerRecipe</a>
   					</div>
    				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      					<!--<ul class="nav navbar-nav">
        					<li class="active">
        						<a href="#">Link <span class="sr-only">(current)</span></a>
        					</li>
      					</ul>-->
      					<div class="navbar-form navbar-right">¡Bienvenido, <?php echo $_SESSION['uName']?>!</div>
    				</div>
  				</div>
			</nav>
		</div>
		<?php
			}
		?>
		<div class='col-md-3 col-sm-2 col-xs-1'></div>
	</body>
</html>