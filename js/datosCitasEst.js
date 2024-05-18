window.addEventListener('DOMContentLoaded',(event)=>{
    document.getElementById('formulario').addEventListener('submit', function(event) {
        event.preventDefault();
        var formData = new FormData(this); 
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) { 
                if (xhr.status == 200) { 
                    document.getElementById('semestre').value = '';
                    document.getElementById('carrera').value = '';
                    document.querySelector('input[type="date"]').value = '';
                    document.querySelector('input[name="nombre"]').value = '';
                    document.querySelector('input[name="apellido"]').value = '';
                    document.querySelector('input[name="hora"]').value = '';
                }
            }
        };
        xhr.open("POST", "../../php/controllers/controlador_agendar.php", true);
        xhr.send(formData); 
    });
    document.getElementById('formulario').addEventListener('submit', function(){
        setTimeout(function(){
            document.getElementById('formulario').reset();
        }, 10);
        
    });
});

document.getElementById('formulario').addEventListener('submit', function(event) {
    var nombre = document.getElementsByName('nombre')[0].value;
    var apellido = document.getElementsByName('apellido')[0].value;
    var semestre = document.getElementsByName('semestre')[0].value;
    var carrera = document.getElementsByName('carrera')[0].value;
    var desc_cita = document.getElementsByName('desc_cita')[0].value;

    if (!nombre || !apellido || !semestre || !carrera || !desc_cita) {
        event.preventDefault();
        showAlert('Por favor, complete todos los campos.', 'error');
    } else {
        showAlert('Formulario enviado con éxito.', 'success');
    }
    
    function showAlert(message, type) {
        var alertBox = document.createElement('div');
        alertBox.textContent = message;
        alertBox.classList.add(type, 'alert');
        document.body.appendChild(alertBox);
    
        setTimeout(function() {
            alertBox.remove();
        }, 5000);
    }
});