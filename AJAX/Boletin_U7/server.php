<?php

$origen = $_POST["origen"];
$destinos = array();
$resultado = "";

switch($origen){

    case 'madrid':
        $destinos = ["Barcelona", "Valencia", "Sevilla"];
    break;

    case 'barcelona':
        $destinos = ["Madrid", "Zaragoza"];
    break;

    case 'valencia':
        $destinos = ["Madrid"];
    break;

}

echo json_encode($destinos);

?>