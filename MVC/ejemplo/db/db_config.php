<?php
    class Conexion {
        public static function conectar() {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "nba";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            return $conn;
        }
    }
?>