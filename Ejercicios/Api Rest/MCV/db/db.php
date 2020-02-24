<?php
class Conectar{
    public static function conexion(){
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $database = "mvc";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn -> connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully" . "<br>";
        return $conn;
    }
}
?>