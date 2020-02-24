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
   
    if(!isset($_SESSION["users"])) {
    $_SESSION["users"]=array();
    }

    if($contra == $password_2) {

        $user = [$nombre, $contra];
    
        $_SESSION["users"] [] = $user;
        echo'<script type="text/javascript">alert("Se ha llevado a cabo el registro!")</script>';
    }
     
    else {
    
        echo'<script type="text/javascript">alert("No se ha podido registrar")</script>';    
    }

    ?>

    <p><a href="ej2.php">Volver a la página principal</a></p>
</body>

</html>