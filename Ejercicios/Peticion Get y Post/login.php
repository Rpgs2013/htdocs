<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php

    /*  $comprobar_1 = false;
    $comprobar_2 = false;

    $usuario = $_POST["user"];
    $password = $_POST["password"];

        $fh = fopen('usuarios.txt','r');
        while ($line = fgets($fh)) {
            
            
            if($usuario == $line){

               $comprobar_1 = true;
                echo "funciona";
            }

           
        }
        fclose($fh);

        $fi = fopen('passwords.txt', 'r');
        while ($line2 = fgets($fi)) {
            

            if($password == $line2){


                $comprobar_2 = true;
                echo "funciona";

            }
        }
        fclose($fi);*/

        $comprobar_1 = false;
    $comprobar_2 = false;

    $usuario = $_POST["user"];
    $password = $_POST["password"];

    $filename = "usuarios.txt";
    $fp = fopen($filename, "r");

    $content = fread($fp, filesize($filename));
    $lines = explode("\n", $content);
    
    fclose($fp);

        if(in_array($usuario, array_map("trim", $lines))){

            $comprobar_1 = true;

        }else{

            $comprobar_1 = false;
        }

        $filename2 = "passwords.txt";
        $fp2 = fopen($filename2, "r");
    
        $content2 = fread($fp2, filesize($filename2));
        $lines2 = explode("\n", $content2);


        if(in_array($password, array_map("trim", $lines2))){


            $comprobar_2 = true;

        }else{

            $comprobar_2 = false;

        }
        
        if($comprobar_1 == true && $comprobar_2 == true){
            
            echo '<script type="text/javascript">alert("Bienvenido, ' . $usuario . '")</script>';
        
        }else{

            echo '<script type="text/javascript">alert("Login incorrecto, vuelve a intentalo")</script>';

        }
    ?>




</body>
</html>