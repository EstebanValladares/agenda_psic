<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        if (empty($_SESSION["id"])){
            header("location: index.php");
          }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c91ca5f5f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style/styleOptions.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- link de tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
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
                <div class=" w-full flex flex-col items-center justify-center">
                    <div class=" shadow-xl w-4/6">
                    <div class=" bg-gray-300 p-2 rounded-tr-md rounded-tl-md">
                        <p class=" text-2xl">Cambiar contrasena</p>
                    </div>
                    <div class=" bg-white p-2">
                        <div class=" bg-gray-300 w-full rounded-tr-md rounded-tl-md p-3 mt-2">
                            <p class=" text-xl text-blue-600"> Los campos con * son obligatorios</p>
                        </div>
                        <div class=" mt-2">
                        <p class="text-gray-500 text-lg p-2">En seguida podrás cambiar tu contraseña actual del sistema, recuerda que debe tener 8 caracteres como mínimo, 1 número y 1 caracter especial.</p>
                        <form action="" method="post" class=" p-2 text-lg">
                            <?php include "../controllers/cambiar_pass.php"; ?>
                            <div class=" flex flex-col">
                                <label for="">Contrasena actual *</label>
                            <input type="password" name="passactual" id="passactual" class="border border-gray-300 rounded-md mb-5">
                            <label for="">Contrasena nueva *</label>
                            <input type="password" name="passnew" id="passnew" class="border border-gray-300 rounded-md mb-5">
                            <label for=""> Repetir Contrasena nueva *</label>
                            <input type="password" name="passnewconfirmation" id="passnewconfirmation" class="border border-gray-300 rounded-md">
                            <div class=" mt-9 flex justify-end">
                                <div>
                                <button class=" bg-gray-300 rounded-md p-1 cursor-pointer"><a href="./calendarioEstudiantes.php"></a> Atras </button>
                                <input type="submit" name="btnchangepass" class=" bg-blue-400 text-white rounded-md p-1 cursor-pointer" value="Cambiar">
                                </div>
                            </div>
                            </div>
                        </form>
                        </div>                      
                    </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
</body>
<script src="../../js/logoutTimer.js"></script>
</html>