
<!DOCTYPE html>
<html lang="en">
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
<section>
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
            </tr>
            </thead>
            <tbody>
            <?php
            include "../php/conexion_bd.php";
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
                </tr>
            <?php }
            ?>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>
