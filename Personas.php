<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Personas</title>
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

<body style="background-color:beige;">
<header>
  <nav class="  navbar navbar-expand-lg " >
    <img src="img/img.jpg"  class=" logo rounded-circle" width="45" height="45">
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
    <div class="container" style="margin-top: 6%;">
        <div style="background-color:lightblue; " class="mt-2 rounded">
            <h1 style="margin-left:5px; margin-left:35%;font-family: 'Lobster', cursive;">Formulario Personas</h1>
        </div>
        <form action="PersonasV.php" style="background-color:lightblue;" class="form-control" method="post">
            <div class="row">
                <?php
                if (isset($_POST["id"])) {
                ?>
                    <input type="numer" name="id" value="<?php echo $_POST["id"] ?>" style="display:none;">
                <?php
                }
                ?>
                <div class="col-6">
                    <label for="" class="pt-2">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" required>
                    <div class="row">
                        <div class="col-4">
                            <label for="" class="pt-3">Tipo de documento</label>
                            <select class="form-select w-75" name="tipo_doc" id="" required>
                                <option value="C.C">C.C</option>
                                <option value="C.E">C.E</option>
                                <option value="P.A">P.A</option>
                                <option value="T.I">T.I</option>
                                <option value="T.E">T.E</option>
                                <option value="R.C">R.C</option>
                            </select>
                        </div>
                        <div class="col-8">
                            <label for="" class="pt-3">Numero de documento</label>
                            <input type="number" class="form-control" name="num_doc" id="" required>
                        </div>
                    </div>
                    <label for="" class="pt-3 pb-3">Estado civil</label> <br>
                    <input class="form-check-input" type="radio" name="est_civil" value="SOLTERO" required>
                    <label class="form-check-label" for=" ">
                        SOLTERO
                    </label>
                    <input class="form-check-input" type="radio" name="est_civil" value="CASADO" required>
                    <label class="form-check-label" for=" ">
                        CASADO
                    </label>
                    <input class="form-check-input" type="radio" name="est_civil" value="SEPARADO" required>
                    <label class="form-check-label" for=" ">
                        SEPARADO
                    </label>
                    <input class="form-check-input" type="radio" name="est_civil" value="DIVORCIADO" required>
                    <label class="form-check-label" for=" ">
                        DIVORCIADO
                    </label>
                    <input class="form-check-input" type="radio" name="est_civil" value="UNION LIBRE" required>
                    <label class="form-check-label" for=" ">
                        UNION LIBRE
                    </label>
                    <input class="form-check-input" type="radio" name="est_civil" value="VIUDO" required>
                    <label class="form-check-label" for=" ">
                        VIUDO
                    </label>
                    <label for="" class="pt-3">Direccion</label>
                    <input type="text" name="dirrecion" class="form-control" id="">
                    <label for="" class="pt-3">Correo</label>
                    <input type="email" name="email" class="form-control" id="">
                    <label for="" class="pt-3">Detalles de la ocupacion</label>
                    <textarea name="desp" class="form-control" id="" cols="20" rows="5"></textarea>
                </div>
                <div class="col-6">
                    <label for="" class="pt-2">Nombres</label>
                    <input type="text" class="form-control" name="nombres" required>
                    <div class="row">
                        <div class="col-4">
                            <label for="" class="pt-3">Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fech_nac" required>
                        </div>
                        <div class="col-8">
                            <label for="" class="pt-3 pb-3">Sexo</label> <br>
                            <input class="form-check-input" type="radio" name="sexo" value="MASCULINO" required>
                            <label class="form-check-label" for=" ">
                                MASCULINO
                            </label>
                            <input class="form-check-input" type="radio" name="sexo" value="FEMENINO" required>
                            <label class="form-check-label" for=" ">
                                FEMENINO
                            </label>
                            <input class="form-check-input" type="radio" name="sexo" value="OTRO" required>
                            <label class="form-check-label" for=" ">
                                OTRO
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="" class="pt-3">Telefono</label>
                            <input type="number" class="form-control" name="telefono" id="">
                            <label for="" class="pt-3">Departamento</label>
                            <input type="text" name="departamento" class="form-control" id="" required>
                            <label for="" class="pt-3">Ingresos mensuales</label>
                            <input type="number" class="form-control" name="ingresos" id="">
                        </div>
                        <div class="col-6">
                            <label for="" class="pt-3">Celular</label>
                            <input type="number" class="form-control" name="celular" id="" required>
                            <label for="" class="pt-3">Ciudad</label>
                            <input type="text" name="ciudad" class="form-control" id="" required>
                            <label for="" class="pt-3">Profesion</label>
                            <input type="text" name="profesion" class="form-control" id="">
                        </div>
                    </div>
                    <label for="" class="pt-3">coberturas</label><br>
                    <input type="checkbox" name="cobertura[]" class="form-check-input" id="" value="MUERTE POR CUALQUIER CAUSA">
                    <label class="form-check-label" for=" ">
                        MUERTE POR CUALQUIER CAUSA
                    </label><br>
                    <input type="checkbox" name="cobertura[]" class="form-check-input" id="" value="INCAPACIDAD TOTAL Y PERMANENTE">
                    <label class="form-check-label" for=" ">
                        INCAPACIDAD TOTAL Y PERMANENTE
                    </label><br>
                    <input type="checkbox" name="cobertura[]" class="form-check-input" id="" value="INDEMIZACIÓN ADICIONAL MUERTE ACCIDENTAL">
                    <label class="form-check-label" for=" ">
                        INDEMIZACIÓN ADICIONAL MUERTE ACCIDENTAL
                    </label><br>
                    <input type="checkbox" name="cobertura[]" class="form-check-input" id="" value="ENFERMEDADES GRAVES">
                    <label class="form-check-label" for=" ">
                        ENFERMEDADES GRAVES
                    </label><br>
                    <input type="checkbox" name="cobertura[]" class="form-check-input" id="" value="AUXILIO FUNERARIO">
                    <label class="form-check-label" for=" ">
                        AUXILIO FUNERARIO
                    </label><br>
                    <input type="checkbox" name="cobertura[]" class="form-check-input" id="" value="RENTA DIARIA POR HOSPITALIZACIÓN">
                    <label class="form-check-label" for=" ">
                        RENTA DIARIA POR HOSPITALIZACIÓN
                    </label><br>
                </div>

            </div>


            <button class="btn btn-success mt-5 mb-2 w-25 " style="margin-left:35%;" name="registrar" type="submit">Guardar</button>
        </form>
    </div>
    <script type="text/javascript"> 
window.addEventListener("scroll", function(){
  var header = document.querySelector("header");
  header.classList.toggle("abajo",window.scrollY>0);
})

</script>
</body>