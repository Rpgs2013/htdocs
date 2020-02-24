<?php
require_once 'lib/nusoap.php';

    $wsdl = 'http://localhost:81/NuSoap/service2.php?wsdl';

    $client = new nusoap_client($wsdl);

    $params = array(
        'cadena'=> 'Roberto',
        'cadena2'=> 'Julian'
    );

    $params2 = array(
        'valor'=> 3,
        'valor2'=> 2,
        'valor3'=> 4
    );

    $params3 = array(
        'cadena3'=>'paco'
    );

    $result = $client -> call('stringToJson', $params) . "<br>";
    $result2 = $client -> call('getOperationResult', $params2) . "<br>";
    $result3 = $client -> call('invertWorld', $params3) . "<br>";

    echo ("Ejercicio 2 parte a: " . $result);
    echo ("Ejercicio 2 parte b: " . $result2);
    echo ("Ejercicio 2 parte c: " . $result3);
?>