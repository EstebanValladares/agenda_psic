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