const tiempoInactividad = 3 * 60 * 1000; 
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
