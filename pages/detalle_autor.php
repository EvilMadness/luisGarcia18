<?php
session_start();
if (isset($_SESSION["user"])==""){
    header("Location:login.php");
}
require_once "conn_mysql_luis.php";
$idautor = (int)$_GET["id"];

$sql = 'SELECT * FROM autor WHERE id_autor = '.$idautor;
$result = $conn -> query($sql);
$rows = $result -> fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/layout.css">
</head>
<body id="top">
<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
        <div class="fl_left">
            <ul class="nospace inline pushright">
                <li><i class="fa fa-phone"></i> (386) 106 4302</li>
                <li><i class="fa fa-envelope-o"></i> luisgarcia@alumnos.udg.mx</li>
            </ul>
        </div>
        <div class="fl_right">
            <ul class="faico clear">
                <li><a class="faicon-facebook" href="http://www.facebook.com/LuizGarcia.CA"><i class="fa fa-facebook"></i></a></li>
                <li><a class="faicon-twitter" href="https://twitter.com/RayoMonster"><i class="fa fa-twitter"></i></a></li>
                <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="wrapper row1">
    <header id="header" class="hoc clear">
        <div id="logo" class="fl_left">
            <h1><a href="../index.php">Programación Web</a></h1>
        </div>
        <nav id="mainav" class="fl_right">
            <ul class="clear">
                <li><a href="../index.php">Inicio</a></li>
                <?php
                if (isset($_SESSION["user"])){?>
                <li><a class="drop" href="#"><?php echo $_SESSION["user"];?></a>
                    <ul>
                        <li><a href="logoff.php">Cerrar Sesión</a></li>
                        <li><a href="grabar_autor.php">Nuevo autor</a></li>
                        <li><a href="grabar_libros.php">Nuevo libro</a></li>
                        <li><a href="autor_libros.php">Reporte por autor</a></li>
                    </ul>
                    <?php } ?>
            </ul>
        </nav>
    </header>
</div>
<div class="wrapper row3 bgded  fondoformulario">
    <main class="hoc container clear">
        <h3 class="healsettabla2" align="center">Detalles de autor</h3>
        <div align="center">
            <table border="1" width="60%">
                <?php foreach ($rows as $row){ ?>
                    <tr>
                        <th>Nombre</th>
                        <td><?php echo $row['nombre']." ".$row['paterno']." ".$row['materno'];?></td>
                        <td><a href="editar_autor.php?id=<?php echo $row["id_autor"];?>">Editar</td>
                    </tr>
                    <tr>
                        <th>Dirección</th>
                        <td><?php echo $row['direccion'];?></td>
                        <td><a href="">Eliminar</td>
                    </tr>
                    <tr>
                        <th>Pais</th>
                        <td><?php echo $row['pais'];?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Nickname</th>
                        <td><?php echo $row['nickname'];?></td>
                        <td></td>
                    </tr>
                <?php } ?>
            </table>
            <br>
            <input class="btnagregar" type="button" onclick="location.href='reporte_libros.php'" value="Ver reporte">
        </div>
    </main>
</div>
<div class="wrapper row5">
    <div id="copyright" class="hoc clear">
        <!-- ################################################################################################ -->
        <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="index.php">Luis Ángel García Castro</a></p>
        <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        <!-- ################################################################################################ -->
    </div>
</div>
</body>
</html>