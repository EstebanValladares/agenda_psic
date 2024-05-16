<?php
session_start();
if (empty($_SESSION["id"])){
    header("location: index.php");
}
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
<!--     <link href="../login-tec/src/estilos.css" rel="stylesheet"> -->
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
            <section class="section-container">
                <a href="/php/auth/cerrar_sesion.php"><p class="exit">Cerrar Sesión</p></a>
                <article class="general">
                    <h2 class="cards">Información general</h2>
                    <section class="info">
                        <figure>
                            <i class="fa-solid fa-user"></i>
                        </figure>
                        <p>Nombre: <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido_paterno'] . " " . $_SESSION['apellido_materno'];  ?> </p>
                        <p>curp: <?php echo $_SESSION['curp'] ?> </p>
                        <p>Fecha de nacimiento: <?php echo $_SESSION['fecha_nacimiento'] ?> </p>
                        <p>Genero: <?php echo $_SESSION['genero'] ?> </p>
                        <p>Estado civil: <?php echo $_SESSION['estado_civil'] ?> </p>
                        <p>Nacionalidadl: <?php echo $_SESSION['nacionalidad'] ?> </p>
                        <p>Telefono: <?php echo $_SESSION['telefono'] ?> </p>
                        <p>Correo electrónico: <?php echo $_SESSION['correo_electronico'] ?> </p>
                    </section>
                </article>
                <article class="container-article2">
                    <section class="school">
                        <h2 class="cards">Información escolar</h2>
                        <section class="info">
                        <p>No. control: <?php echo $_SESSION['numero_control'] ?> </p>
                        <p>Semestre: <?php echo $_SESSION['semestre'] ?> </p>
                        <p>Carrera: <?php echo $_SESSION['carrera'] ?> </p>
                        <p>Especialidad: <?php echo $_SESSION['especialidad'] ?> </p>
                        </section>
                    </section>
                    <section class="contact">
                        <h2 class="cards">Información de contacto</h2>
                        <section class="info">
                        <p>Calle: <?php echo $_SESSION['calle_numero'] ?> </p>
                        <p>Colonia: <?php echo $_SESSION['colonia'] ?> </p>
                        <p>Municipio: <?php echo $_SESSION['municipio'] ?> </p>
                        <p>Estado: <?php echo $_SESSION['estado'] ?> </p>
                        <p>Podigo postal: <?php echo $_SESSION['codigo_postal'] ?> </p>
                        </section>
                    </section>
                    <section class="">
                    <a href="editar.php"><p class="">Editar informacion</p></a>
                    </section>
                </article>
            </section>
        </article>
    </main>
</body>
<script src="../../js/logoutTimer.js"></script>
<script src="../../js/script.js"></script>
</html>