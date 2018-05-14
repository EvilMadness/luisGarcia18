<?php
require_once 'conn_mysql_luis.php';

$id = $_GET["id"];
$id = (int)$id;

$nombre = trim($_POST["nombre"]);
$paterno = $_POST["paterno"];
$materno = $_POST["materno"];
$direccion = $_POST["direccion"];
$pais = $_POST["pais"];
$nickname = $_POST["nickname"];

$sqlUpdate = "UPDATE autor SET nombre='$nombre', paterno='$paterno', materno='$materno', direccion='$direccion', pais='$pais', nickname='$nickname' WHERE id_autor=".$id;

$conn->exec($sqlUpdate);

echo "<script type='text/javascript'>window.location.replace('http://localhost/xampp/luisGarcia18/pages/reporte_libros.php')</script>"
?>