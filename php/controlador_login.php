<?php
session_start();
if (!empty($_POST["btningresar"])){
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario =$_POST["usuario"];
        $password =$_POST["password"];
        $sql=$conexion->query(" select * from estudiantes where numero_control='$usuario' and password='$password' ");
        if ($datos=$sql->fetch_object()){
            $_SESSION["id"]=$datos->id_estudiante;
            $_SESSION["nombre"]=$datos->nombre;
            $_SESSION["apellido"]=$datos->apellido_paterno;
            header("location: ../php/calendarioEstudiantes.php");
        }else{
            echo '<div class="bg-red-200 w-full border-2 border-red-300 rounded-sm text-gray-500 mt-5 p-1">Usuario o contrasena incorrectos</div>';
        }
    }else{
        echo  '<div class="bg-red-200 w-full border-2 border-red-300 rounded-sm text-gray-500 mt-5 p-1" >Campos vacios</div>';
    }
    
}


if (!empty($_POST["btningreso"])){
    if (!empty($_POST["tarjeta"]) and !empty($_POST["pass"])) {
        $tarjeta =$_POST["tarjeta"];
        $password =$_POST["pass"];
        $sql=$conexion->query(" select * from docentes where no_tarjeta='$tarjeta' and password='$password' ");
        if ($datos=$sql->fetch_object()){
            $_SESSION["id"]=$datos->id;
            $_SESSION["rfc"]=$datos->rfc;
            $_SESSION["nombre"]=$datos->nombre;
            header("location: ../php/calendarioDocentes.php");
        }else{
            echo '<div class="bg-red-200 w-full border-2 border-red-300 rounded-sm text-gray-500 mt-5 p-1">Usuario o contrasena incorrectos</div>';
        }
    }else{
        echo  '<div class="bg-red-200 w-full border-2 border-red-300 rounded-sm text-gray-500 mt-5 p-1" >Campos vacios</div>';
    }
    
}

?>