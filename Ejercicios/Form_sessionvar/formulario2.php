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

				<label class="nombres" for="name" id="nombre">Nombre de Usuario:</label><br>
				<input class="imputs" class="nombres" type="text" id="uno" name="nombre" placeholder="Nombre de Usuario"><br>

				<label class="nombres" for="ap" id="apellidos">Apellidos:</label><br> 
				<input class="imputs" type="text" id="dos" name="ap" placeholder="Apellidos"><br>

				<label class="nombres" for="name" id="Edad">Edad:</label><br>
				<input class="imputs" type="text" id="tres" name="edad" placeholder="Edad"><br>

				<label class="nombres" for="password" id="contraseña">Contraseña:</label><br>
				<input class="imputs" type="password" id="cuatro" name="password" placeholder="Contraseña"><br>

				<label for="r_password" id="contraseña_2">Repetir contraseña:</label><br>
				<input type="password" id="cinco" name="password_2" placeholder="Repetir contraseña"><br>

				<a id="login" href="index.php"> <small> Volver a la página principal</small></a><br>

				<input type="submit" value="Enviar" id="enviar"><br>
			</form>
		</div>
	</div>

</body>
</html>
