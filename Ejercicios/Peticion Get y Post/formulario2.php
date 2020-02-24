<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilo_1.css">
	<title>Formulario</title>
</head>
<body>
	<div id="div_principal">

	<header>
		<h1 id="titulo">Formulario:</h1>
	</header>

		<div>
			<form action="register.php" method="post" enctype="multipart/form-data">

				<label class="nombres" for="name" id="nombre">Nombre:</label><br>
				<input class="imputs" class="nombres" type="text" id="uno" name="nombre" placeholder="Nombre"><br>

				<label class="nombres" for="ap" id="apellidos">Apellidos:</label><br> 
				<input class="imputs" type="text" id="dos" name="ap" placeholder="Apellidos"><br>

				<label class="nombres" for="name" id="DNI">DNI:</label><br>
				<input class="imputs" type="text" id="tres" name="dni" placeholder="DNI"><br>

				<label class="nombres" for="password" id="contraseña">Contraseña:</label><br>
				<input class="imputs" type="password" id="cuatro" name="password" placeholder="Contraseña"><br>

				<a id="login" href="index.php"> <small> Si no tienes cuenta, registrate aquí.</small></a><br>

				<input type="submit" value="Enviar" id="enviar"><br>
			</form>
		</div>
	</div>

</body>
</html>
<!-- Crear una aplicacion web, donde un usuario de un banco, se puedad registrar y dar de alta una cuenta bancaria. 
Ademas una vez que se ha registrado, debe hacer login en el sistema.
Una vez que ha hecho login en el sistema debe aparecer un cartel que diga "Bienvenido + nombre de usuario." -->