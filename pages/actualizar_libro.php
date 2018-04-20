<?php
require_once 'conn_mysql_luis.php';

$id = $_GET["id"];
$id = (int)$id;

$titulo = trim($_POST["txttitulo"]);
$paginas = $_POST["txtpaginas"];
$precio = $_POST["txtprecio"];
$cantidad = $_POST["txtcantidad"];
$aniopublicacion = $_POST["combo_aniopublicacion"];
$materia = $_POST["combo_materia"];
$editorial = $_POST["combo_editorial"];
$autor = $_POST["combo_autor"];

$sqlUpdate = "UPDATE libros SET titulo='$titulo',npaginas=$paginas,aniopublicacion=$aniopublicacion,
precioactual=$precio,stock=$cantidad,id_materia=$materia,id_editorial=$editorial,id_autor=$autor WHERE id_libro=".$id;
$conn->exec($sqlUpdate);

echo "<script type='text/javascript'>window.location.replace('http://localhost/luisGarcia18/pages/reporte_libros.php')</script>"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
echo $sqlUpdate;
?>
</body>
</html>
