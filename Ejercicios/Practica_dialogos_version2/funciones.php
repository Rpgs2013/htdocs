<?php


function leer_xml()
{


    $xml = simplexml_load_file('datos.xml');

    return $xml;
}


function comprobar_submit()
{


    if (isset($_POST["submit"])) {

        $id = $_POST["opcion"];
    } else {
        $id = 1;
    }

    return $id;
}


function imprimir_dialogo($xml, $id)
{


    foreach ($xml->conversacion as $valor) {


        if ($valor->attributes() == $id) {
            

            echo ("(" . $valor->situacion . ") " . $valor->personaje . ": " . $valor->dialogo);
        }
    }
}


function imprimir_opcion($xml, $id)
{


    foreach ($xml->conversacion as $valor2) {

        if ($valor2->attributes() == $id) {


            foreach ($valor2->opciones->opcion as $valor3) {


                echo ("<option value=" . "'" . $valor3->attributes() . "'" . ">" . $valor3 . "</option>");
            }
        }
    }
}
