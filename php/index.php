<!DOCTYPE html>
<html>
<head>
    <link href="../src/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../login-tec/src/output.css" rel="stylesheet">
    <link href="../login-tec/src/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="../src/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f04a31559.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="min-h-screen flex items-center justify-center" style="background-color: #1C92E1;">
    <!-- container login -->
        <div class="bg-white flex rounded-lg shadow-lg max-w-4xl items-center p-10">
            <!-- imagen -->
            <div class=" w-1/2 items-center justify-center md:block hidden ">
                <img class="" src="../img/Imagen2.png" alt="">
            </div>
            <!-- formulario -->
            <div class="md:w-1/2 px-16 ">
                <div class="flex flex-col text-center justify-center items-center">
                <img src="../img/logotec.jpg" alt="" class=" w-2/3">
                <h2 class=" text-4xl font-semibold mb-2  mt-5 " style=" color:#053B5E">BIENVENIDO</h2>
                <p class=" text-base italic" style=" color:#053B5E">Ingresa tu numero de control y la contraseña "tecvalles"</p>
                <?php
                include "../php/conexion_bd.php";
                include "../php/controlador_login.php";
                ?>
                </div>
                <?php
                $current_page = basename($_SERVER['PHP_SELF']);
                ?>
                <div class="options">
                    <button class="<?php echo $current_page == 'index.php' ? 'selected' : ''; ?>"><a href="index.php">Estudiantes</a></button>
                    <button><a href="indexDocentes.php">Docentes</a></button>
                    <button><a href="">Psicologa</a></button>
                </div>
                <form method="post" action="" class="flex flex-col gap-4">
                    <input class="p-2 mt-8 border-b-2 focus:outline-none focus:border-blue-400 " type="text" name="usuario" placeholder="No. de control" id="usuario">
                    <div class="relative">
                    <input class="p-2 border-b-2 w-full focus:outline-none focus:border-blue-400 " type="password" name="password" placeholder="Contraseña" id="password">
                    <i class="fa-regular fa-eye absolute top-1/3 right-3 -translate-y-1/2"></i>
                    </div>      
                    <div class="grid grid-cols-2 mt-8">
                        <div>
                            <a href="#" class="text-base" style=" color:#053B5E">¿Olvidaste tu contraseña?</a>
                        </div>
                        <div>
                            <input name="btningresar" type="submit" value="Login →" style="background-color: #1C92E1;" class="rounded-2xl text-base text-white py-2 px-6 shadow-md " ></input>
                        </div>
                        
                    </div>   
                </form>
                <div>
                </div>


            </div>
        </div>
    </section>

</body>
</html>