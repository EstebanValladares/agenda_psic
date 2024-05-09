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
<?php 
    if($_SESSION['password'] === 'tecvalles'){
        echo "<p class='alertaContraseña'>Cambiar la contraseña al nip institucional</p>";
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
                    <a href=""><i class="fa-solid fa-envelope iconUser"></i>Solicitudes</a>
                    <a href="p"><i class="fa-solid fa-calendar iconCalendario"></i>Calendario</a>
                    <a href=""><i class="fa-solid fa-gear"></i>Configuración</a>
                </div>
            </section>
            <section class="container-all">
                <article class="solicitudes">

                </article>
            </section>
        </article>
    </main>
</body>
<script src="../../js/logoutTimer.js"></script>
</html>