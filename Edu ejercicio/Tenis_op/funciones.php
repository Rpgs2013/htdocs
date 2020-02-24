<?php

//index.php functions

function register_user(){

    if(isset($_POST["register_form"])){

        $nombre = $_POST["username"];
        $contra = $_POST["password"];
        $password_2 = $_POST["password_confirm"];
       
    
        if(!isset($_SESSION["users"])){
        $_SESSION["users"]=array();
        }
    
        if($contra == $password_2){
    
            $user = [$nombre, $contra];
        
            $_SESSION["users"] [] = $user;
            echo'<script type="text/javascript">alert("Se ha llevado a cabo el registro!")</script>';
        }else{
        
            echo'<script type="text/javascript">alert("No se ha podido registrar")</script>';
        
        }
        
    }


}




function login_user(){

    $valor3 = false;
    if(isset($_POST["login_form"])){

        $nombre = $_POST["username"];
        $contra = $_POST["password"];
        $valor1 = false;
        $valor2 = false;
        
    
        foreach($_SESSION["users"] as $val1){
    
            
            if(in_array($nombre, $val1)){
    
               
                $valor1 = true;
                
            }
    
    
            if(in_array($contra, $val1)){
    
               
                $valor2 = true;
    
            }
            
        }
    }else{
    
        $valor1 = false;
        $valor2 = false;
    
    
    }

    if($valor1 == true && $valor2 == true){

        $valor3 = true;

    }else{

    }

    return $valor3;

}


function get_style($valor3){

$estilo = "";
if($valor3 == true){

}else{

    $estilo = "style='display:none;'";

}

return $estilo;


}

//fin index.php





//generar tabla de jugadores

function player_table(){

    $xml = simplexml_load_file("datos.xml");



    foreach($xml->pais as $valor1){


        foreach($valor1->jugadores->jugador as $valor2){


            echo("<tr>");

                echo("<td>" . $valor2->nombre_jugador . "</td>");
                echo("<td>" . $valor2->edad . "</td>");
                echo("<td>" . $valor2->dni . "</td>");
                echo("<td>" . $valor2->peso . "</td>");
                echo("<td>" . $valor2->n_victorias . "</td>");
                echo("<td>" . $valor2->ranking_atp . "</td>");

            echo("</tr>");


        }


    }


}


//generar tabla de equipos

function team_table(){

    $xml = simplexml_load_file("datos.xml");

    foreach($xml->pais as $valor1){

        echo("<tr>");

                echo("<td>" . $valor1->nombre_pais . "</td>");
                echo("<td>" . $valor1->continente . "</td>");
                echo("<td>" . $valor1->longitud . "</td>");
                echo("<td>" . $valor1->latitud . "</td>");
            
        echo("</tr>");


    }


}


?>