<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if(isset($_POST["boton_listar"])){?>
    <table>

        <thead>

            <th>Nombre</th>
            <th>Edad</th>

        </thead>

        <tbody>

            <?php

            foreach ($datos as $fila) {

            ?>

                <tr>

                    <?php

                    echo ("<td>" . $fila["nombre"] . "</td>");
                    echo ("<td>" . $fila["edad"] . "</td>");

                    ?>

                </tr>


            <?php } ?>

        </tbody>
    </table>
        <?php }?>

        <h2>Insertar usuario</h2>

        <form action="#" method="POST">

            <label for="text">Nombre usuario:</label><br>
            <input type="text" name="nombre_usuario"><br>

            <label for="text">Edad usuario:</label><br>
            <input type="text" name="edad_usuario">

            <input type="submit" name="boton_insertar" value="Insertar usuario">
            <input type="submit" name = "boton_listar" value="Listar">
        </form>

        <h2>Borrar usuario</h2>

        <form action="#" method="POST">

            <label for="text">ID usuario a borrar:</label><br>
            <input type="text" name="id_borrar">

            <input type="submit" value="Borrar" name="boton_borrar">

        </form>

        <h2>Modificar usuario</h2>

        <form action="#" method="POST">

            <label for="text">id</label><br>
            <input type="text" name="id_mod"><br>

            <label for="text">nombre</label><br>
            <input type="text" name="nombre_mod"><br>

            <label for="text">edad</label>
            <input type="text" name="edad_mod"><br>

            <input type="submit" name="mod_usuario" value="Modificar">

        </form>

        <h2>Tabla de usuarios</h2>


</body>

</html>