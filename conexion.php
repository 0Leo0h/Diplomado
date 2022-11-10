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
        
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
        $ip =  get_client_ip();
         
$sql2 = "INSERT INTO auditoria (user, ip) VALUES ('$usuario', '$ip')";
$result2 = mysqli_query($conexion, $sql2);

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
