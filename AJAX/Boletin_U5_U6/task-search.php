<?php
    include('conexion.php');
    
    /*if(isset($_POST['search'])) {
        $search = "";
        echo " hola";  
    } else {
        echo "no funciona";
    }*/
    $search = $_POST['search'];

    if(isset($search)) {
        $query = "Select * FROM task.tarea1 WHERE name LIKE '$search%'";
        mysqli_query($conn, $query);
        if(!$result) {
            die("Query Error" . mysqli_error($conn));
        }

        $json = [];
        while(mysqli_fetch_array($result)) {
            $json = array (
                'name' => $row['name'],
                'description' => $row['description'],
                'id' => $row['id']
            );
        } $jsonString = json_encode($json);
        echo $jsonString;
    }
 ?>