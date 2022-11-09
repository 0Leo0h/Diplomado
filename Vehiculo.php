<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Vehiculo</title>
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
        background-image: url(/DiplomadoSeguros/img/imgfondo2.jpg);
        background-size: 100%;
    }
    </style>
</head>

<body style="background-color:beige;">
    <div class="container ">
    <nav class="navbar navbar-expand-lg rounded mt-2" style="background-color:rgb(24, 106, 174);">
            <div class="container-fluid">
                <img src="/DiplomadoSeguros/img/img.jpg" style="margin:3px;" class="rounded-circle" width="30" height="30">
              <a class="ti navbar-brand mb-0 h1" href="/DiplomadoSeguros/Mosaico.html" style="font-family: 'Lobster', cursive;">Seguros</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="ti navbar-brand mb-0 h1" aria-current="page" href="#" style="font-family: 'Lobster', cursive;">Comprar seguro</a>
                  </li>
                  <li class="nav-item">
                    <a class="ti navbar-brand mb-0 h1"aria-current="page" href="#" style="font-family: 'Lobster', cursive;">Registro</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div style="background-color:lightblue; "class="mt-2 rounded">
        <h1 style="margin-left:5px; margin-left:35%;font-family: 'Lobster', cursive;">Formulario Vehiculo</h1>
        </div>
        <form action="VehiculoV.php"  style="background-color:lightblue;" class="form-control" method="post">

            <div>
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
                        <label for="" class="pt-3">Correo</label>
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

                        <label for="" class="pt-3">Licencia</label>
                                <input type="number" class="form-control" name="lice">

                        <label for="" class="pt-3">Estado civil</label><br>
                        <input type="radio" name="Estadocivil" class="form-radio " value="Soltero"><label for="" class="pe-3" required>Soltero</label>
                        <input type="radio" name="Estadocivil" class="form-radio" value="Casado"><label for="" class="pe-3" required>Casado</label>
                        <input type="radio" name="Estadocivil" class="form-radio" value="Separado"><label for="" class="pe-3" required>Separado</label>
                        <input type="radio" name="Estadocivil" class="form-radio" value="Divorciado"><label for="" class="pe-3" required>Divorciado</label>
                        <input type="radio" name="Estadocivil" class="form-radio" value="Viudo"><label for="" class="pe-3" required>Viudo</label>
                        <input type="radio" name="Estadocivil" class="form-radio" value="Union libre" required>Union libre <br>
                        
                    </div>

                </div>

            </div>
            
            <hr style="margin-top:2%;">
            <div>
                <h3 class="pt-2" style="font-family: 'Lobster', cursive;">Informacion del Vehiculo</h3>
                <div class="row">
                    <div class="col-6">
                        <label for="" class="pt-3">Tipo de Vehiculo</label>
                        <select class="form-select" name="tipovei" id="" required>
                            <option value="Motocicleta">Motocicleta</option>
                            <option value="MotoCarro">MotoCarro</option>
                            <option value="Automovil">Automovil</option>
                            <option value="Camion">Camion</option>
                            <option value="Furgoneta">Furgoneta</option>
                            <option value="Camioneta">Camioneta</option>
                        </select>

                        <label for="" class="pt-3">Marca</label>
                        <input type="text" class="form-control" name="marca" >
                        <div class="row">
                            <div class="col-6">
                                <label for="" class="pt-3">Modelo</label>
                                <input type="number" class="form-control" name="modelo" required>
                            </div>
                            <div class="col-6">
                                <label for="" class="pt-3">Matricula</label>
                                <input type="number" class="form-control" name="matricula">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <label for="" class="pt-3">Uso</label>
                        <select class="form-select" name="uso" id="" required>
                            <option value="Privado">Privado</option>
                            <option value="Publico">Publico</option>
                        </select>

                        <label for="" class="pt-3">Cilindraje</label>
                        <select class="form-select" name="CC" id="" required>
                            <option value=">100">>100</option>
                            <option value="100 a 150">100 a 150</option>
                            <option value="150 a 300">150 a 300</option>
                            <option value="300 a 600">300 a 600</option>
                            <option value="600<">600< </option>

                        </select>
                        <div class="row">
                            <div class="col-6">
                                <label for="" class="pt-3">Numero de Motor</label><br>
                                <input type="number" class="form-control" name="nmotor">
                            </div>
                            <div class="col-6">
                                <label for="" class="pt-3">Carga</label>
                                <select class="form-select" name="carga" id="">
                                    <option value="Sin Reparto">Sin Reparto</option>
                                    <option value="Con Reparto">Con Reparto</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <button class="btn btn-success mt-5 mb-2 w-25 " style="margin-left:35%;" type="submit">Guardar</button>
        </form>
    </div>
</body>