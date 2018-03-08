<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paso de parametro</title>
    <?php
    function saludo($var){
        if ($var == "dias"){
            echo "BUEN DIA";
        }
        if ($var == "tardes"){
            echo "BUENA TARDE";
        }
        if ($var == "noches"){
            echo "BUENA NOCHE";
        }
    }
    function suma($n1,$n2){
        $resultado = ($n1+$n2);

    }
    echo saludo("dias");
    ?>
</head>
<body>
<?php
saludo("tardes");
?>
</body>
</html>