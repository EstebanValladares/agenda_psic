const tiempoInactividad = 3 * 60 * 10000; 
let tiempoInactivo;

function redireccionar() {
    const url = '/php/index.php';
    console.log("Redirigiendo a: ", url);
    window.location.href = url;
}

function reiniciarTemporizador() {
    clearTimeout(tiempoInactivo);
    tiempoInactivo = setTimeout(redireccionar, tiempoInactividad);
}
tiempoInactivo = setTimeout(redireccionar, tiempoInactividad);
document.addEventListener('mousemove', reiniciarTemporizador);
document.addEventListener('keypress', reiniciarTemporizador);


var originalData = {
    fecha: fecha,
    hora: hora
};

// Cuando se hace clic en el botón "Guardar cambios"
document.getElementById('editForm').addEventListener('submit', function(event) {
    // Comprueba si los datos han cambiado
    if (
        originalData.fecha === document.getElementById('editFecha').value &&
        originalData.hora === document.getElementById('editHora').value
    ) {
        // Si los datos no han cambiado, evita que se envíe el formulario
        event.preventDefault();
    }
});
// Cuando se hace clic en el botón "Editar"
function editRecord(id, nombre, apellido, carrera, semestre, desc_cita, fecha, hora) {
    // Llena el formulario con los datos existentes
    document.getElementById('editId').value = id;
    document.getElementById('editNombre').value = nombre;
    document.getElementById('editApellido').value = apellido;
    document.getElementById('editCarrera').value = carrera;
    document.getElementById('editSemestre').value = semestre;
    document.getElementById('editDescCita').value = desc_cita;
    document.getElementById('editFecha').value = fecha;
    document.getElementById('editHora').value = hora;

    // Almacena los datos originales del formulario
    var originalData = {
        id: id,
        nombre: nombre,
        apellido: apellido,
        carrera: carrera,
        semestre: semestre,
        desc_cita: desc_cita,
        fecha: fecha,
        hora: hora
    };

    // Cuando se hace clic en el botón "Guardar cambios"
    document.getElementById('editForm').addEventListener('submit', function(event) {
        // Comprueba si los datos han cambiado
        if (
            originalData.id === document.getElementById('editId').value &&
            originalData.nombre === document.getElementById('editNombre').value &&
            originalData.apellido === document.getElementById('editApellido').value &&
            originalData.carrera === document.getElementById('editCarrera').value &&
            originalData.semestre === document.getElementById('editSemestre').value &&
            originalData.desc_cita === document.getElementById('editDescCita').value &&
            originalData.fecha === document.getElementById('editFecha').value &&
            originalData.hora === document.getElementById('editHora').value
        ) {
            // Si los datos no han cambiado, evita que se envíe el formulario
            event.preventDefault();
        }
    });

    // Abre el modal
    document.getElementById('editModal').style.display = "block";
}