<?php
/**
 * Created by PhpStorm.
 * User: LuisÁngel
 * Date: 09/02/18
 * Time: 09:59 AM
 */
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica Web dinámica de la sesión 4</title>
    <link rel="stylesheet" href="../css/estilotabla.css">
</head>
<body>
<table align="center">
    <caption>Tabla Dinámica</caption>
    <?php
    echo "<tr>";
    echo "<th>Número</th>";
    echo "<th>Cuadro del número</th>";
    echo "<th>Par/NoPar</th>";
    echo "</tr>";
    for ($i=1;$i <= 100; $i++){
        $numCuadro = $i*$i;
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$numCuadro."</td>";
        if ($numCuadro%2 == 0){
            echo "<td>Par</td>";
        }
        else{
            echo "<td>NoPar</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
