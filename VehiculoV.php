<html>

<head>
    <title>1er Programa PHP</title>
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
    $nombres = $_POST["Nombres"];
    $apellidos = $_POST["Apellidos"];
    $tipo_doc = $_POST["tipo_doc"];
    $n_doc = $_POST["N_doc"];
    $fecha = $_POST["fecha"];
    $sexo = $_POST["sexo"];
    $estadocivil = $_POST["Estadocivil"];
    $direccion = $_POST["Direccion"];
    $departamento = $_POST["Departamento"];
    $ciudad = $_POST["Ciudad"];
    $telefono = $_POST["Telefono"];
    $celular = $_POST["Celular"];
    $correo = $_POST["correo"];
    $ingresos = $_POST["Ingresos"];
    $profesion = $_POST["Profesion"];
    $tipovei = $_POST["tipovei"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $matricula = $_POST["matricula"];
    $uso = $_POST["uso"];
    $CC = $_POST["CC"];
    $nmotor = $_POST["nmotor"];
    $carga = $_POST["carga"];
    
    


    $valores = explode('-', $fecha);

    function comprobar_edad($dia, $mes, $año)
    {
        $edad_min = 18;
        $edad_max = 100;

        //Nos aseguramos que la fecha es valida
        if (!checkdate($mes, $dia, $año)) {
            return false;
        }

        //Obtenemos la fecha de hoy y le damos formato 
        $hoy = new DateTime();
        $fecha_introducida_formateada = sprintf("%d-%d-%d", $año, $mes, $dia);
        $fecha_introducida = DateTime::createFromFormat("Y-n-j|", $fecha_introducida_formateada);

        //Obtenemos la edad empleando la funcion diff del objeto $hoy y lo comparamos con la fecha introducida
        $edad = $hoy->diff($fecha_introducida);
        if (($edad->y < $edad_min) || ($edad->y > $edad_max)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    if (comprobar_edad($valores[2], $valores[1], $valores[0])) {
    



    
    
    ?>
    <div class="container" style="margin-top: 6%;">
        
        <h1>Datos Recolectados</h1>
        <table class="table table-secondary table-bordered ">
            <tbody>
                <tr>
                    <th scope="row">Nombres</th>
                    <td><?php echo $nombres; ?></td>
                </tr>
                <tr>
                    <th scope="row">Apellidos</th>
                    <td><?php echo $apellidos; ?></td>
                </tr>
                <tr>
                    <th scope="row">Documento</th>
                    <td><?php echo "$tipo_doc - $n_doc"; ?></td>
                </tr>
                <tr>
                    <th scope="row">Numero de documento</th>
                    <td><?php echo $n_doc; ?></td>
                </tr>
                <tr>
                    <th scope="row">Fecha de Nacimiento</th>
                    <td><?php echo $fecha; ?></td>
                </tr>
                <tr>
                    <th scope="row">Sexo</th>
                    <td><?php echo "$sexo "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Estado civil</th>
                    <td><?php echo "$estadocivil"; ?></td>
                </tr>
                <tr>
                    <th scope="row">Direccion</th>
                    <td><?php echo "$direccion "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Departamento</th>
                    <td><?php echo "$departamento "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Ciudad</th>
                    <td><?php echo "$ciudad "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Telefono</th>
                    <td><?php echo "$telefono "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Celular</th>
                    <td><?php echo "$celular "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Correo</th>
                    <td><?php echo "$correo "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Ingresos Mensuales</th>
                    <td><?php echo " $ $ingresos "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Profesion</th>
                    <td><?php echo "$profesion "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Tipo de Vehiculo</th>
                    <td><?php echo "$tipovei "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Marca del Vehiculo</th>
                    <td><?php echo "$marca "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Modelo</th>
                    <td><?php echo "$modelo "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Matricula</th>
                    <td><?php echo "$matricula "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Uso del Vehiculo</th>
                    <td><?php echo "$uso "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Cilindraje</th>
                    <td><?php echo "$CC "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Numero de Motor</th>
                    <td><?php echo "$nmotor "; ?></td>
                </tr>
                <tr>
                    <th scope="row">Tipo de Carga</th>
                    <td><?php echo "$carga"; ?></td>
                </tr>
                
                

    </div>
    <?php
    } else {
        print("No tienes edad para asegurar el vehiculo");
    } ?>
    <script type="text/javascript"> 
window.addEventListener("scroll", function(){
  var header = document.querySelector("header");
  header.classList.toggle("abajo",window.scrollY>0);
})

</script>
</body>

</html>