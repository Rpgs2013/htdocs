<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>

	<div>
	<?php

		echo "Nombre" . $_POST["nombre"] . "<br>";
		echo "DNI" . $_POST["dni"] . "<br>";

		if($_FILES["imagen"]["error"] == 0) {
			echo "Todo ha salido bien." . "<br>";
			$tmp = $_FILES["imagen"]["tmp_name"];
			$name = $_FILES["imagen"]["name"];
			move_uploaded_file($tmp, $name);
			echo $tmp;
			echo $name;
		}

	?>


	</div>
</body>
</html>