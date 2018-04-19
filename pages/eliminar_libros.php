<?php
require_once "conn_mysql_luis.php";
$result = "";

$id = $_GET["id"];
$id = (int)$id;

$SQL1 = 'SELECT L.id_libro, L.titulo, L.npaginas, L.aniopublicacion, L.precioactual, L.stock, 
M.materia, E.editorial, E.ciudad, A.nombre, A.paterno, A.materno, A.direccion, A.pais, A.nickname 
FROM libros L INNER JOIN materia M ON L.id_materia = m.id_materia
INNER JOIN editorial e on L.id_editorial = e.id_editorial
INNER JOIN autor a on L.id_autor = a.id_autor WHERE L.id_libro ='.$id;
$result = $conn->query($SQL1);
$rows = $result->fetchAll();

$sqlDEL = "DELETE FROM libros WHERE libros.id_libro =".$id;
$conn->exec($sqlDEL);
echo "<script type='text/javascript'>window.location.replace('http://localhost/luisGarcia18/pages/reporte_libros.php')</script>"
?>