<?php

session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin') {
    header("location: index.php");
}

$id = $_POST["id"];

$server = "localhost";
$user = "root";
$passw = "";
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
    
if ($rows2 = mysqli_fetch_all($result4)) {
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
    </head>

    <body>

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
    </head>

    <body>
        <table class="table table-info table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($rows as $row) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $row[0] ?></th>
                        <td><?php echo $row[1] ?></td>
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
    </body>
<?php
}
?>