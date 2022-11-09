<?php

session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin') {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Administracion</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

<body>
    <nav class="navbar navbar-expand-lg " style="background-color:rgb(24, 106, 174);">
        <div class="container-fluid">
            <img src="/DiplomadoSeguros/img/img.jpg" style="margin:3px;" class="rounded-circle" width="30" height="30">
            <a class=" ti navbar-brand mb-0 h1" href="Index.php" style="font-family: 'Lobster', cursive;">Seguros</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="ti navbar-brand mb-0 h1" aria-current="page" href="#" style="font-family: 'Lobster', cursive;">Comprar seguro</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 2%;">
        <div class="row h-25 m-3 position-relative" >
            <div class="col-6">

                <a href="adminPlans.php">
                    <img class=" im d-block w-100 rounded-start border border-4" style="box-shadow:0px 1px 10px rgba(0,0,0,0.2) ;transition: all 400ms ease;" src="/DiplomadoSeguros/img/imgcora2.jpg" height="600">
                </a>
                <h1 class="a position-absolute  fw-bold " style=" top:20px; left:12%; font-family: 'Lobster', cursive;">Administrar Planes
                </h1>

            </div>
            <div class="col-6 ">

        <a href="Fadmin.php">
          <img class="im d-block w-100 rounded-end border border-4" src="/DiplomadoSeguros/img/imgcora.jpg" height="600">
        </a>
        <h1 class="a position-absolute  fw-bold"
          style="position:position-absolute ; top:20px; right: 18%; font-family: 'Lobster', cursive;">Crear Plan</h1>

      </div>
        </div>
    </div>
</body>