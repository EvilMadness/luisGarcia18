<?php
/**
 * Created by PhpStorm.
 * User: MnDMzTR
 * Date: 11/03/2018
 * Time: 07:48 PM
 */
require_once "conexion.php";
$sql = 'SELECT * FROM autor';
$result = $conn -> query($sql);
$rows = $result -> fetchAll();
?>
<script language="JavaScript" type="text/javascript">
    function crear_objeto_XMLHttpRequest() {
        try {
            objeto = new XMLHttpRequest();
        } catch(err1) {
            try {
                objeto = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (err2) {
                try {
                    objeto = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (err3) {
                    objeto = false;
                }
            }
        }
        return objeto;
    }
    /* Aquí acaba la definición de la función que se usará para instaciar objetos XMLHttpRequest */
    var objeto_AJAX = crear_objeto_XMLHttpRequest();
    /* La siguiente función se ejecuta cuando es invocada por un cambio en el control de la lista de departamentos. */
    function pedirAutores(){
        var URL = "testdetalle.php";
        objeto_AJAX.open("POST", URL, true);
        objeto_AJAX.onreadystatechange = muestraResultado;
        objeto_AJAX.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        objeto_AJAX.send("id_autor="+document.getElementById("combautor").value);
    }
    /* La siguiente función se ejecuta cuando se recibe una respuesta del servidor. */
    function muestraResultado(){
        if (objeto_AJAX.readyState == 4 && objeto_AJAX.status == 200)
        {
            document.getElementById("comblibro").innerHTML = objeto_AJAX.responseText;
        }
    }
</script>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista dinamica</title>
    <link rel="stylesheet" href="../../css/estilosa.css">
</head>
<body>
<div id="txt1" align="center">
    <fieldset>
        <legend style="font-size: 20px"><b>Autores</b></legend>
        <form action="testdetalle.php" method="post" id="formulario">
            <div>
                <label for="autor"><b>Autor: </b></label>
                <select name="combautor" id="combautor" onchange=pedirAutores();>
                    <option value="0">...Selecciona...</option>
                    <?php
                    foreach ($rows as $row){
                        echo '<option value="'.$row['id_autor'].'">'.$row['nombre']." ".$row['paterno']." ".$row['materno'].'</option>';
                    }
                    ?>
                </select>
            </div><br>
            <div>
                <label for="comblibro">Libros...</label>
                <select name="comblibro" id="comblibro"></select>
            </div><br>
            <div>
                <input type="submit" name="buscar" value="Buscar">
            </div>
        </form>
    </fieldset>
</div>
</body>
</html>
