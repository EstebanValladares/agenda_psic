<?php
/* session_start();
if (empty($_SESSION["id"])){
    header("location: index.php");
 */
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        if (empty($_SESSION["id"])){
            header("location: index.php");
          }
      }


$datos_docente = array(
    "rfc" => $_SESSION['rfc'],
    "curp" => $_SESSION["curp"],
    "no_tarjeta" => $_SESSION["no_tarjeta"],
    "nombre" => $_SESSION['nombre'],
    "nombramiento" =>  $_SESSION["nombramiento"],
    "correo_electronico" => $_SESSION["correo_electronico"],
    "estatus" => $_SESSION["estatus"],
    "departamento" => $_SESSION["departamento"],
    "academia" => $_SESSION["academia"],
);
?>

<!DOCTYPE html>
<html>
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
                    <a href="../views/docentes.php"><i class="fa-solid fa-user iconUser"></i>Información</a>
                    <a href="../views/calendarioDocentes.php"><i class="fa-solid fa-calendar iconCalendario"></i>Calendario</a>
                    <a href=""><i class="fa-solid fa-gear"></i>Configuración</a>
                    <a href="cambiarPasswordDocente.php">Cambiar contrasena</a>
                    <a href="/php/auth/cerrar_sesion.php">Cerra Sesion</a>
                </div>
            </section>
            <section class="section-container">
                <a href="/php/auth/cerrar_sesion.php"><p class="exit">Cerrar Sesión</p></a>
                <?php include "../controllers/procesar_datos_docente.php"; ?>
                <form action="" method="post" id="formularioDatos">
                <article class="general">
                    <h2 class="cards">Información general</h2>
                    <section class="info">
                        <div class=" flex flex-col">
                        <?php 
                            $campos_generales = array(
                                "nombre" => "Nombre",
                                "rfc" => "RFC",
                                "curp" => "Curp",
                                "correo_electronico" => "Correo electronico",
                            );
                        ?>
                        <?php foreach($campos_generales as $clave => $titulo): ?>
                            <label for="<?php echo $clave; ?>"><?php echo $titulo; ?></label>
                            <input type="text" name="<?php echo $clave; ?>" id="<?php echo $clave; ?>" value="<?php echo $datos_docente[$clave]; ?>" class=" border border-gray-400 rounded-md">
                        <?php endforeach; ?>
                        </div>
                    </section>
                    <section class="school">
                        <h2 class="cards">Información escolar</h2>
                        <section class="info">
                        <div class=" flex flex-col">
                        <?php 
                            $campos_escolares = array(
                                "no_tarjeta" => "No tarjeta",
                                "nombramiento" =>  "Nombramiento",
                                "estatus" => "Estatus",
                                "departamento" => "Departamento",
                                "academia" => "Academia",
                            );
                        ?>
                        <?php foreach($campos_escolares as $clave => $titulo): ?>
                            <label for="<?php echo $clave; ?>"><?php echo $titulo; ?></label>
                            <input type="text" name="<?php echo $clave; ?>" id="<?php echo $clave; ?>" value="<?php echo $datos_docente[$clave]; ?>" class=" border border-gray-400 rounded-md">
                        <?php endforeach; ?>
                        </div>
                        </section>
                    </section>
                </article>
                <!-- boton de envio -->
                <input type="submit" name="btnmodificardatosdoc" value="Guardar Cambios" > 
                </form>
            </section>          
        </article>
    </main>
</body>
</html>
<script src="../../js/updateInfoDoc.js"></script>
