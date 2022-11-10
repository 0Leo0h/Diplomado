<HTML>

<HEAD>
    <TITLE>Registro</TITLE>
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
</HEAD>

<BODY>
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
    <?PHP
    $apellidos = $_POST["apellidos"];
    $nombres = $_POST["nombres"];
    $tipo_doc = $_POST["tipo_doc"];
    $num_doc = $_POST["num_doc"];
    $fech_nac = $_POST["fech_nac"];
    $sexo = $_POST["sexo"];
    $est_civil = $_POST["est_civil"];
    $dirrecion = $_POST["dirrecion"];
    $departamento = $_POST["departamento"];
    $ciudad = $_POST["ciudad"];
    $telefono = $_POST["telefono"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    $ingresos = $_POST["ingresos"];
    $profesion = $_POST["profesion"];
    $desp = $_POST["desp"];
    $id_plan = $_POST["id"];

    if (empty($_POST["cobertura"])) {
        $cobertura = [];
    } else {
        $cobertura = $_POST["cobertura"];
    }


    $valores = explode('-', $fech_nac);

    function comprobar_edad($dia, $mes, $año)
    {
        $edad_min = 0;
        $edad_max = 70;

        if (!checkdate($mes, $dia, $año)) {
            return false;
        }

        $hoy = new DateTime();
        $fecha_introducida_formateada = sprintf("%d-%d-%d", $año, $mes, $dia);
        $fecha_introducida = DateTime::createFromFormat("Y-n-j|", $fecha_introducida_formateada);

        $edad = $hoy->diff($fecha_introducida);
        if (($edad->y < $edad_min) || ($edad->y > $edad_max)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    if (comprobar_edad($valores[2], $valores[1], $valores[0])) {
        $hoy = new DateTime();
        $fecha_introducida_formateada = sprintf("%d-%d-%d", $valores[0], $valores[1], $valores[2]);
        $fecha_introducida = DateTime::createFromFormat("Y-n-j|", $fecha_introducida_formateada);
        $edad = $hoy->diff($fecha_introducida);

        $server = "localhost";
        $user = "user";
        $passw = "305#eR";
        $bd = "seguros";

        $conexion = mysqli_connect($server, $user, $passw, $bd)
            or die("Ha sucedido un error inexperado en la conexion de la base de datos");

        $cober = json_encode($cobertura);
        $sql = "insert into datos_svida (nombres,apellidos,tipo_doc,num_doc,fecha_nacimiento,edad,sexo,estado_civil,telefono,celular,direccion,departamento,ciudad,correo,ingresos_mes,profesion,detalles_ocupacion,coberturas) 
      values ('$nombres','$apellidos','$tipo_doc','$num_doc','$fech_nac','$edad->y','$sexo','$est_civil','$telefono','$celular','$dirrecion','$departamento','$ciudad','$email','$ingresos','$profesion','$desp','$cober')";
        $result = mysqli_query($conexion, $sql);
        $sql2 = "SELECT @@identity AS id";
        $rs = mysqli_query($conexion, $sql2);
        if ($row = mysqli_fetch_row($rs)) {
            $id_persona = trim($row[0]);
        }
        $sql3 = "insert into seguroxpersona (id_persona,id_plan,estado) values ('$id_persona','$id_plan','0')";
        $result2 = mysqli_query($conexion, $sql3);
    ?>

        
        <div class="container" style="margin-top: 6%;">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <p>Uno de nuestros asesores revisara sus datos y se pondran en contanto con usted. <br> Sea paciente!</p>
                <h1>Datos recogidos</h1>
                <table class="table table-bordered border-primary">
                    <tbody>
                        <tr>
                            <th scope="row">Apellidos</th>
                            <td><?php echo $apellidos; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Nombres</th>
                            <td><?php echo $nombres; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Documento</th>
                            <td><?php echo "$tipo_doc - $num_doc"; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Fecha de nacimiento</th>
                            <td><?php echo $fech_nac; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Sexo</th>
                            <td><?php echo $sexo; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Estado civil</th>
                            <td><?php echo $est_civil; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Dirrecion</th>
                            <td><?php echo $dirrecion; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Departamento</th>
                            <td><?php echo $departamento; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">ciudad</th>
                            <td><?php echo $ciudad; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Telefono</th>
                            <td><?php echo $telefono; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Celular</th>
                            <td><?php echo $celular; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Correo</th>
                            <td><?php echo $email; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Ingresos</th>
                            <td><?php echo $ingresos; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Profesion</th>
                            <td><?php echo $profesion; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Decripcion de la ocupacion</th>
                            <td><?php echo $desp; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Cobertura</th>
                            <td><?php
                                foreach ($cobertura as $coberturas)
                                    print("$coberturas, "); ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="index.php">Regresar</a>
            </div>
        </div>
    <?php
    } else {
        print("No tienes edad para asegurar la casa");
    } ?>
    <script type="text/javascript"> 
window.addEventListener("scroll", function(){
  var header = document.querySelector("header");
  header.classList.toggle("abajo",window.scrollY>0);
})

</script>
</BODY>

</HTML>