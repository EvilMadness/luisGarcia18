<?php
/**
 * Created by PhpStorm.
 * User: LuisÁngel
 * Date: 02/02/18
 * Time: 05:02 PM
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tarea Sesión 3</title>
<body>
<?php
$operador1 = 58;
$operador2 = 42;

echo "<h4>".("La suma de ".$operador1." + ".$operador2." = ".($operador1+$operador2)."</h4>");
echo "<h4>".("La resta de ".$operador1." - ".$operador2." = ".($operador1-$operador2)."<h3>");
echo "<h4>".("La multiplicación de ".$operador1." * ".$operador2." = ".($operador1*$operador2)."<h3>");
echo "<h4>".("La división de ".$operador1." / ".$operador2." = ".($operador1/$operador2)."<h3><br/>");

$MiName = "Luis Angel";
echo "<h4>Mi nombre es: ".$MiName." y tiene ".strlen($MiName)." letras </h4>";
echo "<h4>Mi nombre tiene ".str_word_count($MiName)." palabras</h4>";
echo "<h4>Mi nombre al reves: ".strrev($MiName)."</h4>";
echo "<h4>La letra 'n' de mi nombre esta en la posición ".strpos($MiName,"n")."</h4>";
echo "<h4>Se remplazo la 's' de mi nombre por Z: ".str_replace("s","Z","$MiName")."</h4>";

date_default_timezone_set('America/Mexico_City');
$fecha = date("D d/m/Y");
$hora = date("h:i:s a");
echo "<h4>Es ".$fecha."<br/>Son las: ".$hora;
?>
</body>
</html>
