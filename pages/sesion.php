<?php
require "conn_mysql_luis.php";

$usuario = $_POST['user'];
$pass = md5($_POST['pass']);

$sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND password='$pass'";
$res = $conn->query($sql);
$users = $res->fetchAll();
$users = count($users);

if ($users>0){
    session_start();
    $_SESSION["user"] = $usuario;
    $_SESSION["pass"] = $pass;
    header("Location:../index.php");
}
else{
    redireccionar("Las credenciales no coinciden con nuestros registros","login.php");
}

function redireccionar($msj,$location) {
    echo '<script type="text/javascript">alert("'.$msj.'");</script>';
    $cad = "location.href='$location'";
    echo "<script type=\"text/javascript\">setTimeout(".$cad.",4000);</script>";
}
?>