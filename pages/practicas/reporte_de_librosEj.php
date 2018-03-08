<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nani</title>
    <?php
    require_once "conexion.php";
    $sql = 'SELECT * FROM libros l
            INNER JOIN editorial e ON l.id_editorial = e.id_editorial
            INNER JOIN autor a ON l.id_autor = a.id_autor
            INNER JOIN materia m ON l.id_materia = m.id_materia';
    $result = $conn -> query($sql);
    $rows = $result -> fetchAll();
    ?>
</head>
<body>
<h2>Reporte de la tabla de MySQL en HTML</h2>
<div align="center">
    <table border="1" width="60%">
        <tr>
            <th>Autor</th>
            <th>Libro</th>
            <th>Paginas</th>
            <th>Año</th>
            <th>Materia</th>
            <th>Editorial</th>
        </tr>
        <?php
        foreach ($rows as $row) {
            //Imprimimos en la página un renglon de tabla HTML por cada registro de tabla de MySQL
            ?>
            <tr>
                <td><a href="detalle_libroEj.php?id=<?php echo $row['id_autor']?>"><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['titulo']; ?></td>
                <td><?php echo $row['npaginas']; ?></td>
                <td><?php echo $row['aniopublicacion']; ?></td>
                <td><?php echo $row['materia']; ?></td>
                <td><?php echo $row['editorial']; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
