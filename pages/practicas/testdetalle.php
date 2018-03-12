<?php
require_once "conexion.php";
$result;
$resultado = "<option value='0'>Estos son los libros de este autor</option>";
$resultado2 = "No se encontraron libros de este autor!!";

$autor_elegido = $_POST["id_autor"];

$sql2 = "SELECT * FROM libros WHERE id_autor ='$autor_elegido'";

$result = $conn->query($sql2);

$rows = $result->fetchAll();

if (empty($rows)) {
    echo $resultado2;
    die();
} else {
    echo $resultado;
    foreach ($rows as $row)
    {
        echo '<option value="'.$row['id_libro'].'">'.$row['titulo'].'</option>';
    }
}
?>