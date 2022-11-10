<?php
session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin') {
    header("location: index.php");
}
if (isset($_POST["editar"])) {
    include('Fadmin.php');
    exit();
}
if (isset($_POST["registrados"])) {
    include('solicitudesReg.php');
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
    $sql2 = "update seguro_vida set estado = 0 WHERE id = $id";
    $result2 = mysqli_query($conexion, $sql2);
}

$sql = "select * from seguro_vida where estado = 1";
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
        <script src='main.js'></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/c1a6eed86c.js" crossorigin="anonymous"></script>
        <style>
            body {
                background-image: url(/Diplomado/img/imgtabla.jpg);
                background-size: 100%;
            }
        </style>
    </head>

    <body>
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
        <div class="container " style="margin-top: 6%; max-width:800px;">
            <table class="table table-dark table-hover ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre del Plan</th>
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
                                <button class="btn btn-secondary"  style="margin-left:20px ;" name="editar">Editar</button>
                                <button class="btn btn-warning" style="margin-left:20px ;" name="registrados">Registrados</button>
                                <button class="btn btn-danger"  style="margin-left:20px ;" name="eliminar">Eliminar</button>
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
window.addEventListener("scroll", function(){
  var header = document.querySelector("header");
  header.classList.toggle("abajo",window.scrollY>0);
})

</script>
    </body>
<?php
}
?>