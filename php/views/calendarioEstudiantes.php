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
    <link href="../login-tec/src/estilos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Document</title>

    <style>
        .day.registered {
            background-color: red;
            color: white;
        }
    </style>
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
                <div class="container">
                    <div class="calendar">
                        <div class="header">
                        <div class="month"></div>
                        <div class="btns">
                            <div class="btn today-btn">
                            <i class="fas fa-calendar-day"></i>
                            </div>
                            <div class="btn prev-btn">
                            <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="btn next-btn">
                            <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                        </div>
                        <div class="weekdays">
                        <div class="day">Dom</div>
                        <div class="day">Lun</div>
                        <div class="day">Mar</div>
                        <div class="day">Mie</div>
                        <div class="day">Jue</div>
                        <div class="day">Vie</div>
                        <div class="day">Sab</div>
                        </div>
                        <div class="days">
                        </div>
                    </div>
                    <div>
                        <p class="day-apart">Citas registradas en color rojo</p>
                    </div>
                </div>
                <div class="datesCits">
                    <article class="list">
                        <h3>Nueva cita</h3>
                        <form id="formulario" class="flex flex-col gap-4 w-full nuevFormulario" action="controlador_agendar.php" method="post">
                                <input type="text" name="nombre" placeholder="Nombre" class="inputs-cita">
                                <input type="text" name="apellido" id="apellido" placeholder="Apellidos" class="inputs-cita">
                                <select name="semestre" id="semestre" class="selectec_sem">
                                    <option value="">semestre</option>
                                        <?php
                                        for ($i = 1; $i <= 12; $i++) {
                                        echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                </select>
                                <select name="carrera" id="carrera" class="selected_car">
                                    <option value="">Seleccione una carrera</option>
                                        <?php
                                        $carreras = array("ING.INDUSTRIAL", "ING.SISTEMAS", "ING.GESTION", "ING.AMBIENTAL", "ING.ALIMENTARIAS", "ING.AGRONOMIA");
                                        foreach ($carreras as $carrera) {
                                        echo "<option value='$carrera'>$carrera</option>";
                                        }
                                        ?>
                                </select>
                                <input type="date" name="fecha" class="inputs-cita fechas">
                                <input type="time" name="hora" class="inputs-cita">
                                <label for="hora">Describe tu horario disponible</label>
                                <textarea id="desc_cita" class="inputs-cita" name="desc_cita" placeholder="Describe..."></textarea>
                                <button type="submit" class="bton-envio">Registrar</button>
                            </form>
                    </article>
                </div>
            </section>
        </article>
    </main>
</body>
    <script src="../../js/datosCitasEst.js"></script>
    <script src="../../js/app.js"></script>
    <script src="../../js/script.js"></script>
    <script src="../../js/logoutTimer.js"></script>
</html>