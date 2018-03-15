<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php
    require_once "conn_mysql_luis.php";
    $idautor = (int)$_POST["combautor"];

    $sql = 'SELECT * FROM autor WHERE id_autor = '.$idautor;
    $result = $conn -> query($sql);
    $rows = $result -> fetchAll();
    ?>
    <div align="center">
        <table border="1" width="60%">
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Pais</th>
                <th>Nickname</th>
            </tr>
            <?php
            foreach ($rows as $row){
                ?>
                <tr>
                    <td><?php echo $row['nombre']." ".$row['paterno']." ".$row['materno'];?></td>
                    <td><?php echo $row['direccion'];?></td>
                    <td><?php echo $row['pais'];?></td>
                    <td><?php echo $row['nickname'];?></td>
                </tr>
                <tr>
                    <td><a href="lista_dinamica.php">Regresar al reporte completo</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</head>
<body>

</body>
</html>