    <?php
        session_start();
        if(isset($_POST['numero'])) {
            $numero = $_POST['numero'];
            $intentos = $_POST['intentos'] + 1;
        } else {
            $intentos = 1;
            $numero = (20);
        }
    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ej 1_a_b</title>
    <link rel="stylesheet" href="css/adivina.css" />

    <!--“Buenos días, Nuestra empresa, e-Games, solicita un desarrollo a medida
     de un pequeño juego para móviles. El juego consiste en adivinar un número, 
     concretamente el 20. Para ello el jugador tendrá que ir introduciendo números 
     en una pequeña interfaz donde se comprobará si lo introducido es menor, mayor o 
     igual que el número designado anteriormente. Si lo introducido es distinto al 
     valor almacenado, se le indicará al jugador, detallando si es más grande de lo 
     que se busca o más pequeño. En caso de coincidir con lo almacenado, se mostrará, 
     en grande, que ha terminado el juego.”  -->

</head>
    <!--A. Realizar una aplicación web con todo lo que pide nuestro cliente. -->

    <script type="text/javascript" language="JavaScript">
    document.getElementById("espera").focus();
    </script>

<body>
    <h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Acabas de entrar en el juego de tú vida</h1>

    <p>Intenta adivina el número:</p>
    <form method="post" name="espera-un-numero">
        <label>Ingresa un número:</label><br/ >
        <input type="text" id="espera" name="espera" />
        <input name="numero" type="hidden" value="<?= $numero ?>" />
        <input name="intentos" type="hidden" value="<?= $intentos ?>" />
        <input name="submit" type="submit" value="Comprobar" />
    </form>

    <?php
        if($_POST["espera"]){
            $espera  = $_POST['espera'];
            $numero  = $_POST['numero'];
            $intentos = $_POST['intentos'];
            if ($espera < $numero){ 
                echo ("<br>" . "Intenta con un número más alto." . " Llevas " . $intentos . " intentos." . "<br>" . "Te quedan " . (5-$intentos) . " intentos.");
            } elseif($espera > $numero){       
                echo ("<br>" . "Intenta con un número más bajo." . " Llevas " . $intentos . " intentos." . "<br>" . "Te quedan " . (5-$intentos) . " intentos.");
            } elseif($espera == $numero){      
                echo "<p>Has aprobado, era ese el número!!</p>";
                echo "<p>Lo has hecho en ", ($intentos), " intentos.</p>";
            }            
        }

        if($intentos == 5) {
            echo ("<br>" . "<br>" . "GAME OVER!!");
            echo "<p>Has gastado tus ", ($intentos), " intentos, más suerte la proxima vez.</p>";
            session_destroy();
        }
    ?>
</body>
</html>