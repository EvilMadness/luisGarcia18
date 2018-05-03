<?php
require_once "conexion.php";
$result = "";

$numero = $_POST["txtnumero"];
$numero = (int)$numero;
$nombre = strtoupper(trim($_POST["txtnombre"]));
$salario = $_POST["txtsalario"];
$categoria = trim($_POST["txtcategoria"]);
$sexo = $_POST["combo_sexo"];
$departamento = $_POST["combo_departamento"];

$sqlINSERT1 = "INSERT INTO empleados(numero, nombre, salario, categoria, sexo, departamento) 
VALUES ($numero,'$nombre',$salario,'$categoria','$sexo','$departamento')";
$conn->exec($sqlINSERT1);
echo $sqlINSERT1;
die();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XD</title>
</head>
<body>

</body>
</html>
