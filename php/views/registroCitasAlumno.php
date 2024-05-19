<?php
include '../controllers/conexion_bd.php';
session_start();
if (empty($_SESSION["id"])){
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c91ca5f5f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style/styleOptions.css">
    <link href="../login-tec/src/estilos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <main>
        <article class="articleAll">
            <section class="section-nav">
                <div class="div1">
                    <picture class="logotec">
                        <img src="../../img/logotec.jpg" alt="">
                    </picture>
                    <a href="../views/estudiantes.php"><i class="fa-solid fa-user iconUser"></i>Información</a>
                    <a href="../views/calendarioEstudiantes.php"><i class="fa-solid fa-calendar iconCalendario"></i>Calendario</a>
                    <a href="../views/registroCitasAlumno.php"><i class="fa-solid fa-clock iconCalendario"></i>Citas</a>
                    <a href=""><i class="fa-solid fa-gear"></i>Configuración</a>
                    <a href="cambiarPassword.php">Cambiar contrasena</a>
                    <a href="/php/auth/cerrar_sesion.php">Cerra Sesion</a>
                </div>
            </section>
            <section class="section-container2">
            <h3>Solicitudes</h3>
                <article class="container-input">
                <?php
    $searchResult = '';
    if (isset($_POST['submit'])) {
        $search = $_POST['search'];
        $sqlSearch = "SELECT * FROM citasprueba WHERE nombre LIKE ? OR apellido LIKE ?";
        $stmt = $conexion->prepare($sqlSearch);
        $param = "%{$search}%";
        $stmt->bind_param("ss", $param, $param);
        $stmt->execute();
        $resultSearch = $stmt->get_result();
    
        if ($resultSearch->num_rows > 0) {
            $searchResult .= "<table class='table-citas'>";
            $searchResult .= "<tr><th>Nombre</th><th>Apellido</th><th>Carrera</th><th>Semestre</th><th>Descripción</th><th>Fecha</th><th>Hora</th></tr>";
            while ($row = $resultSearch->fetch_assoc()) {
                $searchResult .= "<tr><td>" . $row["nombre"] . "</td><td>" . $row["apellido"] . "</td><td>" . $row["carrera"] . "</td><td>" . $row["semestre"] . "</td><td>" . $row["desc_cita"] . "</td><td>" . $row["fecha"] . "</td><td>" . $row["hora"] . "</td></tr>";
            }
            $searchResult .= "</table>";
        } else {
            $searchResult = "No se encontraron resultados";
        }
    } else {
        // Aquí es donde se realiza la modificación
        $nombre_usuario = $_SESSION['nombre'];
        $sql = "SELECT * FROM citasprueba WHERE nombre = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("s", $nombre_usuario);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $searchResult .= "<table class='table-citas'>";
            $searchResult .= "<tr><th>Nombre</th><th>Apellido</th><th>Carrera</th><th>Semestre</th><th>Descripción</th><th>Fecha</th><th>Hora</th></tr>";
            while ($row = $result->fetch_assoc()) {
                $searchResult .= sprintf(
                    "<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td class='colorCita';'>%s</td><td class='colorCita';'>%s</td></tr>",
                    $row["nombre"],
                    $row["apellido"],
                    $row["carrera"],
                    $row["semestre"],
                    $row["desc_cita"],
                    $row["fecha"],
                    $row["hora"],
                    //$id
                );
            }
            $searchResult .= "</table>";
        } else {
            $searchResult = "0 resultados";
        }
    }
    $conexion->close();
    echo $searchResult;
?>
                </article>
            </section>
        </article>
    </main>
</body>
<script src="../../js/logoutTimer.js"></script>
</html>
