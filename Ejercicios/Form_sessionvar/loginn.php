<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo_1.css">
    <title>Document</title>
</head>
<body>

    <header>
        <h1 id="titulo">Inicio de sesión:</h1>
    </header>

    <div class="container">

        <form action="login.php" method="post">

        <label class="nombres" for="user">Usuario</label><br>
        <input class="imputs" type="text" id="user" name="user" placeholder="Usuario">
        <br>
        <label class="nombres" for="password">Contraseña</label><br>
        <input class="imputs" type="password" id="password" name="password" placeholder="Contraseña">
        <br>
        
        <a id="login" href="formulario2.php"><small>Si no tienes una cuenta, crea una.</small></a><br>

        <input id="enviar" type="submit" value="Confirmar">


        </form>

    </div>
    
</body>
</html>