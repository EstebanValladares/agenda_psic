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
                    <a href="../../php/views/psicologa.php"><i class="fa-solid fa-envelope iconUser"></i>Solicitudes</a>
                </div>
            </section>
            <section class="section-container2">
            

<form method="post" action="actualizar.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="fecha">Fecha</label>
    <input type="date" id="fecha" name="fecha" value="<?php echo $row['fecha']; ?>">
    <label for="hora">Hora</label>
    <input type="time" id="hora" name="hora" value="<?php echo $row['hora']; ?>">
    <label for="nuevoDato">Nuevo dato</label>
    <input type="text" id="nuevoDato" name="nuevoDato" value="<?php echo $row['nuevoDato']; ?>">
    <input type="submit" name="submit" value="Actualizar">
</form>

<?php

?>
            </section>
        </article>
    </main>
</body>
<script src="../../js/logoutTimer.js"></script>
</html>