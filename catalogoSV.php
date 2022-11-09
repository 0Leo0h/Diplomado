<?php
if (isset($_POST["cotizar"])) {
    include('Personas.php');
} else {
$server = "localhost";
$user = "prueba";
$passw = "123P";
$bd = "seguros";

$conexion = mysqli_connect($server, $user, $passw, $bd)
    or die("Ha sucedido un error inexperado en la conexion de la base de datos");



$sql = "select * from seguro_vida";
$result = mysqli_query($conexion, $sql);

if ($rows = mysqli_fetch_all($result)) {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Formulario Vivienda</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body>
        <?php
        foreach ($rows as $row) {
        ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row[1] ?></h5>
                    <ol class="list-group list-group-numbered">
                    <?php
                    foreach (json_decode($row[2]) as $oferta) { ?>
                        <li class="list-group-item"><?php echo $oferta ?></li>
                        <?php } ?>
                    </ol>
                    <form action="catalogoSV.php" method="POST">
                        <input type="numer" name="id" value="<?php echo $row[0] ?>" style="display:none;">
                        <button class="btn btn-success" name="cotizar">Cotizar</button>
                    </form>
                </div>
            </div>
        <?php
        }
        ?>
    </body>
<?php
}
}
?>