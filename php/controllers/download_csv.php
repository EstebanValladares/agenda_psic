<?php
include '../controllers/conexion_bd.php';
session_start();

if (isset($_POST['download_csv'])) {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=solicitudes_citas.csv');
    $output = fopen('php://output', 'w');

    //encabezados de las columnas
    fputcsv($output, array('Nombre', 'Apellido', 'Carrera', 'Semestre', 'Descripción', 'Fecha', 'Hora'));

    // Verificar si hay una búsqueda activa
    $search = isset($_POST['search']) ? $_POST['search'] : '';
    if (!empty($search)) {
        $sqlSearch = "SELECT nombre, apellido, carrera, semestre, desc_cita, fecha, hora FROM citasprueba WHERE nombre LIKE ? OR apellido LIKE ?";
        $stmt = $conexion->prepare($sqlSearch);
        $param = "%{$search}%";
        $stmt->bind_param("ss", $param, $param);
        $stmt->execute();
        $resultSearch = $stmt->get_result();

        while ($row = $resultSearch->fetch_assoc()) {
            // Solo seleccionar las columnas que corresponden a los encabezados
            fputcsv($output, array(
                $row['nombre'],
                $row['apellido'],
                $row['carrera'],
                $row['semestre'],
                $row['desc_cita'],
                $row['fecha'],
                $row['hora']
            ));
        }
    } else {
        $sql = "SELECT nombre, apellido, carrera, semestre, desc_cita, fecha, hora FROM citasprueba";
        $result = $conexion->query($sql);

        while ($row = $result->fetch_assoc()) {
            // Solo seleccionar las columnas que corresponden a los encabezados
            fputcsv($output, array(
                $row['nombre'],
                $row['apellido'],
                $row['carrera'],
                $row['semestre'],
                $row['desc_cita'],
                $row['fecha'],
                $row['hora']
            ));
        }
    }
    fclose($output);
    $conexion->close();
    exit();
}
?>
