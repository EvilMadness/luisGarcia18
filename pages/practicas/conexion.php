<?php
/**
 * Created by PhpStorm.
 * User: LuizGarcia
 * Date: 22/02/18
 * Time: 09:10 AM
 */
$servername = "localhost";
$username = "root";
$password = "";
$basededatos = "id2579717_tarea";


try{
    $conn = new PDO("mysql:host = $servername; dbname=$basededatos",$username, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<div align='center'><h1>Luis Angel Garcia Castro</h1></div>";
}
catch (PDOException $e){
    echo "<div align='center'><h1>CONEXIÓN PERDIDA: </h1></div>". $e -> getMessage();
}
?>