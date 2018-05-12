<?php
?>
<!doctype html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/stylePage.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div align="center">
    <fieldset style="width: 30%">
        <form enctype="multipart/form-data" action="sesion.php" method="POST">
            <h2 class="h22" style="background-color: rgba(3,4,4,0.64)">Ingresa tus credenciales</h2>
            <div align="left">
                <label for="user"><b>Usuario</b></label>
                <input class="w3-input w3-border" type="text" id="user" name="user" placeholder="Nombre de usuario" required>
            </div><br>
            <div align="left">
                <label for="pass"><b>Contraseña</b></label>
                <input class="w3-input w3-border" type="password" id="pass" name="pass" placeholder="Contraseña" required>
            </div><br>
            <br>
            <div>
                <input class="btnagregar" type="submit" value="Iniciar Sesión"/>
            </div>
            <!--<div><span class="fondoLink"><a class="fondoLink" href="practicas/reg_user.php">¿Aún no tienes una cuenta? ¡Registrate aquí!</span></div>-->
        </form>
    </fieldset>
</div>
</body>
</html>
