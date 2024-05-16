<?php
/* session_start();
if (empty($_SESSION["id"])){
    header("location: index.php");
} */
if (session_status() == PHP_SESSION_NONE) {
    session_start();

    if (empty($_SESSION["id"])){
        header("location: index.php");
      }
  }
?>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("../controllers/conexion_bd.php");

if (!empty($_POST["btnmodificardatos"])){

    if (!empty($_POST["nombre"]) && !empty($_POST["apellido_paterno"]) && !empty($_POST["apellido_materno"]) && !empty($_POST["curp"]) && !empty($_POST["fecha_nacimiento"]) && !empty($_POST["genero"]) && !empty($_POST["estado_civil"]) && !empty($_POST["nacionalidad"]) && !empty($_POST["correo_electronico"]) && !empty($_POST["numero_control"]) && !empty($_POST["semestre"]) && !empty($_POST["carrera"]) && !empty($_POST["especialidad"]) && !empty($_POST["calle_numero"]) && !empty($_POST["colonia"]) && !empty($_POST["municipio"]) && !empty($_POST["estado"]) && !empty($_POST["codigo_postal"])) {
    
    $userId = $_SESSION["id"];           
    $nombre = $_POST["nombre"];
    $apellido_paterno = $_POST["apellido_paterno"];
    $apellido_materno = $_POST["apellido_materno"];
    $curp = $_POST["curp"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $genero = $_POST["genero"];
    $estado_civil = $_POST["estado_civil"];
    $nacionalidad = $_POST["nacionalidad"];
    $correo_electronico = $_POST["correo_electronico"];
    $numero_control = $_POST["numero_control"];
    $semestre = $_POST["semestre"];
    $carrera = $_POST["carrera"];
    $especialidad = $_POST["especialidad"];
    $calle_numero = $_POST["calle_numero"];
    $colonia = $_POST["colonia"];
    $municipio = $_POST["municipio"];
    $estado = $_POST["estado"];
    $codigo_postal = $_POST["codigo_postal"];

    $escapedColonia = mysqli_real_escape_string($conexion, $colonia); // Escapa el valor de colonia

    $consulta = $conexion->prepare("UPDATE estudiantes SET numero_control = ?, nombre = ?, apellido_paterno = ?, apellido_materno = ?, curp = ?, fecha_nacimiento = ?, genero = ?, estado_civil = ?, nacionalidad = ?, correo_electronico = ?, calle_numero = ?, colonia = ?, estado = ?, municipio = ?, codigo_postal = ?, carrera = ?, especialidad = ?, semestre = ? WHERE id_estudiante = ?");
    
    $consulta->bind_param("ssssssssssssssssssi", $numero_control, $nombre, $apellido_paterno, $apellido_materno, $curp, $fecha_nacimiento, $genero, $estado_civil, $nacionalidad, $correo_electronico, $calle_numero, $escapedColonia, $estado, $municipio, $codigo_postal, $carrera, $especialidad, $semestre, $userId);
    
        $consulta->execute();
        if ($consulta->affected_rows >= 0){
            //actualiza los datos de la sesion
            $_SESSION['nombre'] = $nombre;
            $_SESSION['apellido_paterno']  =  $apellido_paterno;
            $_SESSION['apellido_materno']  = $apellido_materno;
            $_SESSION['curp']  = $curp;
            $_SESSION['fecha_nacimiento']  = $fecha_nacimiento;
            $_SESSION['genero']  = $genero;
            $_SESSION['estado_civil']  =  $estado_civil;
            $_SESSION['nacionalidad']  = $nacionalidad;
            $_SESSION['correo_electronico']  = $correo_electronico;
            $_SESSION['numero_control']  = $numero_control;
            $_SESSION['semestre']  = $semestre;
            $_SESSION['carrera']  = $carrera;
            $_SESSION['especialidad']  = $especialidad;
            $_SESSION['calle_numero']  = $calle_numero;
            $_SESSION['colonia'] = $escapedColonia;
            $_SESSION['municipio']  = $municipio;
            $_SESSION['estado']  = $estado;
            $_SESSION['codigo_postal'] = $codigo_postal;

            //alert de cambios guardados
            echo '<script src="../../js/updateInfoEst.js"></script>'; 
            echo '<script>
            alert("Los datos se han actualizado correctamente.");       
            setTimeout(function() {
                window.location.href = window.location.pathname;
            }, 100);
            </script>';
         }  else {
            echo '<div class="datos-incorrectos" >Error al guardar los cambios</div>' . $consulta->error;
        }  
    } else {
        echo '<div class="datos-incorrectos" >Completa todos los campos</div>';
    }
}
$conexion->close();
?>

<script src="../../js/updateInfoEst.js"></script>