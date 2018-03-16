<?php
require_once "conexion.php";
$sql = 'SELECT * FROM departamentos';
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
    var objeto_AJAX = crear_objeto_XMLHttpRequest();
    function pedirAutores(){
        var URL = "obtener_libros.php";
        objeto_AJAX.open("POST", URL, true);
        objeto_AJAX.onreadystatechange = muestraResultado;
        objeto_AJAX.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        objeto_AJAX.send("id_autor="+document.getElementById("combautor").value);
    }
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
<div align="center">
    <fieldset style="align-content: left">
        <legend style="font-size: 20px"><b>Registrar nuevo empleado</b></legend>
        <form action="grabar_empleado.php" method="post" id="formulario">
            <div><br>
                <label for="combo_departamento"><b>Departamento: </b></label>
                <select name="combo_departamento" id="combo_departamento" onchange=pedirAutores();>
                    <option value="0">...Seleccionar...</option>
                    <?php
                    foreach ($rows as $row){
                        echo '<option value="'.$row['departamento'].'">'.$row['descripcion'].'</option>';
                    }
                    ?>
                </select>
            </div><br>
            <div>
                <label for="txtnumero"><b>No. de empleado: </b></label>
                <input type="text" id="txtnumero" name="txtnumero">
            </div><br>
            <div>
                <label for="txtnombre"><b>Nombre: </b></label>
                <input type="text" id="txtnombre" name="txtnombre">
            </div><br>
            <div>
                <label for="txtsalario"><b>Salario: </b></label>
                <input id="txtsalario" name="txtsalario" type="text">
            </div><br>
            <div>
                <label for="txtcategoria"><b>Categoria: </b></label>
                <input id="txtcategoria" name="txtcategoria" type="text">
            </div><br>
            <div>
                <label for="combo_sexo"><b>Sexo: </b></label>
                <select name="combo_sexo" id="combo_sexo">
                    <option value="0">...Seleccionar...</option>
                    <option value="M">Masculino (M)</option>
                    <option value="F">Femenino (F)</option>>
                </select>
            </div><br>
            <div>
                <input type="submit" name="buscar" value="Buscar">
            </div>
        </form>
    </fieldset>
</div>
</body>
</html>
