<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Vivienda</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
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

<body >
    <div class="container " style="margin-top: 6%;">
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
          <div style="background-color:lightblue; "class="mt-2 rounded">
        <h1 style="margin-left:5px;margin-left:35%;font-family: 'Lobster', cursive;">Formulario Vivienda</h1>
        </div>
        <form action="ViviendaV.php" style="background-color:lightblue;" class="form-control" method="post">

            <div >
                <h3>Datos Personales</h3>
                <div class="row">
                    <div class="col-6">
                        <label for="">Nombres</label>
                        <input type="text" class="form-control" name="Nombres" required>
                        <div class="row">
                            <div class="col-4">
                                <label for="" class="pt-3">Tipo de documento</label>
                                <select class="form-select" name="tipo_doc" id="" required>
                                    <option value="1">C.C</option>
                                    <option value="2">T.i</option>
                                    <option value="3">T.E</option>
                                    <option value="4">P.A</option>
                                    <option value="5">R.C</option>
                                </select>
                            </div>
                            <div class="col-8">
                                <label for="" class="pt-3">Numero de documento</label>
                                <input type="number" class="form-control" name="N_doc" required>
                            </div>
                        </div>
                        <label for="" class="pt-3">Direccion</label>
                        <input type="text" class="form-control" name="Direccion">
                        <div class="row">
                            <div class="col-6">
                                <label for="" class="pt-3">Ciudad</label>
                                <input type="text" class="form-control " name="Ciudad" required>
                            </div>
                            <div class="col-6">
                                <label for="" class="pt-3">Departamento</label>
                                <input type="text" class="form-control " name="Departamento" required>
                            </div>
                        </div>
                        <label for="" class="pt-3">email</label>
                        <input type="email" class="form-control" name="correo">

                        <label for="" class="pt-3">Sexo</label><br>
                        <input type="radio" name="sexo" class="form-radio " value="Masculino" required><label for="" class="pe-3">Masculino</label>
                        <input type="radio" name="sexo" class="form-radio" value="Femenino" required><label for="" class="pe-3">Femenino</label>
                        <input type="radio" name="sexo" class="form-radio" value="Prefiero no decirlo" required>Prefiero no decirlo
                    </div>


                    <div class="col-6">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control" name="Apellidos" required>
                        <label for="" class="pt-3">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="fecha" required>
                        <div class="row">
                            <div class="col-6">
                                <label for="" class="pt-3">Telefono</label>
                                <input type="number" class="form-control " name="Telefono">
                            </div>
                            <div class="col-6">
                                <label for="" class="pt-3">Celular</label>
                                <input type="number" class="form-control " name="Celular" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label for="" class="pt-3">Profesión</label>
                                <input type="text" class="form-control" name="Profesion">
                            </div>
                            <div class="col-7">
                                <label for="" class="pt-3">Ingresos Mensuales</label>
                                <input type="number" class="form-control" name="Ingresos" placeholder="$">
                            </div>
                        </div>

                        <label for="" class="pt-3">Estado civil</label><br>
                        <input type="radio" name="Estadocivil" class="form-radio " value="Soltero"><label for="" class="pe-3"required>Soltero</label>

                        <input type="radio" name="Estadocivil" class="form-radio" value="Casado"><label for="" class="pe-3"required>Casado</label>
                        <input type="radio" name="Estadocivil" class="form-radio" value="Separado"><label for="" class="pe-3"required>Separado</label>
                        <input type="radio" name="Estadocivil" class="form-radio" value="Divorciado"><label for="" class="pe-3"required>Divorciado</label>
                        <input type="radio" name="Estadocivil" class="form-radio" value="Viudo"><label for="" class="pe-3"required>Viudo</label>
                        <input type="radio" name="Estadocivil" class="form-radio" value="Union libre"required>Union libre <br>

                        
                    </div>

                </div>

            </div>
            <hr style="margin-top:2%;">
            <div>
                <h3 class="pt-2" style="font-family: 'Lobster', cursive;">Datos de Vivienda</h3>
                <div class="row">
                    <div class="col-6">
                        <label for="" class="pt-3">Tipo de Vivienda</label>
                        <select class="form-select" name="tipoviv" id="" required>
                            <option value="Vivienda en el Campo">Vivienda en el Campo</option>
                            <option value="Vivienda en el Pueblo">Vivienda en el Pueblo</option>
                            <option value="Piso">Piso</option>
                            <option value="Vivienda Unifamiliar">Vivienda Unifamiliar</option>
                            <option value="Vivienda Multifamiliar">Vivienda Multifamiliar</option>
                        </select>
                        <label for="" class="pt-3">Direccion</label>
                        <input type="text" class="form-control" name="direccionc" required>
                        <div class="row">
                            <div class="col-3">
                                <label for="" class="pt-3">Zona</label>
                                <select class="form-select" name="zona" id="" required>
                                    <option value="1">Urbana</option>
                                    <option value="2">Rural</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="" class="pt-3">Metros Cuadrados</label>
                                <input type="text" class="form-control" name="metros" >
                            </div>
                            <div class="col-3">
                                <label for="" class="pt-3">#Pisos</label>
                                <input type="number" class="form-control" name="pisos">
                            </div>
                            <div class="col-3">
                                <label for="" class="pt-3">#Habitaciones</label>
                                <input type="number" class="form-control" name="habitaciones" >
                            </div>
                            <div class="col-6">
                            <label for="" class="pt-3">Valor de la Vivienda</label>
                            <input type="number" class="form-control" name="Vvivienda">
                        </div>
                        <div class="col-6">
                            <label for="" class="pt-3">Valor de los Bienes</label>
                            <input type="number" class="form-control" name="Vbienes" >
                        </div>
                        </div>
                        <label for="" class="pt-3">Codigo Postal</label>
                        <input type="number" class="form-control w-50" name="codpos">
                        
                    </div>

                    <div class="col-6">
                    <label for="" class="pt-3">Uso</label>
                        <select class="form-select" name="uso" id="" >
                            <option value="Propietario">Propietario</option>
                            <option value="Propietario y vive en ella">Propietario y vive en ella</option>
                            <option value="Propietario y esta de vacaciones">Propietario y esta de vacaciones</option>
                            <option value="Propietario y la alquila">Propietario y la alquila</option>
                            <option value="Inquilino">Inquilino</option>
                            
                        </select>
                        <label for="" class="pt-3">¿Que desea asegurar?</label>
                        <select class="form-select" name="asegurar" id="" >
                            <option value="Vivienda">Vivienda</option>
                            <option value="Bienes">Bienes</option>
                            <option value="Vivienda y Bienes">Vivienda y Bienes</option>
                            
                        </select>

                        <label for="" class="pt-3">Medidas de Prevencion</label><br>
                        <input type="checkbox" name="medida[]" class=" form-check-input" value="Muerte por cualquier causa"><label for="" class="pe-4 " required>Urbanizacion con Vigilante</label><br>
                        <input type="checkbox" name="medida[]" class="form-check-input" value="Incapacidad total y permanente"><label for="" class="pe-4" required>Sistema de alarma de robo</label><br>
                        <input type="checkbox" name="medida[]" class="form-check-input" value="indemnizacion adicional muerte accidental"><label for="" class="pe-4"required>Sistema de alarma de incendio</label><br>
                        <input type="checkbox" name="medida[]" class="form-check-input" value="Enfermedades Graves"><label for="" class="pe-4"required>Camaras de vigilancia</label><br>
                        <input type="checkbox" name="medida[]" class="form-check-input" value="Auxilio Funerario"><label for="" class="pe-4"required>Caja fuerte</label><br>
                        <input type="checkbox" name="medida[]" class="form-check-input" value="Auxilio Funerario"><label for="" class="pe-4"required>Rejas en ventana</label><br>
                        <input type="checkbox" name="medida[]" class="form-check-input" value="Auxilio Funerario"><label for="" class="pe-4"required>Rejas en terraza</label><br>
                        <input type="checkbox" name="medida[]" class="form-check-input" value="Auxilio Funerario"><label for="" class="pe-4"required>Rejas en puerta</label><br>
                        <input type="checkbox" name="medida[]" class="form-check-input" value="Auxilio Funerario"><label for="" class="pe-4"required>Puerta de seguridad</label><br>
                        <input type="checkbox" name="medida[]" class="form-check-input" value="Auxilio Funerario"><label for="" class="pe-4"required>Otros</label><br>
                        <input type="checkbox" name="medida[]" class="form-check-input" value="Union libre"required>Ninguna
                </div>
            </div>


            <button class="btn btn-success mt-5 mb-2 w-25 " style="margin-left:35%;" type="submit">Guardar</button>
        </form>
    </div>
    <script type="text/javascript"> 
window.addEventListener("scroll", function(){
  var header = document.querySelector("header");
  header.classList.toggle("abajo",window.scrollY>0);
})

</script>
</body>