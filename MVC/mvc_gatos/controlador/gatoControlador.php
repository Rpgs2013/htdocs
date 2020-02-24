<?php

    include_once("./modelo/gatoModelo.php");
    $gato = new gatoModelo();

    if(isset($_POST["boton_insertar"])){

        $descripcion = $_POST["descripcion"];
        $gato->insertComida($descripcion);
        //header("Refresh:0");

    }
    
    if(isset($_POST["boton_insertar"])){

        $nombre_gato = $_POST["nombre_gato"];
        $edad_gato = $_POST["edad_gato"];
        $num_patas = $_POST["num_patas"];
        $descripcion = $_POST["descripcion"];
        $gato->insertGato($nombre_gato, $edad_gato, $num_patas, $descripcion);
        //header("Refresh:0");

    }


    if(isset($_POST["boton_borrar"])){

        $id_gato = $_POST["id_borrar"];

        $gato->deleteGato($id_gato);
        //header("Refresh:0");

    }


    $datos = $gato->getGato();
    include("./vista/gatoVista.php");
?>