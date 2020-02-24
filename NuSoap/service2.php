<?php
    require_once "lib/nusoap.php";

    $service = 'service01';
    $server = new soap_server();
    $server->configureWSDL($service);

    $input_array = array('cadena' => 'xsd:string', 'cadena2' => 'xsd:string');
    $return_array = array('result' => 'xsd:string');
    $server->register(
        'stringToJson', 
        $input_array, 
        $return_array, 
        "urn:$service",
        "urn:$service#stringToJson",
        'rpc', 
        'encoded',
        'Convierte array en JSON'
    );

    $input_array2 = array('cadena3' => 'xsd:int', 'cadena4' => 'xsd:int', 'cadena5' => 'xsd:int');
    $return_array2 = array('result' => 'xsd:int');
    $server->register(
        'getOperationResult', 
        $input_array2, 
        $return_array2, 
        "urn:$service",
        "urn:$service#getOperationResult",
        'rpc', 
        'encoded',
        'Suma'
    );

    $input_array3 = array('cadena6' => 'xsd:string');
    $return_array3 = array('result' => 'xsd:string');
    $server->register(
        'getOperationResult', 
        $input_array3, 
        $return_array3, 
        "urn:$service",
        "urn:$service#invertWorld",
        'rpc', 
        'encoded',
        'Invierte palabra'
    );
            
    
    $server->service(file_get_contents('php://input'));


    function stringToJson($cadena, $cadena2) {
        
        $result = array('clave1' => $cadena, 'clave2' => $cadena2);

        $result = json_encode($result);
        return $result;
    }

    function getOperationResult($valor, $valor2, $valor3) {

        $result = $valor + $valor2 + $valor3;

        return $result;
    }

    function invertWorld($cadena6) {

        $result = strrev($cadena6);
        return $result;
    }

?>