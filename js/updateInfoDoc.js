<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    // Obtener los elementos HTML
    const rfcInput = document.getElementById("rfc");
    const curpInput = document.getElementById("curp");
    const nombreInput = document.getElementById("nombre");
    const correoElectronicoInput = document.getElementById("correo_electronico");
    const nombramientoInput = document.getElementById("nombramiento");
    const estatusInput = document.getElementById("estatus");
    const departamentoInput = document.getElementById("departamento");
    const academiaInput = document.getElementById("academia");

// Actualizar el contenido de los elementos con los nuevos valores
rfcInput.value = "<?php echo $_SESSION['rfc']; ?>";
curpInput.value = "<?php echo $_SESSION['curp']; ?>";
nombreInput.value = "<?php echo $_SESSION['nombre']; ?>";
correoElectronicoInput.value = "<?php echo $_SESSION['correo_electronico']; ?>";
nombramientoInput.value = "<?php echo $_SESSION['nombramiento']; ?>";
estatusInput.value = "<?php echo $_SESSION['estatus']; ?>";
departamentoInput.value = "<?php echo $_SESSION['departamento']; ?>";
academiaInput.value = "<?php echo $_SESSION['academia']; ?>";

