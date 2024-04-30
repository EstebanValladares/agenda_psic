<?php
session_start();
if (empty($_SESSION["id"])){
    header("location: indexDocentes.php");
}
$departamento = $_SESSION["departamento"];
$rfc = $_SESSION["rfc"];
$curp = $_SESSION["curp"];
$nombre = $_SESSION["nombre"];
$nombramiento = $_SESSION["nombramiento"];
$correo_electronico = $_SESSION["correo_electronico"];
$estatus = $_SESSION["estatus"];
$departamento = $_SESSION["departamento"];
$academia = $_SESSION["academia"];
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
    <title>Docentes</title>
</head>

<body>
    <main>
        <article class="articleAll">
            <section class="section-nav">
            <div class="div1">
                    <a href="docentes.php"><i class="fa-solid fa-user iconUser"></i></a>
                    <a href="calendarioDocentes.php"><i class="fa-solid fa-calendar iconCalendario"></i></a>
                </div>
                <div class="div2">
                    <a href="#"><i class="fa-solid fa-gear"></i></a>
                </div>
            </section>
            <section class="section-container">
                <a href="../auth/cerrar_sesion.php"><p class="exit">Cerrar Sesión</p></a>
                <article class="general">
                    <h2 class="cards">Información general</h2>
                    <section class="info">
                        <figure>
                            <i class="fa-solid fa-user"></i>
                        </figure>
                        <p>RFC: <?php echo "$rfc" ?></p>
                        <p>CRUP: <?php echo "$curp" ?></p>
                        <p>CORREO: <?php echo "$correo_electronico" ?></p>
                        <p>ESTATUS: <?php echo "$estatus" ?></p>
                    </section>
                </article>
                <article class="general">
                    <h2 class="cards">Información del docente</h2>
                    <section class="school">
                        <p>NOMBRE: <?php echo "$nombre" ?></p>
                        <p>NOMBRAMINETO: <?php echo "$nombramiento" ?></p>
                        <p>DEPARTAMENTO: <?php echo "$departamento" ?></p>
                        <p>ACADEMIA: <?php echo "$academia" ?></p>
                    </section>
                </article>
            </section>
        </article>
    </main>
</body>
<script src="../js/app.js"></script>
</html>