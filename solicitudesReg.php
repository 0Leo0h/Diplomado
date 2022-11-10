<?php

session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin') {
    header("location: index.php");
}

$id = $_POST["id"];

$server = "localhost";
$user = "Admin";
$passw = "#351Tl";
$bd = "seguros";

$conexion = mysqli_connect($server, $user, $passw, $bd)
    or die("Ha sucedido un error inexperado en la conexion de la base de datos");

if (isset($_POST["aceptar"])) {
    $sql2 = "update seguroxpersona set estado = 1 WHERE id = '$id'";
    $result2 = mysqli_query($conexion, $sql2);
}
if (isset($_POST["rechazar"])) {
    $sql3 = "update seguroxpersona set estado = 2 WHERE id = '$id'";
    $result3 = mysqli_query($conexion, $sql3);
}
if (isset($_POST["detalles"])) {
    $sql4 = "SELECT * FROM seguroxpersona sp INNER JOIN datos_svida ds ON sp.id_persona = ds.id WHERE sp.id = '$id'";
    $result4 = mysqli_query($conexion, $sql4);

    if ($row = mysqli_fetch_row($result4)) {
?>
        <!DOCTYPE html>
        <html>

        <head>
            <meta charset='utf-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <title>Administracion</title>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

        <body>
            <header>
                <nav class="  navbar navbar-expand-lg ">
                    <img src="img/img.jpg" class=" logo rounded-circle" width="45" height="45">
                    <a class=" seg navbar-brand mb-0 h1" href="index.php" style="font-family: 'Lobster', cursive;">Seguros</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <?php


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
            <div class="container" style="margin-top: 6%;">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <table class="table table-bordered border-primary">
                        <table class="table table-bordered border-primary">
                            <tbody>
                                <tr>
                                    <th scope="row">Apellidos</th>
                                    <td><?php echo $row[7]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Nombres</th>
                                    <td><?php echo $row[6]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Documento</th>
                                    <td><?php echo "$row[8] - $row[9]"; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Fecha de nacimiento</th>
                                    <td><?php echo $row[10]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Sexo</th>
                                    <td><?php echo $row[12]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Estado civil</th>
                                    <td><?php echo $row[13]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Dirrecion</th>
                                    <td><?php echo $row[16]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Departamento</th>
                                    <td><?php echo $row[17]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">ciudad</th>
                                    <td><?php echo $row[18]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Telefono</th>
                                    <td><?php echo $row[14]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Celular</th>
                                    <td><?php echo $row[15]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Correo</th>
                                    <td><?php echo $row[19]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Ingresos</th>
                                    <td><?php echo $row[20]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Profesion</th>
                                    <td><?php echo $row[21]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Decripcion de la ocupacion</th>
                                    <td><?php echo $row[22]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Cobertura</th>
                                    <td><?php
                                        $cobertura = json_decode($row[23]);
                                        foreach ($cobertura as $coberturas)
                                            print("$coberturas, "); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div style="margin-left: 40%;">
                            <button class="btn btn-success" name="registrados">Aceptar</button>
                            <button class="btn btn-danger" name="eliminar">Eliminar</button>
                        </div>
                </div>
            </div>
            <script type="text/javascript">
                window.addEventListener("scroll", function() {
                    var header = document.querySelector("header");
                    header.classList.toggle("abajo", window.scrollY > 0);
                })
            </script>
        </body>
    <?php
        exit();
    }
}
$sql = "SELECT * FROM seguroxpersona sp INNER JOIN datos_svida ds ON sp.id_persona = ds.id WHERE sp.id_plan = '$id'";
$result = mysqli_query($conexion, $sql);
if ($rows = mysqli_fetch_all($result)) {
    print_r($rows);
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Administracion</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

    <body>
        <header>
            <nav class="  navbar navbar-expand-lg ">
                <img src="img/img.jpg" class=" logo rounded-circle" width="45" height="45">
                <a class=" seg navbar-brand mb-0 h1" href="index.php" style="font-family: 'Lobster', cursive;">Seguros</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <?php


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
        
            <div class="shadow p-3 mb-5 bg-body rounded" style="margin-top: 6%;margin:2%">
                <table class="table table-info table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre del Plan</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">CC</th>
                            <th scope="col">Cobertura</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rows as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $row[0]  ?></th>
                                <td><?php echo $row[1] ?></td>
                                <td><?php echo $row[6] ?></td>
                                <td><?php echo $row[7] ?></td>
                                <td><?php echo $row[9] ?></td>
                                <td><?php echo $row[23] ?></td>
                                <td>
                                    <form method="POST" action="solicitudesReg.php">
                                        <input type="numer" name="id" value="<?php echo $row[0] ?>" style="display:none;">
                                        <button class="btn btn-primary" name="detalles">Detalles</button>
                                        <button class="btn btn-danger" name="aceptar">Aceptar</button>
                                        <button class="btn btn-danger" name="rechazar">Rechazar</button>
                                    </form>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        
        <script type="text/javascript">
            window.addEventListener("scroll", function() {
                var header = document.querySelector("header");
                header.classList.toggle("abajo", window.scrollY > 0);
            })
        </script>
    </body>
<?php
}
?>