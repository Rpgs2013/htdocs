<?php
    function select_info($conn, $tabla) {
        include_once("conexion.php");
        $nombreTabla = $_POST["nombreTabla"];
        $mysqli = new mysqli("localhost", "root", "", "alquilerCoches");

        if($mysqli -> connect_errno) {
            printf("Falló la conexión: %s\n, $mysqli->connet_error");
            exit();
        }

        $result = $mysqli -> query("SELECT * FROM" . $nombreTabla);
        foreach($result as $valor1) {
            foreach($valor1 as $valor2 => $valor3) {
                echo ($valor2 . ": " . $valor3 . "<br>");
            }
        }
    }
 ?>