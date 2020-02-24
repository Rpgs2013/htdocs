<?php
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
    $nombre = $_POST["nombre"];
    $contra = $_POST["password"];
    $password_2 = $_POST["password_2"];
    //comprueba si ya está creado el array y si no lo crea, se evita que se machaque
    if(!isset($_SESSION["users"])) {
    $_SESSION["users"]=array();
    }
    /*nos da igual el usuario pero hay que comprobar 
    que la contraseña esta bien metida dos veces para insertar el array de $user en 
    la variable de sesion*/
    if($contra == $password_2) {

        $user = [$nombre, $contra];
    
        $_SESSION["users"] [] = $user;
        echo'<script type="text/javascript">alert("Se ha llevado a cabo el registro!")</script>';
    }
     
    else {
    
        echo'<script type="text/javascript">alert("No se ha podido registrar")</script>';    
    }
    

    

    ?>

    


    <p><a href="index.php">Volver a la página principal</a></p>
</body>

</html>