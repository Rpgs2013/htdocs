<?php //declarar la sesion iniciada siempre aqui siempre que se vaya a utilizar $_SESSION
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    
    
    $nombre = $_POST["user"];
    $contra = $_POST["password"];
    $valor1 = false;
    $valor2 = false;

    foreach($_SESSION["users"] as $val1){//Recorrer el array asociativo

        
        if(in_array($nombre, $val1)){

           
            $valor1 = true;
        }


        if(in_array($contra, $val1)){

           
            $valor2 = true;

        }
        
    }
    
    
    if($valor1 == true && $valor2 == true){//comprobacion para ver si el login es valido y mostrar mensaje en js
            
            echo '<script type="text/javascript">alert("Bienvenido, ' . $nombre . '")</script>';
        
        }else{

            echo '<script type="text/javascript">alert("Login incorrecto, vuelve a intentalo")</script>';

        }

    ?>


    <p><a href="index.php">Volver a la página principal</a></p>
</body>

</html>