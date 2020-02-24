<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $database = "task";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if($conn) {
        echo "Database is connected";
    } else {
        echo "No esta conectada";
    }

    if ($conn -> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully" . "<br>";
 ?>