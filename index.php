<?php
session_start();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/stylePage.css">
    <link href="css//layout.css" rel="stylesheet" type="text/css" media="all">
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
</head>
<body>
<div>
    <header>
        <nav id="mainav" class="barra">
            <ul>
                <li class="active"><a href="index.php">Inicio</a></li>
                <?php
                if (isset($_SESSION["user"])){?>
                <li><a class="drop" href="#">Páginas</a>
                    <ul>
                        <li><a href="pages/reporte_libros.php">Reporte de libros</a></li>
                        <li><a href="pages/grabar_libros.php">Registrar Libros</a></li>
                        <li><a href="pages/grabar_autor.php">Registrar Autores</a></li>
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
        <!-- ################################################################################################ -->
    </header>
    <h1 class="h2">CENTRO UNIVERSITARIO DE LOS VALLES</h1>
    <h2 class="h22">Programación Web</h2>
</div>
</body>
</html>
