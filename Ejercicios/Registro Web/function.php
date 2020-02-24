<?php

    include("usuario.php");
    session_start();

    if(isset($_POST["enviar"])) {
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $n_usuario = $_POST["n_usuario"];
        $clave = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);

        $usuario = new Usuario($dni, $nombre, $edad, $n_usuario, $clave);

        if(isset($_POST["usuarios"])) {
            $_SESSION["usuarios"] = array();
        }

        $_SESSION["usuarios"] [] = $usuario;
    }

    if(isset($_POST["errase"])) {
        session_unset();
    }


    if(isset($_POST["send"])) {
        $user = $_POST["user"];
        $pass = $_POST["password"];
        $comprobar = false;

        foreach($_SESSION["usuarios"] as $value) {

            if($user == $value->getN_Usuario() && password_verify($pass, $value -> getClave())) {
                echo "Buenas brother.";
            }
            else {
                echo "Get the fuck off, of my way bitch.";
            }
        }

    }
 ?>