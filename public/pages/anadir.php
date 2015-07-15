<!DOCTYPE html>
<html>
	<head lang='ES'>
		<title>Recetas de Cocina</title>
		<meta charset='UTF-8' />
		<!--Librerías-->
		<link rel="stylesheet" type="text/css" href="../bin/Bootstrap/bootstrap.min.css">
		<script type="text/javascript" src='../bin/jQuery/jquery-1.11.3.min.js'></script>
		<script type="text/javascript" src='../bin/Bootstrap/bootstrap.min.js'></script>
		<!--Custom CSS-->
		<link rel="stylesheet" type="text/css" href="../css/anadir.css">
		<!--Custom JS-->
		<script type="text/javascript" src='../js/anadir.js'></script>
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION['uName'])){
				header("Location: http://localhost/recetascocina/index.php");
			}
			else{
		?>
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
  					<span class="navbar-form navbar-right">¡Bienvenido, <span class='nameUser'><?php echo $_SESSION['uName']?></span>!</span>
				</div>
			</div>
		</nav>
		<div class='col-md-2 col-sm-2 col-xs-1'></div>
		<div id='content' class='col-md-8 col-sm-8 col-xs-10'>
			<div id='anadir'>
				<form autocomplete="on" role='form'>
					<div id='titInput' class='form-group'>
						<label for='titulo'>Título*:</label>
						<input name='titulo' type='text' required id='titulo' class='form-control' placeholder='Introduce el título.' maxlength="50">
						<p class='error'>No puede quedar vacío.</p>
					</div>
					<div id='ingInput' class='form-group'>
						<label for='ing'>Ingredientes*:</label>
						<div></div>
						<input name='ing' type='text' required class='form-control ingrediente ing0' placeholder='Introduce el siguiente ingrediente.' style='width: 85%; display: inline-block; margin-right: 10px'>
						<span class='glyphicon glyphicon-pencil editar0' style='color: #CC0; cursor: pointer'></span>
						<button id='sigIng' class="btn btn-warning">Siguiente ingrediente</button>
						<p class='error'>Tiene que haber al menos 1 ingrediente.</p>
					</div>
					<div id='pasoInput' class='form-group'>
						<label for='paso'>Pasos*:</label>
						<textarea name='paso' id='paso' rows="8" required class='form-control' placeholder='Introduce los pasos.' maxlength="300"></textarea>
						<p class='error'>Este campo no puede quedar vacío.</p>
					</div>
					<p id='errorDatos'>Cubre los datos obligatorios correctamente.</p>
					<p id='errorAnadir'>Error en la conexión a la base de datos.</p>
					<button id='enviar' type="submit" class="btn btn-primary">Añadir</button>
					<a href='../index.php'><button id='cancelar' class="btn btn-danger">Cancelar</button></a>
				</form>
			</div>
		</div>
		<div class='col-md-2 col-sm-2 col-xs-1'></div>
		<?php
			}
		?>
	</body>
</html>