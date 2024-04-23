<?php

include("conexion_bd.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $carrera = $_POST["carrera"];
    $semestre = $_POST["semestre"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];

    if (!empty($nombre) && !empty($apellido) && !empty($carrera) && !empty($semestre) && !empty($fecha) && !empty($hora)) {
        $consulta = "INSERT INTO citasprueba (nombre, apellido, carrera, semestre, fecha, hora) VALUES ('$nombre', '$apellido', '$carrera', '$semestre', '$fecha', '$hora')";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            echo "Datos agregados correctamente";
        } else {
            echo "Error al ingresar los datos: " . mysqli_error($conexion);
        }
    } else {
        echo "Por favor, completa todos los campos del formulario.";
    }
}

mysqli_close($conexion);

?>
