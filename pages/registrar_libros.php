<?php
require_once "conn_mysql_luis.php";
$result = "";

$libro = $_POST["txtnumero"];
$libro = (int)$libro;
$titulo = trim($_POST["txttitulo"]);
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

$sqlMateria = 'SELECT * FROM materia WHERE id_materia ='.$materia;
$sqlEditorial = 'SELECT * FROM editorial WHERE id_editorial = '.$editorial;
$sqlAutor = 'SELECT * FROM autor WHERE id_autor = '.$autor;
$res1 = $conn -> query($sqlMateria);
$res2 = $conn -> query($sqlEditorial);
$res3 = $conn -> query($sqlAutor);
$materias = $res1 -> fetchAll();
$editoriales = $res2 -> fetchAll();
$autores = $res3 -> fetchAll();

foreach ($materias as $materia){}
foreach ($editoriales as $editorial){}
foreach ($autores as $autor){}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libro Registrado</title>
    <link rel="stylesheet" href="../css/estilosa.css">
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
        <div><h3>Materia: <?php echo $materia['materia']?></h3></div>
        <div><h3>Editorial: <?php echo $editorial['editorial']?></h3></div>
        <div><h3>Autor: <?php echo $autor['nombre']." ".$autor['paterno']." ".$autor['materno']?></h3></div>

        <div style="width: 50%">
            <input class="w3-button w3-block w3-teal" type="submit" name="buscar" value="Registrar otro libro" onclick="location.href='grabar_libros.php';">
        </div><br/>
        <div style="width: 50%">
            <input class="w3-button w3-block w3-teal" type="submit" name="buscar" value="Regresar al reporte completo" onclick="location.href='reporte_libros.php';">
        </div>
    </fieldset>
</div>
</body>
</html>
