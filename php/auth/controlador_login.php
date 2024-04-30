<?php
session_start();
/* Estudiantes */
if (!empty($_POST["btningresar"])){
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql = $conexion->prepare("SELECT * FROM estudiantes WHERE numero_control=? AND password=?");
        if ($sql === false) {
            die("Error al consultar los datos: " . $conexion->error);
        }
        $sql->bind_param("ss", $usuario, $password);
        $sql->execute();
        $resultado = $sql->get_result();       
        if ($resultado->num_rows > 0) {
            $datos = $resultado->fetch_object();
            $_SESSION["id"] = $datos->id_estudiante;
            foreach ($datos as $clave => $valor) {
                $_SESSION[$clave] = $valor;
            }
            header("location: ../php/views/calendarioEstudiantes.php");
            exit(); 
        } else {
            echo '<div class="bg-red-200 w-full border-2 border-red-300 rounded-sm text-gray-500 mt-5 p-1">Usuario o contraseña incorrectos</div>';
        }
        $sql->close();
        $conexion->close();
    } else {
        echo '<div class="bg-red-200 w-full border-2 border-red-300 rounded-sm text-gray-500 mt-5 p-1" >Campos vacíos</div>';
    }
}
?>

<?php
session_start();
/* Docentes */
if (!empty($_POST["btningreso"])){
    if (!empty($_POST["tarjeta"]) and !empty($_POST["pass"])) {
        $tarjeta =$_POST["tarjeta"];
        $password =$_POST["pass"];
        $sql = $conexion->prepare("SELECT * FROM docentes WHERE no_tarjeta=? AND password=?");
        if ($sql === false) {
            die("Error al consultar los datos: " . $conexion->error);
        }
        $sql->bind_param("ss", $tarjeta, $password);
        $sql->execute();
        $resultado = $sql->get_result(); 
        if ($resultado->num_rows > 0) {
            $datos = $resultado->fetch_object();
            $_SESSION["id"]=$datos->id;
            foreach ($datos as $clave => $valor) {
                $_SESSION[$clave] = $valor;
            }
            header("location: ../php/views/calendarioDocentes.php");
            exit(); 
        }else{
            echo '<div class="bg-red-200 w-full border-2 border-red-300 rounded-sm text-gray-500 mt-5 p-1">Usuario o contrasena incorrectos</div>';
        }
        $sql->close();
        $conexion->close();
    }else{
        echo  '<div class="bg-red-200 w-full border-2 border-red-300 rounded-sm text-gray-500 mt-5 p-1" >Campos vacios</div>';
    }
    
}

?> 