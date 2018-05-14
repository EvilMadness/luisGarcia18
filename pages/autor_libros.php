<?php
session_start();
if (isset($_SESSION["user"])==""){
    header("Location:login.php");
}
require_once "conn_mysql_luis.php";
$result = "";

$sql = 'SELECT * FROM autor';
$stmt = $conn->query($sql);
$autores = $stmt->fetchAll();
if (empty($rows)) {
    $result = "No se encontraron resultados !!";
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Libros por Autor</title>
    <link rel="stylesheet" href="../css/layout.css">
    <script language="JavaScript" type="text/javascript">
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET","get_libros.php?q="+str,true);
                xmlhttp.send();
            }
        }
    </script>
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
                    </ul>
                    <?php } ?>
            </ul>
        </nav>
    </header>
    <div class="wrapper row3 bgded  fondoformulario">
    <main class="hoc container clear">
        <div id="comments">
            <div class="center">
                <label for="ComboAutor"><b>Autor</b></label>
                <select style="width: 40%" name="ComboAutor" id="ComboAutor" onChange="showUser(this.value);">
                    <option value="0">-- Selecciona a un autor --</option>
                    <?php
                    foreach ($autores as $autor) {
                        echo '<option value="'.$autor['id_autor'].'">'.$autor['nombre'].' '.$autor['paterno'].' '.$autor['materno'].'</option>';
                    } ?>
                </select>
                <br><br><label for="ComboLibros"><b>Libros del autor seleccionado</b></label>
                <div id="txtHint">
                    <b>Aqui se mostrarán los libros que tiene este autor.</b>
                </div>
            </div>
        </div>
    </main>
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
<?php
//Cerramos la oonexion a la base de datos **********************************************
$conn = null;
?>
</body>
</html>