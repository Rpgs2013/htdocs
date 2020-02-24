<?php
    include "class.php";
    if(isset($_POST["enviar"])) {
        $cif = $_POST["cif"];
        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];

        $Cliente = new Cliente ($cif, $nombre, $direccion);
        $ar[] = $Cliente;
    }

    for($i = 0; $i < count($ar); $i++) {
        echo "CIF: " . $ar[$i] -> getCIF() . "<br>";
        echo "Nombre: " . $ar[$i] -> getNombre() . "<br>";
        echo "Dirección: " . $ar[$i] -> getDireccion() . "<br>";
    }
 ?>