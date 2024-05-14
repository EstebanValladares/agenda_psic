<?php

include("../controllers/conexion_bd.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $carrera = $_POST["carrera"];
    $semestre = $_POST["semestre"];
    $desc_cita = $_POST["desc_cita"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];

    if (!empty($nombre) && !empty($apellido) && !empty($carrera) && !empty($semestre) && !empty($desc_cita) && !empty($fecha) && !empty($hora)) {
        if (!empty($id)) {
            // Si se envió un ID, actualizamos el registro existente
            $consulta = $conexion->prepare("UPDATE citasprueba SET nombre = ?, apellido = ?, carrera = ?, semestre = ?, desc_cita = ?, fecha = ?, hora = ? WHERE id = ?");
            $consulta->bind_param("sssssssi", $nombre, $apellido, $carrera, $semestre, $desc_cita, $fecha, $hora, $id);
        } else {
            // Si no se envió un ID, verificamos si ya existe un registro con los mismos datos
            $consulta = $conexion->prepare("SELECT * FROM citasprueba WHERE nombre = ? AND apellido = ? AND carrera = ? AND semestre = ? AND desc_cita = ? AND fecha = ? AND hora = ?");
            $consulta->bind_param("sssssss", $nombre, $apellido, $carrera, $semestre, $desc_cita, $fecha, $hora);
            $consulta->execute();
            $resultado = $consulta->get_result();

            if ($resultado->num_rows > 0) {
                echo "Ya existe un registro con los mismos datos.";
            } else {
                // Si no existe un registro con los mismos datos, insertamos un nuevo registro
                $consulta = $conexion->prepare("INSERT INTO citasprueba (nombre, apellido, carrera, semestre, desc_cita, fecha, hora) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $consulta->bind_param("sssssss", $nombre, $apellido, $carrera, $semestre, $desc_cita, $fecha, $hora);
            }
        }

        $resultado = $consulta->execute();

        if ($resultado) {
            header("Location: ../../php/views/psicologa.php"); 
            exit;
        } else {
            echo "Error al procesar los datos: " . $consulta->error;
        }
    } else {
        echo "Por favor, completa todos los campos del formulario.";
    }
}

$conexion->close();

?>