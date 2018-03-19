<?php
require_once "conexion.php";
$result = "";

$libro = $_POST["txtnumero"];
$libro = (int)$libro;
$titulo = strtoupper(trim($_POST["txttitulo"]));
$paginas = $_POST["txtpaginas"];
$precio = $_POST["txtprecio"];
$cantidad = $_POST["txtcantidad"];
$aniopublicacion = $_POST["combo_aniopublicacion"];
$materia = $_POST["combo_materia"];
$editorial = $_POST["combo_editorial"];
$autor = $_POST["combo_autor"];

$sqlINSERT1 = "INSERT INTO libros(id_libro,titulo,npaginas,aniopublicacion,precioactual,stock,id_materia,id_editorial,id_autor)
VALUES ($libro,'$titulo',$paginas,$aniopublicacion,$precio,$cantidad,$materia,$editorial,$autor)";
$conn->exec($sqlINSERT1);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libro Registrado</title>
    <link rel="stylesheet" href="../../css/estilosa.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div align="center">
    <fieldset>
        <legend style="font-size: 22px"><b>¡Libro registrado correctamente!</b></legend>
        <div><h3>Id Libro: <?php echo $libro?></h3></div>
        <div><h3>Titulo: <?php echo $titulo?></h3></div>
        <div><h3>No. de paginas: <?php echo $paginas?></h3></div>
        <div><h3>Precio: $<?php echo $precio?></h3></div>
        <div><h3>Cantidad: <?php echo $cantidad?></h3></div>
        <div><h3>Año de publicación: <?php echo $aniopublicacion?></h3></div>
        <div><h3>Materia: <?php echo $materia?></h3></div>
        <div><h3>Editorial: <?php echo $editorial?></h3></div>
        <div><h3>Autor: <?php echo $autor?></h3></div>
        <div>
            <h3><a href="TESTgrabar_libros.php">...Registrar otro libro...</a></h3>
        </div>
    </fieldset>
</div>
</body>
</html>
