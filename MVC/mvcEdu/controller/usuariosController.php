<?php

    include_once("./models/usuarioModel.php");
    $usuario = new usuarioModel();
    
    

    if(isset($_POST["boton_insertar"])){

        $nombre_usuario = $_POST["nombre_usuario"];
        $edad_usuario = $_POST["edad_usuario"];

        $usuario->insertUser($nombre_usuario, $edad_usuario);
      
    }

    if(isset($_POST["boton_borrar"])){

        $id_usuario = $_POST["id_borrar"];

        $usuario->deleteUser($id_usuario);
        
    }

    if(isset($_POST["mod_usuario"])){

        $id_usuario = $_POST["id_mod"];
        $nombre_usuario = $_POST["nombre_mod"];
        $edad_usuario = $_POST["edad_mod"];

        $usuario->updateUser($id_usuario, $nombre_usuario, $edad_usuario);
        
    }


    $datos = $usuario->getUsers();
    include("./views/usuarioView.php");
?>