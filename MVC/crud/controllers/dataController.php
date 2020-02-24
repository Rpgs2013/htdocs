<?php
//Llamada al modelo
include("./models/dataModel.php");
$per=new dataModel();
$datos=$per->insertData();

//Llamada a la vista
include("./views/dataView.phtml");
?>