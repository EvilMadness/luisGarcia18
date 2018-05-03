<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Funcione</title>
    <link rel="stylesheet" href="../css/estilotabla2.css">
</head>
<br>
<?php
$num = $_POST['boxNumeros'];
$nombre = $_POST['txtLuis'];
?>
<div align="center">
    <table>
        <?php
        function Tabla($numero){
            echo "<tr>";
            echo "</tr>";
            for ($x = 1 ; $x <= $numero ; $x++){
                echo "<tr>";
                echo "<td>".$numero."</td>";
                echo "<td>".$numero."</td>";
                echo "<td>".$numero."</td>";
                echo "</tr>";
            }
        }
        echo Tabla($num);
        ?>
    </table>
</div></br>
<div align="center">
    <?php
    echo "Este reto lo programo: ".$nombre;
    ?>
</div>
</body>
</html>