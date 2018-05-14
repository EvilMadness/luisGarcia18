<?php
session_start();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="css/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="images/MarioIcon2.png" rel="shortcut icon" type="image/x-icon" />
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
        <!-- ################################################################################################ -->
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
        <!-- ################################################################################################ -->
    </div>
</div>
<div class="wrapper row1">
    <header id="header" class="hoc clear">
        <!-- ################################################################################################ -->
        <div id="logo" class="fl_left">
            <h1><a href="index.php">Programación Web</a></h1>
        </div>
        <nav id="mainav" class="fl_right">
            <ul>
                <li class="active"><a href="index.php">Inicio</a></li>
                <?php
                if (isset($_SESSION["user"])){?>
                <li><a class="drop" href="#">Páginas</a>
                    <ul>
                        <li><a href="pages/reporte_libros.php">Reporte de libros</a></li>
                        <li><a href="pages/grabar_libros.php">Registrar Libros</a></li>
                        <li><a href="pages/grabar_autor.php">Registrar Autores</a></li>
                        <li><a href="pages/autor_libros.php">Consultar libros de autor</a></li>
                    </ul>
                </li>
                <li><a class="drop" href="#"><?php echo $_SESSION["user"];?></a>
                    <ul>
                        <li><a href="pages/logoff.php">Cerrar Sesión</a></li>
                    </ul>
                    <?php } else {?>
                <li><a href="pages/login.php">Iniciar Sesión</a>
                    <?php } ?>
                </li>
            </ul>
        </nav>
    </header>
</div>
<div class="wrapper bgded " style="background-image:url('images/graytexture.jpg')">
    <div id="pageintro" class="hoc clear">
        <!-- ################################################################################################ -->
        <article class="introtxt">
            <h1 class="fondosombreado">Universidad de Guadalajara</h1>
            <h6 class="fondosombreado"> Centro Universitario de los Valles</h6>
        </article>
        <!-- ################################################################################################ -->
        <div class="clear"></div>
    </div>
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
