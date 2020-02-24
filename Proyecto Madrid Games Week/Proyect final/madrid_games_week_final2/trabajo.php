<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabajo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style_3.css">
    <link rel="stylesheet" href="style_4.css">
    <link rel="stylesheet" href="style_1.css">
    <link rel="stylesheet" href="style_2.css">
</head>

<body>

    <header>

        <img src="images/logo_2.png" alt="Dark souls logo" class="header-image">


    </header>
        <nav class="navbar navbar-expand-sm" id=narvbar_principal>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav" id="prueba">
                <li class="nav-item">
                    <a class="nav-link" href="index.html"><strong>Home</strong></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="reservas.html"><strong>Reserva</strong></a></li>
                <li class="nav-item">
                    <a class="nav-link" href="trabajo.php"><strong>Trabajo</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Galeria/exporthtml/exporthtml/index.html"><strong>Galería</strong></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plataformas.html"><strong>Plataformas</strong></a></li>
            </ul>
      </div>  
    </nav>


    <div class="container2">

        <p class="prueba">Para aplicar como parte del equipo de FROM SOFTWARE, por favor rellene el formulario con
            su nombre/apellidos y adjunte un documento válido que contenga su CV.
        </p> <br>

        <form action="ningun_sitio.php" method="post" enctype="multipart/form-data">

            <label for="nombre">Nombre:</label> <br>
            <input type="text" name="nombre" placeholder="Escribe aquí..." class="form-text">
            <br>
            <label for="apellidos">Apellidos:</label> <br>
            <input type="text" name="apellidos" placeholder="Escribe aquí..." class="form-text">
            <br>
            <input type="file">
            <input type="submit" value="Enviar" class="form-btn">

        </form>


    </div>


    <!-- Equipo -->

    <!--Section: Testimonials v.1-->
<section class="section pb-3 text-center" id="prueba">

  <!--Section heading-->
  <h1 class="section-heading h1 pt-4" id="equipo">Equipo</h1>
  <!--Section description-->
  <p class="section-description"></p>

  <div class="row">

        <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

      <!--Card-->
      <div class="card testimonial-card">

        <!--Background color-->
        <div class="card-up blue lighten-2">
        </div>

        <!--Avatar-->
        <div class="avatar mx-auto white"><img src="images/Gato.png"
            alt="avatar mx-auto white" class="rounded-circle img-fluid">
        </div>

        <div class="card-body">
          <!--Name-->
          <h4 class="card-title mt-1">Gato</h4>
          <hr>
          <!--Quotation-->
          <p><i class="fas fa-quote-left"></i><strong>BOSS</strong></p>
        </div>

      </div>
      <!--Card-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

      <!--Card-->
      <div class="card testimonial-card">

        <!--Background color-->
        <div class="card-up teal lighten-2">
        </div>

        <!--Avatar-->
        <div class="avatar mx-auto white"><img src="images/miyazaki.png"
            alt="avatar mx-auto white" class="rounded-circle img-fluid">
        </div>

        <div class="card-body">
          <!--Name-->
          <h4 class="card-title mt-1">Hidetaka Miyazaki</h4>
          <hr>
          <!--Quotation-->
          <p><i class="fas fa-quote-left"></i> Yeah <strong>BOY</strong></p>
        </div>

      </div>
      <!--Card-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

      <!--Card-->
      <div class="card testimonial-card">

        <!--Background color-->
        <div class="card-up teal lighten-2">
        </div>

        <!--Avatar-->
        <div class="avatar mx-auto white"><img src="images/papa.png"
            alt="avatar mx-auto white" class="rounded-circle img-fluid">
        </div>

        <div class="card-body">
          <!--Name-->
          <h4 class="card-title mt-1">Robert Downy jr</h4>
          <hr>
          <!--Quotation-->
          <p><i class="fas fa-quote-left"></i> <strong>Becario</strong></p>
        </div>

      </div>
      <!--Card-->

    </div>
    <!--Grid column-->

  </div>

</section>
<!--Section: Testimonials v.1-->

    <!-- /Equipo -->



   <!-- Footer -->
<footer class="page-footer font-small mdb-color darken-3 pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row d-flex justify-content-center">

      <!--Grid column-->
      <div class="col-md-6">

        <div class="embed-responsive embed-responsive-16by9 mb-4"></div>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="terminos.html"> Raúl Gallego And Eduardo Gaspar Team.</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</body>

</html>