<?php
require_once 'conn_mysql_luis.php';

$id = $_GET["id"];
$id = (int)$id;

$titulo = trim($_POST["txttitulo"]);
$paginas = $_POST["txtpaginas"];
$precio = $_POST["txtprecio"];
$cantidad = $_POST["txtcantidad"];
$anio = $_POST["combo_aniopublicacion"];
$materia = $_POST["combo_materia"];
$editorial = $_POST["combo_editorial"];
$autor = $_POST["combo_autor"];

$sqlUpdate = "UPDATE libros SET titulo='$titulo', npaginas=$paginas, aniopublicacion=$anio, precioactual=$precio, stock=$cantidad, id_materia=$materia, id_editorial=$editorial, id_autor=$autor WHERE id_libro=".$id;

echo $sqlUpdate;
//$conn->exec($sqlUpdate);

//echo "<script type='text/javascript'>window.location.replace('http://localhost/luisGarcia18/pages/reporte_libros.php')</script>"
?>
