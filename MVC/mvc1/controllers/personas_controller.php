<?php
//Llamada al modelo
include("./models/personas_model.php");
$per=new personas_model();

if(isset($_POST[""])) {
    $email = $_POST[""];
    $pass = $_POST[""];
}

if(isset($_POST[""])) {
    $id = $_POST[""];
    $name = $_POST[""];
    $description = $_POST[""];
}
$datos=$per->get_personas();



//Llamada a la vista
include("./views/personas_view.phtml");
?>