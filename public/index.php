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
		<?php
			session_start();
			if(isset($_SESSION['tiempo']) && $_SESSION['recordar']=='false'){
				$ahora=date("Y-m-d H:i:s");
				$diffTiempo=strtotime($ahora)-strtotime($_SESSION['tiempo']);
				if($diffTiempo>10){
					session_destroy();
				}
			}

			if(!isset($_SESSION['uName'])){
		?>
		<div class='col-md-3 col-sm-2 col-xs-1'></div>
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
					    	<input type="checkbox" id='saveCheck'>Recordar contraseña
					    </label>
					</div>
					<div id='loginError' class='error'>Hubo un error en los datos introducidos.</div>
					<div id='bdError' class='error'>Hubo un error en la conexión a la base de datos. Disculpe las molestias.</div>
					<button id='enviar' type="submit" class="btn btn-primary">Enviar</button>
					<a href='pages/registro.php'><div id='registrar' class="btn btn-warning">Registrar</div></a>
				</form>
			</div>
		</div>
		<div class='col-md-3 col-sm-2 col-xs-1'></div>
		<?php
			}else{
		?>
		<script type="text/javascript" src='js/misRecetas.js'></script>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
  					<a class="navbar-brand" href="#">CoockerRecipe</a>
				</div>
				<div class='navbar-user'>
					¡Bienvenido, <span class='nameUser'><?php echo $_SESSION['uName']?></span>!<br>
					<a id='logout' href='php/logout.php'>Logout</a>
				</div>
			</div>
		</nav>
		<div class='col-md-2 col-sm-2 col-xs-1'></div>
		<div id='content' class='col-md-8 col-sm-8 col-xs-10'>
			<div id='anadir' class='row'>
				<a href='pages/anadir.php'><button type="button" class="btn btn-default btn-lg col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">Añadir Receta</button></a>
			</div>
			<div class='row'>
				<div id='titleList'>Lista de Recetas</div>
				<div class="list-group"></div>
			</div>
				
		</div>
		<div class='col-md-2 col-sm-2 col-xs-1'></div>
		<?php
			}
		?>
	</body>
</html>