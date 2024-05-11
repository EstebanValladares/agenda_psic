<?php
$servername = "127.0.0.1"; 
$username = "root";
$password = "hola123";
$dbname = "prueba";

$conexion = new mysqli($servername, $username, $password, $dbname);
$conexion -> set_charset("utf8")
or die("Error en la conexión: " . mysqli_connect_error());
?>