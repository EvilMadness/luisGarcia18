<?php
session_start();
if (isset($_SESSION["user"])==""){
    header("Location:login.php");
}
?>
<!doctype html>
<html>
<head>
</head>
<body>
<?php
require_once "conn_mysql_luis.php";
$autorElegido = $_GET['q'];

$sql = "SELECT * FROM libros l
INNER JOIN autor a on l.id_autor = a.id_autor AND l.id_autor='$autorElegido'
INNER JOIN editorial e on l.id_editorial = e.id_editorial
INNER JOIN materia m on l.id_materia = m.id_materia";

$result = $conn->query($sql);
$libros = $result->fetchAll();
?>
<div align="center">
    <table border="1" width="70%" style="background-color: #469599">
        <tr>
            <th>Titulo</th>
            <th>No. Páginas</th>
            <th>Año de publicación</th>
            <th>Stock</th>
            <th>Editorial</th>
            <th>Materia</th>
        </tr>
<?php
foreach ($libros as $libro) {
    //Imprimimos en la página un renglon de tabla HTML por cada registro de tabla de MySQL
    echo "<tr>";
    echo "<td>" . $libro['titulo'] . "</td>";
    echo "<td>" . $libro['npaginas'] . "</td>";
    echo "<td>" . $libro['aniopublicacion'] . "</td>";
    echo "<td>" . $libro['stock'] . "</td>";
    echo "<td>" . $libro['editorial'] . "</td>";
    echo "<td>" . $libro['materia'] . "</td>";
}

echo "</table>";
//Cerramos la oonexion a la base de datos **********************************************
$conn = null;
?>
</body>
</html>