<?php
session_start();
if (empty($_SESSION["id"])){
    header("location: index.php");
}
/*
$curp = $_SESSION["curp"];
$fecha_nacimiento = $_SESSION["fecha_nacimiento"];
$genero = $_SESSION["genero"];
$estado_civil = $_SESSION["estado_civil"];
$nacionalidad = $_SESSION["nacionalidad"];
$telefono = $_SESSION["telefono"];
$correo_electronico = $_SESSION["correo_electronico"];
$calle_numero = $_SESSION["calle_numero"];
$colonia = $_SESSION["colonia"];
$estado = $_SESSION["estado"];
$municipio = $_SESSION["municipio"];
$unidad_medica = $_SESSION["unidad_medica"];
$cve_reticula = $_SESSION["cve_reticula"];
$carrera = $_SESSION["carrera"];
$cve_especialidad = $_SESSION["cve_especialidad"];
$especialidad = $_SESSION["especialidad"];
$estatus = $_SESSION["estatus"];
$semestre = $_SESSION["semestre"]; */
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
                    <a href="../views/estudiantes.php"><i class="fa-solid fa-user iconUser"></i></a>
                    <a href="../views/calendarioEstudiantes.php"><i class="fa-solid fa-calendar iconCalendario"></i></a>
                </div>
                <div class="div2">
                    <a href=""><i class="fa-solid fa-gear"></i></a>
                </div>
            </section>
            <section class="section-container">
                <a href="/php/auth/cerrar_sesion.php"><p class="exit">Cerrar Sesión</p></a>
                <article class="general">
                    <h2>Información general</h2>
                    <section class="info">
                        <figure>
                            <i class="fa-solid fa-user"></i>
                        </figure>
                        <p>Nombre: <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido_paterno'] . " " . $_SESSION['apellido_materno'];  ?> </p>
                        <p>numero de control: <?php ?> </p>
                        
                    </section>
                </article>
                <article class="container-article2">
                    <section class="school">
                        <h2>Información escolar</h2>
                        <section class="info">
                            <p>Nº de control: 19690148</p>
                            <p>Estatus: AEE / Activo con especiales</p>
                            <p>Carrera: Ingenieria En Sistemas Computacionales / 42 / Escolarizado</p>
                            <p>Especialidad: 40 / Desarrollo Full Stack</p>
                        </section>
                    </section>
                    <section class="contact">
                        <h2>Información de contacto</h2>
                        <section class="info">
                            <p>Calle y número: plaza eoliza #313</p>
                            <p>Colonia: carmen 3</p>
                            <p>Municipio: ciudad valles</p>
                        </section>
                    </section>
                </article>
            </section>
        </article>
    </main>
</body>
<script src="../js/app.js"></script>
</html>