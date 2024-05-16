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
include("../controllers/conexion_bd.php");

if (!empty($_POST["btnmodificardatosdoc"])){

    if (!empty($_POST["rfc"]) && !empty($_POST["curp"]) && !empty($_POST["no_tarjeta"]) && !empty($_POST["nombre"]) && !empty($_POST["nombramiento"]) && !empty($_POST["correo_electronico"]) && !empty($_POST["estatus"]) && !empty($_POST["departamento"]) && !empty($_POST["academia"])) {
    
    $userId = $_SESSION["id"];
    $rfc = $_POST['rfc'];
    $curp = $_POST["curp"];        
    $no_tarjeta = $_POST["no_tarjeta"];        
    $nombre = $_POST["nombre"];
    $nombramiento =  $_POST["nombramiento"];
    $correo_electronico = $_POST["correo_electronico"];
    $estatus = $_POST["estatus"];
    $departamento = $_POST["departamento"];
    $academia = $_POST["academia"];

    $consulta = $conexion->prepare("UPDATE docentes SET rfc = ?, curp = ?, no_tarjeta = ?, nombre = ?, nombramiento = ?, correo_electronico = ?, estatus = ?, departamento = ?, academia = ? WHERE id = ?");
    
    $consulta->bind_param("ssssssssss", $rfc, $curp, $no_tarjeta, $nombre, $nombramiento, $correo_electronico, $estatus, $departamento, $academia, $userId);
    
// Ejecutar la consulta...

        $consulta->execute();
        if ($consulta->affected_rows >= 0){
            //actualiza los datos de la sesion
            $_SESSION['rfc'] = $rfc;
            $_SESSION['curp']  =  $curp;
            $_SESSION['no_tarjeta'] = $no_tarjeta;
            $_SESSION['nombre']  = $nombre;
            $_SESSION['nombramiento']  = $nombramiento;
            $_SESSION['correo_electronico']  = $correo_electronico;
            $_SESSION['estatus']  = $estatus;
            $_SESSION['departamento']  =  $departamento;
            $_SESSION['academia']  = $academia;

            //alert de cambios guardados
            echo '<script src="../../js/updateInfoDoc.js"></script>'; 
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

<script src="../../js/updateInfoDoc.js"></script>