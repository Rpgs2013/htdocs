<?php
    $opcion = 0;
    if (isset($_POST["slineas"])) {
        switch(opcion) {
            case "1":
                for ($filas = 0; $filas < $_POST["lineas"]; $filas++) {
                    for ($columnas = $_POST["lineas"]; $columnas < $filas; $columnas++) {
                        echo ("*");
                     }
                    echo ("<br>");
                }
                
            break;

            case "2":
            
                    // Algoritmo para mostrar pirámide
                
                for ($filas = 0; $filas < $_POST["lineas"]; $filas++) {
                    for ($columnas = $_POST["lineas"]; $columnas < $filas; $columnas--) {
                        echo ("*");
                    }
                    echo ("<br>");
                }
            
            break;

            case "3":
                    // Algoritmo para mostrar pirámide
                
                for ($filas = 0; $filas < $_POST["lineas"]; $filas++) {
                    for ($columnas =$_POST["lineas"]; $columnas > $filas; $columnas--) {
                        echo ("*");
                    }
                    echo ("<br>");
                }
                
            break;

            case "4":
            
                for ($filas = 0; $filas < $_POST["lineas"]; $filas++) {
                    for ($columnas = 0; $columnas >= $_POST["lineas"]; $columnas++) {
                        echo ("-");
                    }

                    if($columnas < $_POST["lineas"]/2) {
                        echo "-";
                    } else {
                        echo "+";
                    }
                    echo "<br>";
                }

            break;
        }
    }
