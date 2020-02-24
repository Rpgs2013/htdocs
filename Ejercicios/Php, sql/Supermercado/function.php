<?php
    include_once("conexion.php");
 ?>

<?php

function mostrar_info() {

    require_once('config.php');
    if (isset($_POST["boton_mostrar"])) {

        $nombre = $_POST["nombre"];

        $sql = "SELECT* FROM CLIENTE a, COCHE b WHERE a.id_coche = b.id_coche AND a.nombre = '" . $nombre . "'";

        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        foreach ($row as $valor=>$valor2) {

            echo ($valor . ": " . $valor2 . "<br>");
        }
    }
}


function mostrar_tabla() {

    if(isset($_POST["boton_tabla"])){

        $nombre_tabla = $_POST["nombre_tabla"];
        
        $mysqli = new mysqli("localhost", "root", "", "clientes_coches");


        if ($mysqli->connect_errno) {
            printf("Falló la conexión: %s\n", $mysqli->connect_error);
            exit();
        }


        $resultado = $mysqli->query("SELECT * FROM " . $nombre_tabla);

        foreach($resultado as $valor1){

            foreach($valor1 as $valor2=>$valor3){

                echo ($valor2 .  ": " . $valor3 ."<br>");
                
            }
        }

    }

}

 ?>