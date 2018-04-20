<?php
require_once "conexion.php";
$result = "";

$autor = $_POST["txtnumero"];
$autor = (int)$autor;
$nombre = strtoupper(trim($_POST["txtnombre"]));
$paterno = $_POST["txtapaterno"];
$materno = $_POST["txtamaterno"];
$direccion = $_POST["txtdireccion"];
$pais = $_POST["txtpais"];
$nickname = $_POST["txtnickname"];

$sqlINSERT1 = "INSERT INTO autor(id_autor,nombre,paterno,materno,direccion,pais,nickname)
VALUES ($autor,'$nombre','$paterno','$materno','$direccion','$pais','$nickname')";
$conn->exec($sqlINSERT1);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Autor Registrado</title>
    <link rel="stylesheet" href="../../css/estilosa.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div align="center">
    <fieldset>
        <legend style="font-size: 22px"><b>¡Libro registrado correctamente!</b></legend>
        <div><h3>Id Autor: <?php echo $autor?></h3></div>
        <div><h3>Nombre: <?php echo $nombre?></h3></div>
        <div><h3>Apellido Paterno: <?php echo $paterno?></h3></div>
        <div><h3>Apellido Materno: <?php echo $materno?></h3></div>
        <div><h3>Dirección: <?php echo $direccion?></h3></div>
        <div><h3>Pais: <?php echo $pais?></h3></div>
        <div><h3>Nickname: <?php echo $nickname?></h3></div>
        <div>
            <h3><a href="TESTgrabar_autor.php">...Registrar otro autor...</a></h3>
        </div>
    </fieldset>
</div>
</body>
</html>
