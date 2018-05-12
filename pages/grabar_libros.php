<?php
session_start();
if (isset($_SESSION["user"])==""){
    header("Location:login.php");
}
require_once "conn_mysql_luis.php";
$sql1 = 'SELECT * FROM materia';
$sql2 = 'SELECT * FROM editorial';
$sql3 = 'SELECT * FROM autor';
$result1 = $conn -> query($sql1);
$result2 = $conn -> query($sql2);
$result3 = $conn -> query($sql3);
$rows1 = $result1 -> fetchAll();
$rows2 = $result2 -> fetchAll();
$rows3 = $result3 -> fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alta de libros</title>
    <link rel="stylesheet" href="../css/estilosa.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="../js/validacion.js"></script>
</head>
<body>
<div align="center">
    <fieldset style="align-content: center">
        <div style="width: 60%">
            <input class="w3-button w3-block w3-teal" type="submit" name="buscar" value="Regresar al reporte completo" onclick="location.href='reporte_libros.php';">
        </div>
        <legend style=" font-size: 20px"><b>Registrar nuevo libro</b></legend>
        <form action="registrar_libros.php" method="post" id="formulario" onsubmit="return validarForm()">
            <div align="left">
                <label for="txtnumero"><b>Id de libro</b></label>
                <input class="w3-input w3-border" type="number" id="txtnumero" name="txtnumero" placeholder="Id del libro 123">
            </div><br>
            <div align="left">
                <label for="txttitulo"><b>Titulo del libro</b></label>
                <input class="w3-input w3-border" type="text" id="txttitulo" name="txttitulo" placeholder="Nombre del libro">
            </div><br>
            <div align="left">
                <label for="txtpaginas"><b>Número de páginas</b></label>
                <input class="w3-input w3-border" id="txtpaginas" name="txtpaginas" type="number" placeholder="12">
            </div><br>
            <div align="left">
                <label for="txtprecio"><b>Precio del libro</b></label>
                <input class="w3-input w3-border" id="txtprecio" name="txtprecio" type="number" placeholder="$ precio $">
            </div><br>
            <div align="left">
                <label for="txtcantidad"><b>Cantidad de libros</b></label>
                <input class="w3-input w3-border" id="txtcantidad" name="txtcantidad" type="number" placeholder="123">
            </div><br>
            <div align="left">
                <label for="combo_aniopublicacion"><b>Año de publicación</b><br></label>
                <select class="w3-input w3-border" name="combo_aniopublicacion" id="combo_aniopublicacion">
                    <option value="0" >...Seleccione el año...</option>
                    <?php
                    for ($x = 1990; $x <= 2018; $x ++){
                        echo '<option value="'.$x.'">'.$x.'</option>';
                    }
                    ?>
                </select>
            </div><br>
            <div align="left">
                <label for="combo_materia"><b>Nombre de la materia</b></label>
                <select class="w3-input w3-border" name="combo_materia" id="combo_materia">
                    <option value="0">...Seleccione una materia...</option>
                    <?php
                    foreach ($rows1 as $row1){
                        echo '<option value="'.$row1['id_materia'].'">'.$row1['materia'].'</option>';
                    }
                    ?>
                </select>
            </div><br>
            <div align="left">
                <label for="combo_editorial"><b>Nombre de la editorial</b></label>
                <select class="w3-input w3-border" name="combo_editorial" id="combo_editorial">
                    <option value="0">...Seleccione una editorial...</option>
                    <?php
                    foreach ($rows2 as $row2){
                        echo '<option value="'.$row2['id_editorial'].'">'.$row2['editorial'].'</option>';
                    }
                    ?>
                </select>
            </div><br>
            <div align="left">
                <label for="combo_autor"><b>Nombre del autor</b></label>
                <select class="w3-input w3-border" name="combo_autor" id="combo_autor">
                    <option value="0">...Seleccione un autor...</option>
                    <?php
                    foreach ($rows3 as $row3){
                        echo '<option value="'.$row3['id_autor'].'">'.$row3['nombre']." ".$row3['paterno']." ".$row3['materno'].'</option>';
                    }
                    ?>
                </select>
            </div><br>

            <div style="width: 60%">
                <input class="w3-button w3-block w3-teal" type="reset" value="Limpiar Campos">
            </div><br/>
            <div style="width: 60%">
                <input class="w3-button w3-block w3-teal" type="submit" name="buscar" value="Registrar Libro">
            </div><br/>
            <div></div>
        </form>
    </fieldset>
</div>
</body>
</html>
