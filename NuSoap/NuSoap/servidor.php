<?php

require_once 'lib/nusoap.php';

$service = 'service01';

$server = new soap_server();

$server->configureWSDL($service);
            
$input_array = array('a' => 'xsd:int', 'b' => 'xsd:int');
$return_array = array('result' => 'xsd:int');
$server->register(
    'addNumbers', 
    $input_array, 
    $return_array, 
    "urn:$service",
    "urn:$service#addNumbers",
    'rpc', 
    'encoded', 
    'Devuelve la suma de los dos numeros que se le pasen como argumento'
);

$input_array2 = array('cadena' => 'xsd:string', 'cadena2' => 'xsd:string');
$return_array2 = array('result' => 'xsd:string');
$server->register(
    'stringToJson', 
    $input_array2, 
    $return_array2, 
    "urn:$service",
    "urn:$service#stringToJson",
    'rpc', 
    'encoded', 
    'Convierte array en JSON'
);

$input_array3 = array('a' => 'xsd:int', 'b' => 'xsd:int', 'c' => 'xsd:int');
$return_array3 = array('result' => 'xsd:int');
$server->register(
    'getOperationResult', 
    $input_array3, 
    $return_array3, 
    "urn:$service",
    "urn:$service#getOperationResult",
    'rpc', 
    'encoded', 
    'La suma de los dos primeros parámetros por el tercero'
);

$input_array4 = array('cadena' => 'xsd:string');
$return_array4 = array('result' => 'xsd:string');
$server->register(
    'invertWord', 
    $input_array4, 
    $return_array4, 
    "urn:$service",
    "urn:$service#invertWord",
    'rpc', 
    'encoded', 
    'Invierte un string'
);

$input_array5 = array('a' => 'xsd:int', 'b' => 'xsd:int', 'cadena' => 'xsd:string');
$return_array5 = array('result' => 'xsd:int');
$server->register(
    'calcOperator', 
    $input_array5, 
    $return_array5, 
    "urn:$service",
    "urn:$service#calcOperator",
    'rpc', 
    'encoded', 
    'Elige operacion'
);

$server->service(file_get_contents('php://input'));

function addNumbers($a,$b)
{
    $c = $a + $b;
    return $c;
}

function stringToJson($cadena, $cadena2){

    $resultado = array('clave1' => $cadena, 'clave2' => $cadena2);

    $resultado = json_encode($resultado);
    return $resultado;

}

function getOperationResult($a, $b, $c){

    $resultado = ($a + $b) * $c;
    return $resultado;

}

function invertWord($cadena){

    $resultado = strrev($cadena);

    return $resultado;

}

function calcOperator($a, $b, $cadena){

    switch($cadena){

        case "suma":
            $resultado = $a + $b;
        break;
        
        case "resta":
            $resultado = $a- $b;
        break;

        case "multiplicacion":
            $resultado = $a * $b;
        break;

        case "division":
            $resultado = $a / $b;
        break;

        default:
            $resultado = 0;

    }

    return $resultado;

}


?>