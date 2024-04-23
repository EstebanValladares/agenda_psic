document.getElementById('semestre').addEventListener('change', function() {
    document.getElementById('semestre').value = this.options[this.selectedIndex].text;
});
document.getElementById('carrera').addEventListener('change', function() {
    document.getElementById('carrera').value = this.options[this.selectedIndex].text;
});

// Script AJAX para enviar el formulario
document.getElementById('formulario').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe normalmente
    var formData = new FormData(this); // Obtiene los datos del formulario
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) { // Cuando la solicitud está completa
            if (xhr.status == 200) { // Si la solicitud fue exitosa
                document.getElementById('mensaje').innerHTML = xhr.responseText; // Muestra la respuesta del controlador
            } else {
                document.getElementById('mensaje').innerHTML = "Error al procesar la solicitud."; // Muestra un mensaje de error genérico
            }
        }
    };
    xhr.open("POST", "controlador_agendar.php", true); // Abre una solicitud POST al controlador
    xhr.send(formData); // Envía los datos del formulario al controlador
});