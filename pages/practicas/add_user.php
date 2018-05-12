<?php
require "../conn_mysql_luis.php";

$user = $_POST["user"];
$pass = md5($_POST["pass"]);

$User = "SELECT * FROM usuario WHERE usuario='$user'";
$resUser = $conn->query($User);
$Users = $resUser->fetchAll();
$Users = count($Users);
if ($Users>0){
    echo "hola";
    echo '<script>alert("Usuario ya registrado")</script>';
    header("Location:reg_user.php");
    die();
}

$sql = "INSERT INTO usuario(usuario,password) VALUES('$user','$pass')";
$conn->exec($sql);

header("Location:../login.php")
?>