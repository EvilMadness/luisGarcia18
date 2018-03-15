<?php
require_once "conn_mysql_luis.php";
$result;
$resultado = "<option value='0'>Estos son los libros de este autor</option>";
$resultado2 = "<option value='0'>Selecciona un autor</option>";

$autor_seleccionado = $_POST["id_autor"];
$sql2 = "SELECT * FROM libros WHERE id_autor ='$autor_seleccionado'";
$result = $conn->query($sql2);
$rows = $result->fetchAll();

if (empty($rows)){
    echo $resultado2;
    die();
} else {
    echo $resultado;
    foreach ($rows as $row) {
        echo '<option value="'.$row['id_autor'].'">'.$row['titulo'].'</option>';
    }
}
?>