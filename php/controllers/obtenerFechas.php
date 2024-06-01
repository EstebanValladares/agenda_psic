<?php
include 'conexion_bd.php';

$sql = "SELECT fecha FROM citasPrueba";
$result = $conexion->query($sql);

$fechas = array();
while($row = $result->fetch_assoc()) {
    $fechas[] = $row['fecha'];
}

echo json_encode($fechas);
?>