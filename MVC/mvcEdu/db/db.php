<?php

    Class Conexion{


        public static function conectar(){

            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "mvc_1";

            $conn = new mysqli($servername, $username, $password, $db);

            if($conn->connect_error){

                echo("No funciona");

            }

            return $conn;

        }

    }

?>