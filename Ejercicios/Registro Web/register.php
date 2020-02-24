<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
    <?php
    include("function.php");
     ?>

    <form action="#" method="post" name="usuarios">
        <h1>Registro</h1>

        <label for="dni">Dni:</label>
        <input type="text" placeholder="Dni" name="dni"><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="Nombre" name="nombre"><br><br>

        <label for="edad">Edad:</label>
        <input type="text" placeholder="Edad" name="edad"><br><br>

        <label for="n_usuario">Nombre de Usuario:</label>
        <input type="text" placeholder="Nombre de Usuario" name="n_usuario"><br><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" placeholder="Contraseña" name="contraseña"><br><br>

        <input type="submit" value="Enviar" name="enviar">

        <input type="submit" value="Borrar Sesion" name="errase">
    </form>
</body>
</html>