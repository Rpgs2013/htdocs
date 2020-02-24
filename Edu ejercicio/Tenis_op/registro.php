<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>





<div class="container">
        <header>
            <nav class="main-nav">

                <ul class="main-nav-list">

                    <li class="main-nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="main-nav-item"> <a href="" class="nav-link">Torneo</a> </li>
                    <li class="main-nav-item"> <a href="" class="nav-link">Galería</a> </li>
                    <li class="main-nav-item"> <a href="" class="nav-link">Contacto</a> </li>
                    <li class="main-nav-item"> <a href="registro.php" class="nav-link-active">Registro</a> </li>
                    <li class="main-nav-item"> <a href="login.php" class="nav-link">Login</a> </li>
                    
                </ul>

            </nav>

         </header>



        <div class="register-form">

            <form action="index.php" method="POST">

                <label for="username">Nombre de usuario:</label><br><br>
                <input type="text" name="username" placeholder="Escribe aquí"><br>

                <label for="password">Contraseña</label><br><br>
                <input type="password" name="password" placeholder="Escribe aquí"><br>
                
                <label for="password_confirm">Confirma la contraseña:</label><br><br>
                <input type="password" name="password_confirm" placeholder="Escribe aquí"><br>

                <input type="submit" name="register_form" value="Confirmar">



            </form>


        </div>



</div>
    <audio src="music/Hatsune Miku39 MusicSub español  Romaji.mp3" autoplay loop></audio>
    <div class="anime"> 
        <img class="view" id="anime1" src="images/Juan_esto_es_culpa_de_Dani.png" alt="anime">

        <img class="view" id="anime2" src="images/Esto_tambien.png" alt="anime">
    </div>

<footer class="atp-footer">

<div class="image-wrapper">

    <img src="images/atp_svg.svg" alt="logo atp">


</div>



</footer>




    
</body>
</html>