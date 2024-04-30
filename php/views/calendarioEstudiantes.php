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
<!-- hojas de estilos de css -->
<link rel="stylesheet" href="../../style/styleOptions.css">
<link rel="stylesheet" href="../../src/estilos.css">
<!-- link de tailwind -->
<link href="../src/output.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
<!-- fonts determinadas para el proyecto -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<!-- fontawesome en diferentes cuentas  -->
<script src="https://kit.fontawesome.com/c91ca5f5f4.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/7f04a31559.js" crossorigin="anonymous"></script>
<!-- titulo del poryecto -->
<title>Calendario</title>
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
            <a href="../auth/cerrar_sesion.php"><p class="exit">Cerrar Sesión</p></a>
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
                    <button class="new_date">Nueva cita</button>
                </div>
                <div class="datesCits">
                    <article class="list">
                        <h3>Historial</h3>
                        <p></p>
                        <p>holaa </p>
                    </article>
                </div>
            </section>
        </article>
        <article class="formulario">
            <button class="cerrar"><i class="fa-solid fa-x"></i></button>
                
            <section>
                <div class="bg-white flex flex-col items-center p-10 formularioDoc">
                    <h1 class="titulo_cita">Registrar cita</h1>
                        <div id="mensaje" ></div> 
                            <form id="formulario" class="flex flex-col gap-4 w-full">
                                <input type="text" name="nombre" placeholder="Nombre" class="">
                                <input type="text" name="apellido" id="apellido" placeholder="Apellidos" class="p-2 border-b-2 focus:outline-none focus:border-blue-400">
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
                                <input type="date" name="fecha" class="p-2 border-b-2 focus:outline-none focus:border-blue-400">
                                <button type="submit" style="background-color: #1C92E1;" class="rounded-2xl text-base text-white py-2 px-6 shadow-md">Registrar</button>
                            </form>
                        </div>
            </section>
        </article>
    </main>
</body>
    <script src="../../js/app.js"></script>
    <script src="../../js/script.js"></script>
</html>