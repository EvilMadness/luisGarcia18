<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/stylePage.css">
    <script>
        function confirmDelete(titulo) {
            if (confirm("¿Estas seguro de eliminar el libro "+titulo+"?")==true){
                return true;
            }else
                return false;
        }
    </script>
    <?php
    require_once "conn_mysql_luis.php";
    $sql = 'SELECT * FROM libros l
      INNER JOIN editorial e ON l.id_editorial = e.id_editorial
      INNER JOIN autor a ON l.id_autor = a.id_autor
      INNER JOIN materia m ON l.id_materia = m.id_materia';
    $result = $conn -> query($sql);
    $rows = $result -> fetchAll();
    ?>
</head>
<body>
<div>
    <header>
        <h3 class="h2">Centro Universitario de los Valles</h3>
        <h4 class="h22">PROGRAMACIÓN WEB</h4>
    </header>
</div>
<h3>Reporte de la tabla de MySQL en HTML</h3>
<div align="center">
    <table border="1" width="70%" style="background-color: #469599">
        <tr>
            <th>Libro</th>
            <th>Autor</th>
            <th>Paginas</th>
            <th>Año</th>
            <th>Materia</th>
            <th>Editorial</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        foreach ($rows as $row){
        ?>
            <tr>
                <td><?php echo $row['titulo'];?></td>
                <td><a href="detalle_libro.php?id=<?php echo $row['id_autor']?>"><?php echo $row['nombre'];?></td>
                <td><?php echo $row['npaginas'];?></td>
                <td><?php echo $row['aniopublicacion'];?></td>
                <td><?php echo $row['materia'];?></td>
                <td><?php echo $row['editorial'];?></td>
                <td><a href="editar_libro.php?id=<?php echo $row['id_libro'];?>">Editar</a></td>
                <td><a href="eliminar_libros.php?id=<?php echo $row['id_libro'];?>"
                       onclick="return confirmDelete('<?php echo $row['titulo'];?>')">Eliminar</a></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <input type="button" onclick="location.href='grabar_libros.php';" value="Agregar Nuevo" />
</div>
<div>
</div>
</body>
</html>