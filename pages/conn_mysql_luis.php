<?php
$servername = "localhost";
$username = "id2579717_alumnovalles";
$password = "hola123";
$mydataBase = "id2579717_tarea";

try{
    $conn = new PDO("mysql:host=$servername; dbname=$mydataBase",$username,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<div align='center'><h1>Luis Angel Garcia Castro</h1></div>";
}
catch (PDOException $e){
    echo "<div align='center'><h1>ERROR DE CONEXIÓN: </h1></div>". $e -> getMessage();
}
?>