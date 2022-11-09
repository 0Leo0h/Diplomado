<?php
if (!isset($_SESSION)) {
} else {
    session_destroy();
}
$usuario = $_POST['nuser'];
$pass = $_POST['npassword'];

if (empty($usuario) || empty($pass)) {
    header("Location: login.html");
    exit();
}
$server = "localhost";
$user = "conexion";
$passw = "123Conexion";
$bd = "seguros";

$conexion = mysqli_connect($server, $user, $passw, $bd)
    or die("Ha sucedido un error inexperado en la conexion de la base de datos");



$sql = "select * from usuarios where username = '$usuario'";
$result = mysqli_query($conexion, $sql);

if ($row = mysqli_fetch_array($result)) {
    if (password_verify($pass, $row['password'])) {
        echo 'Password is valid!';
        if ($row['rol'] == "admin") {
            session_start();
            $_SESSION['rol'] = $row['rol'];
            header("Location: pageAdmin.php");
        }else{
            session_start();
            $_SESSION['rol'] = $row['rol'];
            header("Location: index.html");
        }
    } else {
        echo "Contraseña incorrecta!";
        include("login.html");
    }
} else {
    echo ("Usuario no exite!");
    include("login.html");
}
