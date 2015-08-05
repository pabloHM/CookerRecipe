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
		<link rel="stylesheet" type="text/css" href="../css/registro.css">
		<!--Custom JS-->
		<script type="text/javascript" src='../js/registro.js'></script>
	</head>
	<body>
		<div class='col-md-3 col-sm-2 col-xs-1'></div>
		<div id='content' class='col-md-6 col-sm-8 col-xs-10'>
			<div id='registro'>
				<form autocomplete="on" role='form'>
					<div id='userInput' class='form-group'>
						<label for='user'>Usuario*:</label>
						<input name='user' type='text' required id='user' class='form-control' placeholder='Introduce tu usuario.' maxlength="20">
						<p class='error'>Debe contener entre 4-20 caracteres.</p>
					</div>
					<div id='emailInput' class='form-group'>
						<label for='email'>E-Mail*:</label>
						<input name='email' type='email' required id='email' class='form-control' placeholder='Introduce tu email.' maxlength="50">
						<p class='error'>Tiene que tener un formato como este: ejemplo@ejemplo.com.</p>
					</div>
					<div id='passInput' class='form-group'>
						<label for='pass'>Contraseña*:</label>
						<input name='pass' type='password' required id='pass' class='form-control' placeholder='Introduce la contraseña.' maxlength="15">
						<p class='error'>Debe contener al menos un número y entre 6-15 caracteres.</p>
					</div>
					<div id='passRepetInput' class='form-group'>
						<label for='passRepet'>Repite la contraseña*:</label>
						<input name='passRepet' type='password' required id='passRepet' class='form-control' placeholder='Introduce la contraseña.' maxlength="15">
						<p class='error'>No coinciden las contraseñas.</p>
					</div>
					<div id='nameInput' class='form-group'>
						<label for='name'>Nombre:</label>
						<input name='name' type='text' id='name' class='form-control' placeholder='Introduce tu nombre.'>
					</div>
					<div id='ape1Input' class='form-group'>
						<label for='ape1'>Primer apellido:</label>
						<input name='ape1' type='text' id='ape1' class='form-control' placeholder='Introduce tu primer apellido.'>
					</div>
					<div id='ape2Input' class='form-group'>
						<label for='ape2'>Segundo apellido:</label>
						<input name='ape2' type='text' id='ape2' class='form-control' placeholder='Introduce tu segundo apellido.'>
					</div>
					<p id='errorDatos'>Cubre los datos obligatorios correctamente.</p>
					<p id='errorLogup'>Error en la conexión a la base de datos.</p>
					<button id='registrar' type="submit" class="btn btn-primary">Registrar</button>
					<button id='cancelar' class="btn btn-danger"><a href='../index.php'>Cancelar</a></button>
				</form>
			</div>
		</div>
		<div class='col-md-3 col-sm-2 col-xs-1'></div>
	</body>
</html>