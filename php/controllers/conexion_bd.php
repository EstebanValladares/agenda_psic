<?php
$servername = "127.0.0.1"; 
$username = "root";
$password = "hola123";
$dbname = "prueba";

try {
    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("set names utf8");
    echo "Conexión exitosa";
} catch(PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>
