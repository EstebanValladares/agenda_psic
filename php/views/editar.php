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


$datos_estudiante = array(
    "nombre" => $_SESSION['nombre'],
    "apellido_paterno" => $_SESSION['apellido_paterno'],
    "apellido_materno" => $_SESSION['apellido_materno'],
    "curp" => $_SESSION['curp'],
    "fecha_nacimiento" => $_SESSION['fecha_nacimiento'],
    "genero" => $_SESSION['genero'],
    "estado_civil" => $_SESSION['estado_civil'],
    "nacionalidad" => $_SESSION['nacionalidad'],
    "correo_electronico" => $_SESSION['correo_electronico'],
    "numero_control" => $_SESSION['numero_control'],
    "semestre" => $_SESSION['semestre'],
    "carrera" => $_SESSION['carrera'],
    "especialidad" => $_SESSION['especialidad'],
    "calle_numero" => $_SESSION['calle_numero'],
    "colonia" => $_SESSION['colonia'],
    "municipio" => $_SESSION['municipio'],
    "estado" => $_SESSION['estado'],
    "codigo_postal" => $_SESSION['codigo_postal']
);
?>

<!DOCTYPE html>
<html>
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
                    <a href=""><i class="fa-solid fa-gear"></i>Configuración</a>
                    <a href="cambiarPassword.php">Cambiar contrasena</a>
                    <a href="/php/auth/cerrar_sesion.php">Cerra Sesion</a>
                </div>
            </section>
            <section class="section-container">
                <a href="/php/auth/cerrar_sesion.php"><p class="exit">Cerrar Sesión</p></a>
                <?php include "../controllers/procesar_datos.php"; ?>
                <form action="" method="post" id="formularioDatos">
                <article class="general">
                    <h2 class="cards">Información general</h2>
                    <section class="info">
                        <div class=" flex flex-col">
                        <?php 
                            $campos_generales = array(
                                "nombre" => "Nombre",
                                "apellido_paterno" => "Apellido Paterno",
                                "apellido_materno" => "Apellido Materno",
                                "curp" => "CURP",
                                "fecha_nacimiento" => "Fecha de Nacimiento",
                                "genero" => "Género",
                                "estado_civil" => "Estado Civil",
                                "nacionalidad" => "Nacionalidad",
                                "correo_electronico" => "Correo Electrónico",
                            );
                        ?>
                        <?php foreach($campos_generales as $clave => $titulo): ?>
                            <label for="<?php echo $clave; ?>"><?php echo $titulo; ?></label>
                            <input type="text" name="<?php echo $clave; ?>" id="<?php echo $clave; ?>" value="<?php echo $datos_estudiante[$clave]; ?>" class=" border border-gray-400 rounded-md">
                        <?php endforeach; ?>
                        </div>
                    </section>
                    <section class="school">
                        <h2 class="cards">Información escolar</h2>
                        <section class="info">
                        <div class=" flex flex-col">
                        <?php 
                            $campos_escolares = array(
                                "numero_control" => "Numero de control",
                                "semestre" => "Semestre",
                                "carrera" => "Carrera",
                                "especialidad" => "Especialidad"
                            );
                        ?>
                        <?php foreach($campos_escolares as $clave => $titulo): ?>
                            <label for="<?php echo $clave; ?>"><?php echo $titulo; ?></label>
                            <input type="text" name="<?php echo $clave; ?>" id="<?php echo $clave; ?>" value="<?php echo $datos_estudiante[$clave]; ?>" class=" border border-gray-400 rounded-md">
                        <?php endforeach; ?>
                        </div>
                        </section>
                    </section>
                    <section class="contact">
                        <h2 class="cards">Información de contacto</h2>
                        <section class="info">
                        <div class=" flex flex-col">
                        <?php 
                            $campos_contacto = array(
                                "calle_numero" => "Calle",
                                "colonia" => "Colonia",
                                "municipio" => "Municipio",
                                "estado" => "Estado",
                                "codigo_postal" => "Codigo Postal"
                            );
                        ?>
                        <?php foreach($campos_contacto as $clave => $titulo): ?>
                            <label for="<?php echo $clave; ?>"><?php echo $titulo; ?></label>
                            <input type="text" name="<?php echo $clave; ?>" id="<?php echo $clave; ?>" value="<?php echo $datos_estudiante[$clave]; ?>" class=" border border-gray-400 rounded-md">
                        <?php endforeach; ?>
                        </div>
                        </section>
                    </section>
                </article>
                <!-- boton de envio -->
                <input type="submit" name="btnmodificardatos" value="Guardar Cambios" onclick="actualizarDatos()" data-userid="<?php echo $userId; ?>" > 
                </form>
            </section>          
        </article>
    </main>
</body>
</html>
<script src="../../js/updateInfoEst.js"></script>
