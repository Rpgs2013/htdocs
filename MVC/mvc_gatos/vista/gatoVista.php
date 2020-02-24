<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <title>Document</title>
</head>
<body style="text-align: center">
<table border="2px">

<thead style="text-align: center">

    <th><em>Nombre</em></th>
    <th><em>Edad</em></th>
    <th><em>Numero de patas</em></th>
    <th><em>Comida que le gusta al gato</em></th>

</thead>

<tbody>

    <?php

    foreach ($datos as $fila) {

    ?>

        <tr style="text-align: center">

            <?php

            echo ("<td>" . $fila["nombre"] . "</td>");
            echo ("<td>" . $fila["edad"] . "</td>");
            echo ("<td>" . $fila["num_patas"] . "</td>");
            echo ("<td>" . $fila["descripcion"] . "</td>");
            ?>

        </tr>


    <?php } ?>

</tbody>
</table>
<h2>Insertar gato</h2>

        <form action="#" method="POST">

            <label for="text">Nombre gato:</label><br>
            <input type="text" name="nombre_gato"><br><br>

            <label for="text">Edad gato:</label><br>
            <input type="text" name="edad_gato"><br><br>

            <label for="text">Numero de patas:</label><br>
            <input type="text" name="num_patas"><br><br>

            <label for="text">Comida que le gusta al gato</label><br>
            <input type="text" name="descripcion"><br><br>

            <input type="submit" name="boton_insertar" value="Insertar gato"><br><br><br>
        </form>

        <h2>Borrar gato</h2>

        <form action="#" method="POST">

            <label for="text">ID gato a borrar:</label><br>
            <input type="text" name="id_borrar"><br><br>

            <input type="submit" value="Borrar" name="boton_borrar"><br><br>

            <input type="submit" value="Mostrar Tabla" name="boton_tabla">

        </form>


</body>
</html>