<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulario Vivienda</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
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
            background-image: url(/DiplomadoSeguros/img/imgseguros.jpg);
            background-size: 100%;
        }
    </style>
</head>

<body>
<?php 
if(isset($_POST["id"])){
?>
<input type="numer" name="id" value="<?php echo $_POST["id"] ?>" style="display:none;">
<?php
}
?>
    <?php
    $ofertas = [];
    $nombre = '';
    if(isset($_POST["id"])){
        $server = "localhost";
    $user = "prueba";
    $passw = "123P";
    $bd = "seguros";

    $conexion = mysqli_connect($server, $user, $passw, $bd)
        or die("Ha sucedido un error inexperado en la conexion de la base de datos");



    $sql = "select * from seguro_vida";
    $result = mysqli_query($conexion, $sql);

    if ($rows = mysqli_fetch_row($result)) {
        $nombre = $rows[1];
        $ofertas = json_decode($rows[2]);
    }
    }
    if (isset($_POST["agregar"])) {
        $ofertas = $_POST["ofertas"];
        $nombre = $_POST["nombre"];
    }
    if (isset($_POST["guardar"])) {
        $nombre = $_POST["nombre"];
        $ofertas = $_POST["ofertas"];
        if (empty($ofertas[0])) {
            echo "Nombre vacio";
        }

        $server = "localhost";
        $user = "root";
        $passw = "";
        $bd = "seguros";

        $conexion = mysqli_connect($server, $user, $passw, $bd)
            or die("Ha sucedido un error inexperado en la conexion de la base de datos");

        $oferta = json_encode($ofertas);
        $sql = "insert into seguro_vida (nom_plan,oferta,estado) values ('$nombre','$oferta','1')";
        $result = mysqli_query($conexion, $sql);
        exit;
    }
    ?>
    <nav class="navbar navbar-expand-lg " style="background-color:rgb(24, 106, 174);">
        <div class="container-fluid">
            <img src="/DiplomadoSeguros/img/img.jpg" style="margin:3px;" class="rounded-circle" width="30" height="30">
            <a class=" ti navbar-brand mb-0 h1" href="/DiplomadoSeguros/Mosaico.html"
                style="font-family: 'Lobster', cursive;">Seguros</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="ti navbar-brand mb-0 h1" aria-current="page" href="#"
                            style="font-family: 'Lobster', cursive;">Comprar seguro</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <form method="post" class="form-control  w-50 p-4"style="margin-left:25%;margin-top: 10%" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <!--Comienza el ciclo que dibuja los campos dinámicos-->
        <div class="d-flex">
            <input autocomplete="off" autofocus class="form-control w-50 m-2" type="text" name="nombre" value="<?php echo $nombre ?>" placeholder="Nombre Plan">
        </div>
        <?php foreach ($ofertas as $oferta) { ?>
            <input value="<?php echo $oferta ?>" class="form-control m-2" type="text" name="ofertas[]" placeholder="Oferta Plan">
        <?php } ?>
        <!--Termina el ciclo que dibuja los campos dinámicos-->

        <!--Fuera de la lista tenemos siempre este campo, es el primero-->
        <input autocomplete="off" value="" class="form-control m-2" type="text" name="ofertas[]" placeholder="Oferta Plan">
        <br><br>
        <button name="agregar" class="btn btn-success w-25" style="margin-left:25%;"type="submit">Agregar campo</button>
        <button name="guardar" class="btn btn-success w-25"style="margin-left:3px;" type="submit">Guardar lista</button>
    </form>
</body>