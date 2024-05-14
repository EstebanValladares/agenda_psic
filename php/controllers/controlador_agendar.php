<?php

include("../controllers/conexion_bd.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $carrera = $_POST["carrera"];
    $semestre = $_POST["semestre"];
    $desc_cita = $_POST["desc_cita"];

    if (!empty($nombre) && !empty($apellido) && !empty($carrera) && !empty($semestre) && !empty($desc_cita)) {
        $consulta = "INSERT INTO citasprueba (nombre, apellido, carrera, semestre, desc_cita) VALUES ('$nombre', '$apellido', '$carrera', '$semestre', '$desc_cita')";
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

if (isset($_POST['nombre'], $_POST['apellido'], $_POST['semestre'], $_POST['carrera'], $_POST['desc_cita'])) {
  echo "Los datos se han enviado correctamente";
} else {
  echo "Los datos no se han enviado correctamente";
}


?>


