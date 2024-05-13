<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    // Obtener los elementos HTML
    const nombreInput = document.getElementById("nombre");
    const apellidoPaternoInput = document.getElementById("apellido_paterno");
    const apellidoMaternoInput = document.getElementById("apellido_materno");
    const curpInput = document.getElementById("curp");
    const fechaNacimientoInput = document.getElementById("fecha_nacimiento");
    const generoInput = document.getElementById("genero");
    const estadoCivilInput = document.getElementById("estado_civil");
    const nacionalidadInput = document.getElementById("nacionalidad");
    const correoElectronicoInput = document.getElementById("correo_electronico");
    const numeroControlInput = document.getElementById("numero_control");
    const semestreInput = document.getElementById("semestre");
    const carreraInput = document.getElementById("carrera");
    const especialidadInput = document.getElementById("especialidad");
    const calleNumeroInput = document.getElementById("calle_numero");
    const coloniaInput = document.getElementById("colonia");
    const municipioInput = document.getElementById("municipio");
    const estadoInput = document.getElementById("estado");
    const codigoPostalInput = document.getElementById("codigo_postal");


// Actualizar el contenido de los elementos con los nuevos valores
nombreInput.value = "<?php echo $_SESSION['nombre']; ?>";
apellidoPaternoInput.value = "<?php echo $_SESSION['apellido_paterno']; ?>";
apellidoMaternoInput.value = "<?php echo $_SESSION['apellido_materno']; ?>";
curpInput.value = "<?php echo $_SESSION['curp']; ?>";
fechaNacimientoInput.value = "<?php echo $_SESSION['fecha_nacimiento']; ?>";
generoInput.value = "<?php echo $_SESSION['genero']; ?>";
estadoCivilInput.value = "<?php echo $_SESSION['estado_civil']; ?>";
nacionalidadInput.value = "<?php echo $_SESSION['nacionalidad']; ?>";
correoElectronicoInput.value = "<?php echo $_SESSION['correo_electronico']; ?>";
numeroControlInput.value = "<?php echo $_SESSION['numero_control']; ?>";
semestreInput.value = "<?php echo $_SESSION['semestre']; ?>";
carreraInput.value = "<?php echo $_SESSION['carrera']; ?>";
especialidadInput.value = "<?php echo $_SESSION['especialidad']; ?>";
calleNumeroInput.value = "<?php echo $_SESSION['calle_numero']; ?>";
municipioInput.value = "<?php echo $_SESSION['municipio']; ?>";
estadoInput.value = "<?php echo $_SESSION['estado']; ?>";
codigoPostalInput.value = "<?php echo $_SESSION['codigo_postal']; ?>";


/* $(document).ready(function() {
  // Recupera las variables de sesión actualizadas del servidor usando AJAX
  $.ajax({
    url: "../php/controllers/actualizarDatosSesion.php",
    method: "GET",
    dataType: "json",
    success: function(data) {
      $("#nombre").val(data.nombre);
      $("#apellido_paterno").val(data.apellido_paterno);
      $("#apellido_materno").val(data.apellido_paterno);
      $("#curp").val(data.curp);
      $("#fecha_nacimiento").val(data.fecha_nacimiento);
      $("#genero").val(data.genero);
      $("#estado_civil").val(data.estado_civil);
      $("#nacionalidad").val(data.nacionalidad);
      $("#correo_electronico").val(data.correo_electronico);
      $("#numero_control").val(data.numero_control);
      $("#semestre").val(data.semestre);
      $("#carrera").val(data.carrera);
      $("#especialidad").val(data.especialidad);
      $("#calle_numero").val(data.calle_numero);
      $("#colonia").val(data.colonia);
      $("#municipio").val(data.municipio);
      $("#estado").val(data.estado);
      $("#codigo_postal").val(data.codigo_postal);

    },
    error: function(xhr, status, error) {
      console.error("Error al recuperar los datos actualizados:", error);
    }
  });
}); */