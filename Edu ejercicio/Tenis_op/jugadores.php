<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jugadores</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php include_once("funciones.php"); ?>



    <div class="container">
        <header>
            <nav class="main-nav">

                <ul class="main-nav-list">

                    <li class="main-nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="main-nav-item"> <a href="" class="nav-link">Torneo</a> </li>
                    <li class="main-nav-item"> <a href="" class="nav-link">Galería</a> </li>
                    <li class="main-nav-item"> <a href="" class="nav-link">Contacto</a> </li>
                    <li class="main-nav-item"> <a href="registro.php" class="nav-link">Registro</a> </li>
                    <li class="main-nav-item"> <a href="login.php" class="nav-link">Login</a> </li>
                    <li class="main-nav-item"> <a href="equipos.php" class="nav-link">Equipos</a> </li>
                    <li class="main-nav-item"> <a href="jugadores.php" class="nav-link-active">Jugadores</a> </li>


                </ul>

            </nav>

        </header>

    </div>


    <div class="player-table">

        <table id="table2">

            <thead>

                <tr>

                    <th>Nombre jugador</th>
                    <th>Edad</th>
                    <th>DNI</th>
                    <th>Peso</th>
                    <th>Número victorias</th>
                    <th>Ranking ATP</th>

                </tr>

            </thead>

            <tbody>


            <?php player_table(); ?>




            </tbody>

        </table>

    </div>





    <footer class="atp-footer">

        <div class="image-wrapper">

            <img src="images/atp_svg.svg" alt="logo atp">


        </div>



    </footer>





</body>

</html>