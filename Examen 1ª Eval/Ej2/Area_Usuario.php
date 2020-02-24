<?php
    include("register.php");
    include("login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/7a761dc153.js" crossorigin="anonymous"></script>
    <title>Ej2_Area_Usuario</title>

    <!--“ Necesitamos crear un sitio web, sin base de datos, que tenga las 
    secciones siguientes: • (0.5 puntos) Principal: Información acerca de 
    nuestra biblioteca digital, haciendo hincapié en la gran cantidad de 
    libros que dispone el usuario • (0.5 puntos) Contacto: Formulario con 
    nombre de la persona, email y zona de descripción. Una vez que se envíe, 
    comprobaremos si están vacíos y mostraremos un cartel de “se ha enviado 
    correctamente” • (3 puntos) Área usuarios: Dentro habrá un registro con 
    dni,nombre de usuario y clave y otra zona de login, con usuario y clave solamente.
     Para poder acceder tienen que registrarse y luego hacer login. Una vez dentro, 
     habrán 3 libros, con sus imágenes, su descripción, la cantidad que queremos, 
     el precio y un botón de comprar. En cuanto compremos uno, arriba, deberá de 
     aparecer una pequeña tabla con el título del libro, la cantidad y su precio total. 
     Esto saldrá para cada compra que hagamos, manteniendo lo que ya habíamos comprado.” -->

</head>
<body>
    <nav id="navigation" class="sticky">
		<ul id="navbar">
			<li><a href="#"><i class="fas fa-book-dead"></i></a></li>
			<li><a class="cool-link" href="ej2.php">Principal</a></li>
			<li><a class="cool-link" href="Contacto.php">Contacto</a></li>
			<li><a class="cool-link" href="#">Area de Usuario</a></li>
		</ul>
    </nav>
    
    <header>
		<h1 id="titulo">Formulario:</h1>
	</header>

		<div>
			<form action="register.php" method="post" enctype="multipart/form-data">

				<label class="nombres" for="name" id="nombre">Nombre de Usuario:</label><br>
				<input class="imputs" class="nombres" type="text" id="uno" name="nombre" placeholder="Nombre de Usuario"><br>

				<label class="nombres" for="name" id="DNI">DNI:</label><br>
				<input class="imputs" type="text" id="tres" name="dni" placeholder="Edad"><br>

				<label class="nombres" for="password" id="contraseña">Contraseña:</label><br>
                <input class="imputs" type="password" id="cuatro" name="password" placeholder="Contraseña"><br>
                
                <label for="r_password" id="contraseña_2">Repetir contraseña:</label><br>
				<input type="password" id="cinco" name="password_2" placeholder="Repetir contraseña"><br>

				<a id="login" href="index.php"> <small> Volver a la página principal</small></a><br>

				<input type="submit" value="Enviar" id="enviar"><br>
            </form>
        <div>
    
</body>
</html>