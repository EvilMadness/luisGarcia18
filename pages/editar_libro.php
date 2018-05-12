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
$materias = $result1 -> fetchAll();
$editoriales = $result2 -> fetchAll();
$autores = $result3 -> fetchAll();
$result = "";
$result2 = "";

$idlibro = $_GET["id"];
$idlibro = (int)$idlibro;

if($idlibro == "") {
    header("Location: libroNoEncontrado.php");
    exit;
}
if(is_null($idlibro)) {
    header("Location: libroNoEncontrado.php");
    exit;
}

$sqlCONSULTA = 'SELECT * FROM libros WHERE id_libro = '.$idlibro;
$result = $conn->query($sqlCONSULTA);
$libros = $result->fetchAll();
if (empty($libros)) {
    $result = "No se encontraron registros !!";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edición de libros</title>
    <link rel="stylesheet" href="../css/estilosa.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="../js/validacion.js"></script>
</head>
<body>
<?php
foreach ($libros as $libro){
?>
<div align="center">
    <fieldset style="align-content: center">
        <div style="width: 60%">
            <input class="w3-button w3-block w3-teal" type="submit" name="buscar" value="Regresar al reporte completo" onclick="location.href='reporte_libros.php';">
        </div>
        <legend style=" font-size: 20px"><b>Edicion de un libro</b></legend>
        <form action="actualizar_libro.php?id=<?php echo $libro['id_libro'] ?> " method="post" id="formulario" onsubmit="return validarForm()">
            <div align="left">
                <label for="txtnumero"><b>Id de libro</b></label>
                <input class="w3-input w3-border" type="number" id="txtnumero" disabled name="txtnumero" placeholder="Id del libro 123" value="<?php echo $libro['id_libro'];?>">
            </div><br>
            <div align="left">
                <label for="txttitulo"><b>Titulo del libro</b></label>
                <input class="w3-input w3-border" type="text" id="txttitulo" name="txttitulo" placeholder="Nombre del libro" value="<?php echo $libro['titulo'];?>">
            </div><br>
            <div align="left">
                <label for="txtpaginas"><b>Número de páginas</b></label>
                <input class="w3-input w3-border" id="txtpaginas" name="txtpaginas" type="number" placeholder="12" value="<?php echo $libro['npaginas'];?>">
            </div><br>
            <div align="left">
                <label for="txtprecio"><b>Precio del libro</b></label>
                <input class="w3-input w3-border" id="txtprecio" name="txtprecio" type="number" placeholder="$ precio $" value="<?php echo $libro['precioactual'];?>">
            </div><br>
            <div align="left">
                <label for="txtcantidad"><b>Cantidad de libros</b></label>
                <input class="w3-input w3-border" id="txtcantidad" name="txtcantidad" type="number" placeholder="123" value="<?php echo $libro['stock'];?>">
            </div><br>
            <div align="left">
                <label for="combo_aniopublicacion"><b>Año de publicación</b><br></label>
                <select class="w3-input w3-border" name="combo_aniopublicacion" id="combo_aniopublicacion">
                    <option value="0" >...Seleccione el año...</option>
                    <?php
                    for ($x = 1990; $x <= 2018; $x ++){
                        echo ('<option value="'.$x.'"');
                        if ($x==$libro['aniopublicacion']){
                            echo ('selected');
                        }
                        echo ('>'.$x.'</option>');
                    }
                    ?>
                </select>
            </div><br>
            <div align="left">
                <label for="combo_materia"><b>Nombre de la materia</b></label>
                <select class="w3-input w3-border" name="combo_materia" id="combo_materia">
                    <option value="0" >...Seleccione una materia...</option>
                    <?php
                    foreach ($materias as $materia){
                        echo ('<option value="'.$materia['id_materia'].'"');
                        if ($materia['id_materia']==$libro['id_materia']){
                            echo ('selected');
                        }
                        echo ('>'.$materia['materia'].'</option>');
                    }
                    ?>
                </select>
            </div><br>
            <div align="left">
                <label for="combo_editorial"><b>Nombre de la editorial</b></label>
                <select class="w3-input w3-border" name="combo_editorial" id="combo_editorial">
                    <option value="0">...Seleccione una editorial...</option>
                    <?php
                    foreach ($editoriales as $editorial){
                        echo ('<option value="'.$editorial['id_editorial'].'"');
                        if ($editorial['id_editorial']==$libro['id_editorial']){
                            echo ('selected');
                        }
                        echo ('>'.$editorial['editorial'].'</option>');
                    }
                    ?>
                </select>
            </div><br>
            <div align="left">
                <label for="combo_autor"><b>Nombre del autor</b></label>
                <select class="w3-input w3-border" name="combo_autor" id="combo_autor">
                    <option value="0">...Seleccione un autor...</option>
                    <?php
                    foreach ($autores as $autor){
                        echo ('<option value="'.$materia['id_autor'].'"');
                        if ($autor['id_autor']==$libro['id_autor']){
                            echo ('selected');
                        }
                        echo ('>'.$autor['nombre']." ".$autor['paterno']." ".$autor['materno'].'</option>');
                    }
                    ?>
                </select>
            </div><br>
                <div style="width: 60%">
                    <input class="w3-button w3-block w3-teal" type="submit" name="buscar" value="Actualizar Libro">
                </div><br/>
            <div></div>
            <?php } ?>
        </form>
    </fieldset>
</div>
</body>
</html>

