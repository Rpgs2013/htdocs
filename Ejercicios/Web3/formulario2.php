<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>

<body>

<h1>Formulario de registro - Pacoweb</h1>

<div class="contenedor">
  <form action="datos.php" method="get">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" placeholder="Escriba aquí por favor..." maxlength="50">

    <label for="ap1">Primer apellido</label>
    <input type="text" id="ap1" name="ap1" placeholder="Escriba aquí por favor..." maxlength="50">

    <label for="ap2">Segundo apellido</label>
    <input type="text" id="ap2" name="ap2" placeholder="Escriba aquí por favor..." maxlength="50">
   
    <input type="radio" name="genero" value="hombre"><small> Hombre</small>
    <input type="radio" name="genero" value="mujer"><small> Mujer</small>
    <input type="radio" name="genero" value="otro"><small> Otro</small>
    <br><br>

    <label for="email">Correo electrónico</label>
    <input type="text" id="email" name="email" placeholder="Escriba aquí por favor...">

    <label for="info1"><small>Deseo recibir información sobre novedades y ofertas</small></label>
    <input type="checkbox" id="info1" name="info1" value="info1">
    <br>
    <label for="info2"><small>Declaro haber leido y aceptar las condiciones generales del programa y la normativa sobre protección de datos</small></label>
    <input type="checkbox" id="info2" name="info2" value="info2" checked>
    <br><br>

    <label for="poblacion">Población</label>
    <select id="poblacion" name="poblacion">
      <option value="españita">Españita</option>
      <option value="murcia">Murcia</option>
      <option value="alicante">Alicante</option>
      <option value="madrid">Madrid</option>
      <option value="sevilla">Sevilla</option>
      <option value="valencia">Valencia</option>
    </select>

    <label for="descripcion">Descripción</label>
    <textarea id="descripcion" name="descripcion" placeholder="Escriba aquí por favor..." style="height:200px"></textarea>

    <!--Gracias persona de Stack overflow-->
    <script>
        var allRadios = document.getElementsByName('genero');
        var booRadio;
        var x = 0;
        
        for(x = 0; x < allRadios.length; x++){
          allRadios[x].onclick = function() {
            if(booRadio == this){
             this.checked = false;
             booRadio = null;
            } else {
               booRadio = this;
             }
           };
         } 
    </script>

</body>l