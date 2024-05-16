<?php
/* session_start();
if (empty($_SESSION["id"])){
    header("location: index.php");
 */
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        if (empty($_SESSION["id"])){
            header("location: index.php");
          }
      }
?>
<?php
include("../controllers/conexion_bd.php");

if (!empty($_POST["btnchangepass"])){

    if(!empty($_POST["passactual"]) && !empty($_POST["passnew"]) && !empty($_POST["passnewconfirmation"])){

        $userId = $_SESSION["id"];
        $pass_actual = $_POST["passactual"];
        $pass_new = $_POST["passnew"];
        $pass_new_confirmation = $_POST["passnewconfirmation"];

        if($pass_new === $pass_new_confirmation){
            $consulta = $conexion->prepare("UPDATE docentes SET password = ? WHERE id = ?");

            $consulta->bind_param("ss", $pass_new, $userId);
            $consulta->execute();
            if ($consulta->affected_rows > 0 ){
                echo '<div class="datos-correctos" >Se cambio la contrasena</div>';
            } else {
                echo '<div class="datos-incorrectos" >Error al guardar los cambios</div>' . $consulta->error;
            }
        } else {
            echo '<div class="datos-incorrectos" >Las contrasenas no coinciden</div>';
        }
    } else {
        echo '<div class="datos-incorrectos" >Completa todos los campos</div>';
    }
}