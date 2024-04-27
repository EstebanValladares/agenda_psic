<?php
session_start();
/* Estudiantes */
if (!empty($_POST["btningresar"])){
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario =$_POST["usuario"];
        $password =$_POST["password"];
        $sql=$conexion->query(" select * from estudiantes where numero_control='$usuario' and password='$password' ");
        if ($datos=$sql->fetch_object()){
            $_SESSION["id"]=$datos->id_estudiante;
            $_SESSION["nombre"]=$datos->nombre;
            $_SESSION["numero_control"]=$datos->numero_control;
            /* $_SESSION["apellido_paterno"]=$datos->apellido_paterno;
            $_SESSION["apellido_materno"]=$datos->apellido_materno;
            $_SESSION["curp"]=$datos->curp;
            $_SESSION["fecha_nacimiento"]=$datos->fecha_nacimiento;
            $_SESSION["genero"]=$datos->genero;
            $_SESSION["estado_civil"]=$datos->estado_civil;
            $_SESSION["nacionalidad"]=$datos->nacionalidad;
            $_SESSION["telefono"]=$datos->telefono;
            $_SESSION["correo_electronico"]=$datos->correo_electronico;
            $_SESSION["calle_numero"]=$datos->calle_numero;
            $_SESSION["colonia"]=$datos->colonia;
            $_SESSION["estado"]=$datos->estado;
            $_SESSION["municipio"]=$datos->municipio;
            $_SESSION["unidad_medica"]=$datos->unidad_medica;
            $_SESSION["cve_reticula"]=$datos->cve_reticula;
            $_SESSION["carrera"]=$datos->carrera;
            $_SESSION["cve_especialidad"]=$datos->cve_especialidad;
            $_SESSION["especialidad"]=$datos->especialidad;
            $_SESSION["estatus"]=$datos->estatus;
            $_SESSION["semestre"]=$datos->semestre; */
            header("location: ../php/calendarioEstudiantes.php");
        }else{
            echo '<div class="bg-red-200 w-full border-2 border-red-300 rounded-sm text-gray-500 mt-5 p-1">Usuario o contrasena incorrectos</div>';
        }
    }else{
        echo  '<div class="bg-red-200 w-full border-2 border-red-300 rounded-sm text-gray-500 mt-5 p-1" >Campos vacios</div>';
    }
    
}

/* Docentes */
if (!empty($_POST["btningreso"])){
    if (!empty($_POST["tarjeta"]) and !empty($_POST["pass"])) {
        $tarjeta =$_POST["tarjeta"];
        $password =$_POST["pass"];
        $sql=$conexion->query(" select * from docentes where no_tarjeta='$tarjeta' and password='$password' ");
        if ($datos=$sql->fetch_object()){
            $_SESSION["id"]=$datos->id;
            $_SESSION["rfc"]=$datos->rfc;
            $_SESSION["curp"]=$datos->curp;
            $_SESSION["nombre"]=$datos->nombre;
            $_SESSION["nombramiento"]=$datos->nombramiento;
            $_SESSION["correo_electronico"]=$datos->correo_electronico;
            $_SESSION["estatus"]=$datos->estatus;
            $_SESSION["departamento"]=$datos->departamento;
            $_SESSION["academia"]=$datos->academia;
            header("location: ../php/calendarioDocentes.php");
        }else{
            echo '<div class="bg-red-200 w-full border-2 border-red-300 rounded-sm text-gray-500 mt-5 p-1">Usuario o contrasena incorrectos</div>';
        }
    }else{
        echo  '<div class="bg-red-200 w-full border-2 border-red-300 rounded-sm text-gray-500 mt-5 p-1" >Campos vacios</div>';
    }
    
}

?>