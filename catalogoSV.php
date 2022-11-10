<?php
if (isset($_POST["cotizar"])) {
  include('Personas.php');
} else {
  $server = "localhost";
  $user = "user";
  $passw = "305#eR";
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
      <script src='main.js'></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <script src="https://kit.fontawesome.com/c1a6eed86c.js" crossorigin="anonymous"></script>
      <style>
        body {
          background-image: url(/Diplomado/img/imgpuer.jpg);
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
      <div class="row">
      <?php
      foreach ($rows as $row) {
      ?>
        
          
          <div class="ca card w-25">
            <div class="card-body ">
              <h5 class=" cati card-title" s><?php echo $row[1] ?></h5>
              <div class="scroll-div">
              <ol class=" cali list-group list-group-numbered ">
                <?php
                foreach (json_decode($row[2]) as $oferta) { ?>
                  <li class="list-group-item"><?php echo $oferta ?></li>
                <?php } ?>
              </ol>
              </div>
              <form action="personas.php" style="padding-top:15px;padding-left: 38%;" method="POST">
                <input type="numer" name="id" value="<?php echo $row[0] ?>" style="display:none;">
                <button class="btn btn-success" name="cotizar">Cotizar</button>
              </form>
            </div>
          </div>
       
        

      <?php
      }
      ?>
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
}
?>