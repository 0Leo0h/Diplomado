<html>

<head>
    <title>1er Programa PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

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
    <div class="container">
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/DiplomadoSeguros/img/img.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Seguros
                </a>
            </div>
        </nav>
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
</body>

</html>