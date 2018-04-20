<?php
require_once "conexion.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alta de libros</title>
    <link rel="stylesheet" href="../../css/estilosa.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="../../js/validacion.js"></script>
</head>
<body>
<div align="center">
    <fieldset style="align-content: center">
        <legend style=" font-size: 20px"><b>Registrar nuevo autor</b></legend>
        <form action="TESTregistrar_autor.php" method="post" id="formulario" onsubmit="return validarAutor()">
            <div align="left">
                <label for="txtnumero"><b>Id de autor</b></label>
                <input class="w3-input w3-border" type="number" id="txtnumero" name="txtnumero" placeholder="Id del autor: 123">
            </div><br>
            <div align="left">
                <label for="txtnombre"><b>Nombre del autor: </b></label>
                <input class="w3-input w3-border" type="text" id="txtnombre" name="txtnombre" placeholder="Nombre del nuevo autor">
            </div><br>
            <div align="left">
                <label for="txtapaterno"><b>Apellido Paterno: </b></label>
                <input class="w3-input w3-border" id="txtapaterno" name="txtapaterno" type="text" placeholder="Apellido paterno del autor">
            </div><br>
            <div align="left">
                <label for="txtamaterno"><b>Apellido Materno</b></label>
                <input class="w3-input w3-border" id="txtamaterno" name="txtamaterno" type="text" placeholder="Apellido materno del autor">
            </div><br>
            <div align="left">
                <label for="txtdireccion"><b>Dirección: </b></label>
                <input class="w3-input w3-border" id="txtdireccion" name="txtdireccion" type="text" placeholder="Domicilio u direeción">
            </div><br>
            <div align="left">
                <label for="txtpais"><b>Pais: </b></label>
                <input class="w3-input w3-border" id="txtpais" name="txtpais" type="text" placeholder="Pais de origen: México">
            </div><br>
            <div align="left">
                <label for="txtnickname"><b>Nickname: </b></label>
                <input class="w3-input w3-border" id="txtnickname" name="txtnickname" type="text" placeholder="Nombre de usuario">
            </div><br>
            <div style="width: 50%">
                <input class="w3-button w3-block w3-teal" type="reset" value="Limpiar Campos">
            </div><br/>
            <div style="width: 50%">
                <input class="w3-button w3-block w3-teal" type="submit" name="buscar" value="Registrar Libro">
            </div>
        </form>
    </fieldset>
</div>
</body>
</html>
