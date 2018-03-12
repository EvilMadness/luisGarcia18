<?php
require_once "conexion.php";
$result = "";
$sql = 'SELECT * FROm departamentos';
$stmt = $conn -> query($sql);
$rows = $stmt -> fetchAll();

if (empty($rows)){
    $result = "NO HAY NADA";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Combo box dinamico</title>
</head>
<body>
<div id="texto1" ALIGN="CENTER" style="font-size: 20px"><br>
    <p><?php echo $result ?></p>
    <fieldset style="width: 50%">
        <legend><b>Departamentos</b></legend>
        <form action="detalleDepartamento" method="post" id="formulario1">
            <div>
                <p>
                    <label for="departamento"><b>Area </b></label>
                    <select name="departamento" id="departamento">
                        <?php
                        foreach ($rows as $row){
                            echo '<option value="'.$row['departamento'].'">'.$row['descripcion'].'</option>';
                        }
                        ?>
                    </select>
                </p>
                <p>
                    <input type="submit" name="buscarDpto" value="Buscar datos">
                </p>
            </div>
        </form>
    </fieldset>
</div>
</body>
</html>
