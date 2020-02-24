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
				
			</aside>
			<article>

                <?php
                    $xml =  simplexml_load_file('datos.xml');
                    
                ?>


                <table cellspacing="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Ciudad</th>
                            <th>Seguidores</th>
                            <th>Himno</th>
                            <th>Fecha de creación</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach($xml->equipo as $equipo) :?>
                    
                   <tr>
                        <td><?php echo $equipo->nombre_equipo; ?></td>
                        <td><?php echo $equipo->ciudad; ?></td>
                        <td><?php echo $equipo->seguidores; ?></td>
                        <td><?php echo $equipo->himno; ?></td>
                        <td><?php echo $equipo->fecha_creacion; ?></td>
                    </tr>

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