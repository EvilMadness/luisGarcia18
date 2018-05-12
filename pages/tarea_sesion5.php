<?php
session_start();
if (isset($_SESSION["user"])==""){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practica de la sesión 5</title>
</head>
<body>
<fieldset>
    <legend align="center" style="font-size: 25px"><b>FORMULARIO</b></legend>
    <div align="center">
        <fieldset style="width: 30%">
            <legend>CAPTURA DE NÚMERO</legend>
            <form action="funcion_usuario.php" method="post" id="frm_datos">
                <div>
                    <label><b>Selecciona un número</b></label>
                    <select id="boxNumeros">
                        <option value="">...Selecciona...</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                    </select>
                </div>
                <div>
                    <input type="hidden" id="txtLuis" name="txtLuis" value="LuisAngelGarciaCastro">
                </div>
                <div></br></br>
                    <input type="submit" value="Save data">
                </div>
            </form>
        </fieldset>
    </div>
</fieldset>
</body>
</html>