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
$rows1 = $result1 -> fetchAll();
$rows2 = $result2 -> fetchAll();
$rows3 = $result3 -> fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de libros</title>
    <link rel="stylesheet" href="../css/layout.css">
    <script src="../js/validacion.js"></script>
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
                        <li><a href="reporte_libros.php">Reporte de libros</a></li>
                        <li><a href="grabar_autor.php">Registrar Autor</a></li>
                    </ul>
                    <?php } ?>
            </ul>
        </nav>
    </header>
</div>
<div class="wrapper row3 bgded fondoformulario">
    <main class="hoc container clear">
        <div id="comments">
            <h3 class="healsettabla2" align="center">Registro de libros</h3>
            <form action="registrar_libros.php" method="post" id="formulario" onsubmit="return validarForm()">
                <div class="one_quarter first">
                    <label for="txtnumero"><b>Id de libro</b></label>
                    <input  type="number" id="txtnumero" name="txtnumero" placeholder="Id del libro 123">
                </div>
                <div class="one_half">
                    <label for="txttitulo"><b>Titulo del libro</b></label>
                    <input type="text" id="txttitulo" name="txttitulo" placeholder="Nombre del libro">
                </div>
                <div class="one_quarter">
                    <label for="txtpaginas"><b>Número de páginas</b></label>
                    <input id="txtpaginas" name="txtpaginas" type="number" placeholder="12">
                </div>
                <div class="one_third first">
                    <label for="txtprecio"><b>Precio del libro</b></label>
                    <input id="txtprecio" name="txtprecio" type="number" placeholder="$ precio $">
                </div>
                <div class="one_third">
                    <label for="txtcantidad"><b>Cantidad de libros</b></label>
                    <input id="txtcantidad" name="txtcantidad" type="number" placeholder="123">
                </div>
                <div class="one_third">
                    <label for="combo_aniopublicacion"><b>Año de publicación</b><br></label>
                    <select name="combo_aniopublicacion" id="combo_aniopublicacion">
                        <option value="0" >...Seleccione el año...</option>
                        <?php for ($x = 1990; $x <= 2018; $x ++){
                            echo '<option value="'.$x.'">'.$x.'</option>';
                        } ?>
                    </select>
                </div>
                <div class="one_third first">
                    <label for="combo_materia"><b>Nombre de la materia</b></label>
                    <select name="combo_materia" id="combo_materia">
                        <option value="0">...Seleccione una materia...</option>
                        <?php foreach ($rows1 as $row1){
                            echo '<option value="'.$row1['id_materia'].'">'.$row1['materia'].'</option>';
                        } ?>
                    </select>
                </div>
                <div class="one_third">
                    <label for="combo_editorial"><b>Nombre de la editorial</b></label>
                    <select name="combo_editorial" id="combo_editorial">
                        <option value="0">...Seleccione una editorial...</option>
                        <?php foreach ($rows2 as $row2){
                            echo '<option value="'.$row2['id_editorial'].'">'.$row2['editorial'].'</option>';
                        } ?>
                    </select>
                </div>
                <div class="one_third">
                    <label for="combo_autor"><b>Nombre del autor</b></label>
                    <select name="combo_autor" id="combo_autor">
                        <option value="0">...Seleccione un autor...</option>
                        <?php foreach ($rows3 as $row3){
                            echo '<option value="'.$row3['id_autor'].'">'.$row3['nombre']." ".$row3['paterno']." ".$row3['materno'].'</option>';
                        } ?>
                    </select>
                </div>
                <div>
                    <div class="one_half center first">
                        <input class="btnagregar" type="submit" name="submit" value="Registrar Libro" >
                    </div>
                    <div class="one_half center">
                        <input class="btnagregar" type="reset" value="Limpiar Campos">
                    </div>
                    <div>
                        <input class="btnagregar" onclick="location.href='reporte_libros.php'" type="button" value="Regrasar al reporte">
                    </div>
                </div>
            </form>
        </div>
    </main>
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
