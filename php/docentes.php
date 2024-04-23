<?php
session_start();
if (empty($_SESSION["id"])){
    header("location: index.php");
}
$nombre = $_SESSION["nombre"];
$apellidos = $_SESSION["apellido"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c91ca5f5f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/styleOptions.css">
    <title>Document</title>
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
                <a href="login.php"><p class="exit">Cerrar Sesión</p></a>
                <article class="general">
                    <h2>Información general</h2>
                    <section class="info">
                        <figure>
                            <i class="fa-solid fa-user"></i>
                        </figure>

                    </section>
                </article>
                <article class="container-article2">
                    <section class="school">
                        <h2>Información del docente</h2>
                        <section class="info">

                        </section>
                    </section>
                    <section class="contact">
                        <h2>Información de contacto</h2>
                        <section class="info">

                        </section>
                    </section>
                </article>
            </section>
        </article>
    </main>
</body>
<script src="../js/app.js"></script>
</html>