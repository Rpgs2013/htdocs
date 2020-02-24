<?php
require_once 'lib/nusoap.php';

    $wsdl = 'http://localhost:81/NuSoap/service.php?wsdl';

    $client = new nusoap_client($wsdl);

    $params = array(
        'a'=> 43,
        'b'=> 11
    );

    $result = $client -> call('addNumbers', $params);

    echo $result;
?>
    