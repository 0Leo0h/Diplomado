<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Seguros</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/c1a6eed86c.js" crossorigin="anonymous"></script>
  <style>
    body {
      background-image: url(/DiplomadoSeguros/img/imgfondo2.jpg);
      background-size: 100%;
    }
  </style>
</head>

<body style="background-color:beige;">


  <nav class="  navbar navbar-expand-lg " style="background-color:rgb(24, 106, 174);">
    <img src="img/img.jpg" style="margin:3px;margin-left: 50px;" class="rounded-circle" width="30" height="30">
    <a class=" ti navbar-brand mb-0 h1" href="index.php" style="font-family: 'Lobster', cursive;">Seguros</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class=" ti navbar-brand mb-0 h1" aria-current="page" href="index.php" style="font-family: 'Lobster', cursive; " hover="background-color:aqua">Comprar seguro</a>
        </li>
        <?php
        session_start();

        if (!isset($_SESSION['rol'])) {
        ?>
          <li class="nav-item">
            <a class=" ti navbar-brand mb-0 h1" aria-current="page" href="login.html" style="font-family: 'Lobster', cursive;margin-left: 1000px;">Login</a>
          </li>
          <?php
        } else {
          if ($_SESSION['rol'] == 'admin') {
          ?>
            <li class="nav-item">
              <a class=" ti navbar-brand mb-0 h1" aria-current="page" href="pageAdmin.php" style="font-family: 'Lobster', cursive;margin-left: 1000px;">Admin</a>
            </li>
        <?php
          }
        }
        ?>
      </ul>
    </div>
  </nav>


  <div class="container ">

    <div class="row h-25 m-3 position-relative">
      <div class="col-4">

        <a href="/DiplomadoSeguros/Personas.php">
          <img class=" im d-block w-100 rounded-start border border-4" style="box-shadow:0px 1px 10px rgba(0,0,0,0.2) ;transition: all 400ms ease;" src="/DiplomadoSeguros/img/img1.jpg" height="600">
        </a>
        <h1 class="a position-absolute  fw-bold " style=" top:20px; left:10%; font-family: 'Lobster', cursive;">Personas
        </h1>

      </div>
      <div class="col-4 ">

        <a href="/DiplomadoSeguros/Vivienda.php">
          <img class="im d-block w-100 border border-4" src="/DiplomadoSeguros/img/img2.jpg" height="600">
        </a>
        <h1 class=" a position-absolute  fw-bold " style="position:position-absolute ; top:20px; right: 42%;font-family: 'Lobster', cursive;">Vivienda</h1>

      </div>
      <div class="col-4 ">

        <a href="/DiplomadoSeguros/Vehiculo.php">
          <img class="im d-block w-100 rounded-end border border-4" src="/DiplomadoSeguros/img/img3.jpg" height="600">
        </a>
        <h1 class="a position-absolute  fw-bold" style="position:position-absolute ; top:20px; right: 10%; font-family: 'Lobster', cursive;">Vehiculo</h1>

      </div>
    </div>
  </div>
  <div style="background-color:rgb(225, 198, 158) ;">
    <h6 class="he" style="font-family: 'Lobster', cursive">
      Hecho por<br> Luis Fernando Buelvas Tordecilla<br> Leonardo David Hernandez Palomo<br> Liseth Del Carmen Montes
      Martínez
    </h6>


    <!--<a href="https://www.facebook.com/luisfernando.buelvastordecilla" target="_blank"> <i class="f fa-brands fa-facebook"></i></a>
<a href="https://www.instagram.com/luis.buelvas" target="_blank"> <i class=" ins fa-brands fa-instagram"></i></a>-->

  </div>


</body>