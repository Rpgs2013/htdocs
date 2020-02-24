<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/7a761dc153.js" crossorigin="anonymous"></script>
    <title>Clubes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	
	<!--Ejercicio de clase -->
	<!-- -->
	<!--Ejercicio de clase/-->


	<div id="container">
		<header>
			<h1>Futbol</h1>
		</header>

        <!--Musica-->
            <audio src="music/Nightcore - Himno Real Betis Fondo Flamenco.mp3" loop autoplay></audio>
        <!--Musica/-->

		<!--Menu-->
			<div class="menu1">
				<nav>
					<ul>
						<li><a href="clubes.php"><span class="primero"><i class="icon far fa-futbol"></i></i></span>Club</a></li>
						<li><a href="jugadores.php"><span class="segundo"><i class="icon fas fa-users"></i></span>Jugadores</a>
					</ul>
				</nav>
			</div>
		<!--Menu/-->

		<section id="main2">
			<aside>
				<img class="goku" src="images/GokuBetis.jpg" alt="GokuBetis">
			</aside>
			<article>

                <?php
                    $xml =  simplexml_load_file('datos.xml');
                
                ?>


                <table cellspacing="0" cellspacing="0">
                    <thead>
                        <tr>
                            
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Edad</th>
                            <th>DNI</th>
                            <th>Número de lesiones</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                    
                    foreach($xml->equipo as $equipo):
                    
                    foreach($equipo->jugadores->jugador as $jugador) :
                    
                    ?>
                    
                   <tr>
                        <td><?php echo $jugador->nombre_jugador; ?></td>
                        <td><?php echo $jugador->apellidos; ?></td>
                        <td><?php echo $jugador->edad; ?></td>
                        <td><?php echo $jugador->dni; ?></td>
                        <td><?php echo $jugador->n_lesiones; ?></td>
                    </tr>

                    <?php endforeach;?>
                    
                    <?php foreach($equipo->jugadores->suplentes->suplente as $suplente):?>

                    <tr>
                        <td><?php echo $suplente->nombre_jugador; ?></td>
                        <td><?php echo $suplente->apellidos; ?></td>
                        <td><?php echo $suplente->edad; ?></td>
                        <td><?php echo $suplente->dni; ?></td>
                        <td><?php echo $suplente->n_lesiones; ?></td>
                    </tr>



                    <?php endforeach;?>
                    <?php endforeach;?>
                    
                    
                    </tbody>  

                </table>
		
			</article>
		</section>
		<footer>
			<p><small></small></p>
		</footer>
	</div>
</body>
</html>