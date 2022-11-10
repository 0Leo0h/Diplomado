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
      background-image: url(/Diplomado/img/imgfondo2.jpg);
      background-size: 100%;
    }
    
    
    
  </style>
</head>

<body >

<header>
  <nav class="  navbar navbar-expand-lg " >
    <img src="img/img.jpg"  class=" logo rounded-circle"  width="45" height="45">
    <a class=" seg navbar-brand mb-0 h1" href="index.php" style="font-family: 'Lobster', cursive;">Seguros</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <?php
        session_start();

        if (!isset($_SESSION['rol'])) {
        ?>
          <li class="nav-item">
            <a class=" adm navbar-brand mb-0 h1" aria-current="page" href="login.html" style="font-family: 'Lobster', cursive;">Login</a>
          </li>
          <?php
        } else {
          if ($_SESSION['rol'] == 'admin') {
          ?>
            <li class="nav-item">
              <a class=" adm navbar-brand mb-0 h1" aria-current="page" href="pageAdmin.php" style="font-family: 'Lobster', cursive;">Admin</a>
            </li>
        <?php
          }
        }
        ?>
      </ul>
    </div>
  </nav>
  </header>

  
  <div class="container " style="margin-top:6%">

    <div class="row h-25 m-3 position-relative">
      <div class="col-4">

        <a href="catalogoSV.php">
          <img class=" im d-block w-100 rounded-start border border-4"  src="/Diplomado/img/img1.jpg" height="600">
        </a>
        <h1 class="a position-absolute  fw-bold " style=" top:20px; left:10%; font-family: 'Lobster', cursive;">Personas
        </h1>

      </div>
      <div class="col-4 ">

        <a href="/Diplomado/Vivienda.php">
          <img class="im d-block w-100 border border-4" src="/Diplomado/img/img2.jpg" height="600">
        </a>
        <h1 class=" a position-absolute  fw-bold " style="position:position-absolute ; top:20px; right: 42%;font-family: 'Lobster', cursive;">Vivienda</h1>

      </div>
      <div class="col-4 ">

        <a href="/Diplomado/Vehiculo.php">
          <img class="im d-block w-100 rounded-end border border-4" src="/Diplomado/img/img3.jpg" height="600">
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
<script type="text/javascript"> 
window.addEventListener("scroll", function(){
  var header = document.querySelector("header");
  header.classList.toggle("abajo",window.scrollY>0);
})

</script>

</body>