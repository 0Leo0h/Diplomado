<?php
session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin') {
    header("location: index.php");
}
if (isset($_POST["editar"])) {
    include('Fadmin.php');
    exit();
}
if (isset($_POST["cotizar"])) {
    include('Personas.php');
    exit();
}
$server = "localhost";
$user = "root";
$passw = "";
$bd = "seguros";

$conexion = mysqli_connect($server, $user, $passw, $bd)
    or die("Ha sucedido un error inexperado en la conexion de la base de datos");


if (isset($_POST["eliminar"])) {
    $id = $_POST["id"];
    $sql2 = "DELETE FROM seguro_vida WHERE id = $id";
    $result2 = mysqli_query($conexion, $sql2);
}

$sql = "select * from seguro_vida";
$result = mysqli_query($conexion, $sql);

if ($rows = mysqli_fetch_all($result)) {

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
        <table class="table table-dark table-hover">
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
                            <form method="POST" action="adminPlans.php">
                                <input type="numer" name="id" value="<?php echo $row[0] ?>" style="display:none;">
                                <button class="btn btn-primary" name="detalles">Detalles</button>
                                <button class="btn btn-secondary" name="editar">Editar</button>
                                <button class="btn btn-success" name="solicitudes">Solicitudes</button>
                                <button class="btn btn-warning" name="registrados">Registrados</button>
                                <button class="btn btn-danger" name="eliminar">Eliminar</button>
                            </form>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
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
?>