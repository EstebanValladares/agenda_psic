<?php
    include '../controllers/conexion_bd.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['actualizar'])) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $semestre = $_POST['semestre'];
            $carrera = $_POST['carrera'];
            $desc_cita = $_POST['desc_cita'];
            $fecha = $_POST['fecha'];
            $hora = $_POST['hora'];

            $sql = "UPDATE citasprueba SET nombre = ?, apellido = ?, semestre = ?, carrera = ?, desc_cita = ?, fecha = ?, hora = ? WHERE id_cita = ?";

            if ($stmt = $conexion->prepare($sql)) {
                $stmt->bind_param("ssissssi", $nombre, $apellido, $semestre, $carrera, $desc_cita, $fecha, $hora, $id);
                if ($stmt->execute()) {
                    header("location: success.php");
                    exit();
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
            $stmt->close();
        }
        $sql = "SELECT * FROM citasprueba WHERE id_cita = ?";
        if($stmt = $conexion->prepare($sql)){
            $stmt->bind_param("i", $id);
            if($stmt->execute()){
                $result = $stmt->get_result();
                
                if($result->num_rows == 1){
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                    $nombre = $row["nombre"];
                    $apellido = $row["apellido"];
                    $semestre = $row["semestre"];
                    $carrera = $row["carrera"];
                    $desc_cita = $row["desc_cita"];
                    $fecha = $row["fecha"];
                    $hora = $row["hora"];
                } else{
                    header("location: error.php");
                    exit();
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        $stmt->close();
    } else {
        header("location: error.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="formulario" class="flex flex-col gap-4 w-full nuevFormulario" action="<?=$_SERVER['PHP_SELF']?>?id=<?=$id?>" method="post">
<input type="text" name="nombre" placeholder="Nombre" class="inputs-cita" value="<?php echo $nombre; ?>">
        <input type="text" name="apellido" id="apellido" placeholder="Apellidos" class="inputs-cita" value="<?php echo $apellido; ?>">
        <input type="hidden" name="id" value="<?=$id?>">
        <select name="semestre" id="semestre" class="selectec_sem">
            <option value="">semestre</option>
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    if ($i == $semestre) {
                        echo "<option value='$i' selected>$i</option>";
                    } else {
                        echo "<option value='$i'>$i</option>";
                    }
                }
                ?>
        </select>
        <select name="carrera" id="carrera" class="selected_car">
            <option value="">Seleccione una carrera</option>
                <?php
                $carreras = array("ING.INDUSTRIAL", "ING.SISTEMAS", "ING.GESTION", "ING.AMBIENTAL", "ING.ALIMENTARIAS", "ING.AGRONOMIA");
                foreach ($carreras as $carrera_option) {
                    if ($carrera_option == $carrera) {
                        echo "<option value='$carrera_option' selected>$carrera_option</option>";
                    } else {
                        echo "<option value='$carrera_option'>$carrera_option</option>";
                    }
                }
                ?>
        </select>
        <label for="hora">Describe tu horario disponible</label>
        <textarea id="desc_cita" class="inputs-cita" name="desc_cita" placeholder="Describe..."><?php echo $desc_cita; ?></textarea>
        <input type="date" name="fecha" id="fecha" placeholder="Fecha" class="inputs-cita" value="<?php echo $fecha; ?>">
        <input type="time" name="hora" id="hora" placeholder="Hora" class="inputs-cita" value="<?php echo $hora; ?>">
        <button type="submit" class="bton-envio" name="actualizar">Registrar</button>
    </form>
</body>
</html>