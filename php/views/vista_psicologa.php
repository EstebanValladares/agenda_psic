<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styleOptions.css">
    <link rel="stylesheet" href="../src/estilos.css">
    <link href="../src/output.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c91ca5f5f4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f04a31559.js" crossorigin="anonymous"></script>
</head>


<body>
    <main>
        <article class="articleAll">
            <section class="section-nav">
                <div class="div1">
                    <a href="http://localhost:8000/php/estudiantes.php"><i class="fa-solid fa-user iconUser"></i></a>
                    <a href="http://localhost:8000/php/calendario.php"><i class="fa-solid fa-calendar iconCalendario"></i></a>
                    <a href=""><i class="fa-solid fa-calendar iconCalendario"></i></a>
                </div>
                <div class="div2">
                    <i class="fa-solid fa-gear"></i>
                </div>
            </section>
            <section class="section-container">
                <button class="exit">closed</button>
                <div class="p-16 flex items-center justify-center">
                    <table class="border-collapse border border-slate-500">
                        <thead>
                            <tr>
                                <th class="border border-slate-600 p-3">id_cita</th>
                                <th class="border border-slate-600 p-3">id_estudiante</th>
                                <th class="border border-slate-600 p-3">nombre</th>
                                <th class="border border-slate-600 p-3">apellido</th>
                                <th class="border border-slate-600 p-3">carrera</th>
                                <th class="border border-slate-600 p-3">semestre</th>
                                <th class="border border-slate-600 p-3">fecha</th>
                                <th class="border border-slate-600 p-3">hora</th>
                                <th class="border border-slate-600 p-3">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include "../controllers/conexion_bd.php";
                        $sql = $conexion->query("SELECT * FROM citasprueba");
                        while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td class="border border-slate-600 p-3"><?php echo $datos->id_cita ?></td>
                            <td class="border border-slate-600 p-3"><?php echo $datos->id_estudiante ?></td>
                            <td class="border border-slate-600 p-3"><?php echo $datos->nombre ?></td>
                            <td class="border border-slate-600 p-3"><?php echo $datos->apellido ?></td>
                            <td class="border border-slate-600 p-3"><?php echo $datos->carrera ?></td>
                            <td class="border border-slate-600 p-3"><?php echo $datos->semestre ?></td>
                            <td class="border border-slate-600 p-3"><?php echo $datos->fecha ?></td>
                            <td class="border border-slate-600 p-3"><?php echo $datos->hora ?></td>
                            <td class="border border-slate-600 p-3"></td>
                        </tr>
                        <?php }
                        ?>
                        </tbody>
                    </table>
                </div>                   
            </section>
        </article>
    </main>
</body>
<script src="../js/app.js"></script>
</html>