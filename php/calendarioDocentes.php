<?php
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
    <link rel="stylesheet" href="../style/styleOptions.css">
    <link href="../src/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f04a31559.js" crossorigin="anonymous"></script>
    <title>Calendario</title>
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
                    <a href=""><i class="fa-solid fa-gear"></i></a>
                </div>
            </section>
            <section class="section-container">
            <a href="cerrar_sesion.php"><p class="exit">Cerrar Sesión</p></a>
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
                
<section class="min-h-screen flex items-center justify-center rounded-lg shadow-lg">
    <div class="bg-white flex flex-col items-center p-10">
        <h1 class="text-2xl p-5">Registrar cita</h1>
        <div id="mensaje" ></div> 
        <form id="formulario" class="flex flex-col gap-4 w-full">
            <input type="text" name="nombre" placeholder="Nombre" class="p-2 mt-8 border-b-2 focus:outline-none focus:border-blue-400">
            <input type="text" name="apellido" id="apellido" placeholder="Apellidos" class="p-2 border-b-2 focus:outline-none focus:border-blue-400">
            <select name="semestre" id="semestre" class="p-2 border-b-2 focus:outline-none focus:border-blue-400">
                <option value="">semestre</option>
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <select name="carrera" id="carrera" class="p-2 border-b-2 focus:outline-none focus:border-blue-400">
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
    <script src="../js/app.js"></script>
    
<script>
    document.getElementById('semestre').addEventListener('change', function() {
        document.getElementById('semestre').value = this.options[this.selectedIndex].text;
    });
    document.getElementById('carrera').addEventListener('change', function() {
        document.getElementById('carrera').value = this.options[this.selectedIndex].text;
    });

    // Script AJAX para enviar el formulario
    document.getElementById('formulario').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita que el formulario se envíe normalmente
        var formData = new FormData(this); // Obtiene los datos del formulario
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) { // Cuando la solicitud está completa
                if (xhr.status == 200) { // Si la solicitud fue exitosa
                    document.getElementById('mensaje').innerHTML = xhr.responseText; // Muestra la respuesta del controlador
                } else {
                    document.getElementById('mensaje').innerHTML = "Error al procesar la solicitud."; // Muestra un mensaje de error genérico
                }
            }
        };
        xhr.open("POST", "controlador_agendar.php", true); // Abre una solicitud POST al controlador
        xhr.send(formData); // Envía los datos del formulario al controlador
    });
</script>
</html>