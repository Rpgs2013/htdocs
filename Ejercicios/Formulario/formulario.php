<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header id="Cabecera">
        <h1 align="center">Esto es un formulario</h1>
    </header>    

    <form action="/action_page.php" method="get">

        <div clas="">
            <label for="name">Nombre:</label> 
            <input type="text" name="nombre" class="formulario"><br>
        </div>

        <div>
            <label for="name">Primer apellido:</label>  
            <input type="text" name="ap_1"><br>
        </div>

        <div>
            <label for="name">Segundo apellido:</label>  
            <input type="text" name="ap_2"><br>
        </div>

        <div>
            <label for="name">Edad:</label>  
            <input type="number" name="edad"><br>
        </div>

        <div>
            <label for="name">DNI:</label> 
            <input type="text" name="dni"><br>
        </div>

        <div>
            <label for="name">Usuario: </label> 
            <input type="text" name="usuario"><br>
        </div>

        <div>
            <label for="name">Contraseña: </label> 
            <input type="text" name="contra"><br>
        </div>

         <!-- Butons -->
        <input type="submit" value="Enviar" class="myButton">
        <input type="reset" value="Reiniciar" class="myButton">
        
    </form>

    <footer id="Footer principal">
        <small>Derechos reservados..... Esto creo que es un footer</small> <address>Tfno: 98286874</address>
    </footer>
</body>
</html>