document.addEventListener('DOMContentLoaded',(e)=>{
    const daysContainer = document.querySelector(".days"),
    nextBtn = document.querySelector(".next-btn"),
    prevBtn = document.querySelector(".prev-btn"),
    month = document.querySelector(".month"),
    todayBtn = document.querySelector(".today-btn");
formularioFlotante = document.querySelector('.new_date');
formularioPhp = document.querySelector('.formulario');
cerrarForm = document.querySelector('.cerrar');

const months = [
    "ENERO",
    "FEBRERO",
    "MARZO",
    "ABRIL",
    "MAYO",
    "JUNIO",
    "JULIO",
    "AGOSTO",
    "SEPTIEMBRE",
    "OCTUBRE",
    "NOVIEMBRE",
    "DICIEMBRE",
];

const days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
const date = new Date();

let currentMonth = date.getMonth();
let currentYear = date.getFullYear();

function addDayClickEvents() {
    const dayElements = document.querySelectorAll('.day');
    dayElements.forEach(dayElement => {
        dayElement.addEventListener('click', function() {
            const dayNumber = this.textContent;
            const fullDate = new Date(currentYear, currentMonth, dayNumber);
            console.log(String(fullDate.getDate()).padStart(2, '0') + '/' + String(fullDate.getMonth() + 1).padStart(2, '0') + '/' + fullDate.getFullYear());
            const fechaActual = fullDate.getFullYear() + '-' + String(fullDate.getMonth() + 1).padStart(2, '0') + '-' + String(fullDate.getDate()).padStart(2, '0');
            const inputDate = document.querySelector('.fechas');
            inputDate.value = fechaActual;
        });
    });
}

function renderCalendar() {
    date.setDate(1);
    const firstDay = new Date(currentYear, currentMonth, 1);
    const lastDay = new Date(currentYear, currentMonth + 1, 0);
    const lastDayIndex = lastDay.getDay();
    const lastDayDate = lastDay.getDate();
    const prevLastDay = new Date(currentYear, currentMonth, 0);
    const prevLastDayDate = prevLastDay.getDate();
    const nextDays = 7 - lastDayIndex - 1;
    month.innerHTML = `${months[currentMonth]} ${currentYear}`;
    let days = "";

    for (let x = firstDay.getDay(); x > 0; x--) {
        days += `<div class="day prev">${prevLastDayDate - x + 1}</div>`;
    }

    for (let i = 1; i <= lastDayDate; i++) {
        if (
            i === new Date().getDate() &&
            currentMonth === new Date().getMonth() &&
            currentYear === new Date().getFullYear()
        ) {
            days += `<div class="day today">${i}</div>`;
        } else {
            days += `<div class="day">${i}</div>`;
        }
    }
    for (let j = 1; j <= nextDays; j++) {
        days += `<div class="day next">${j}</div>`;
    }
    hideTodayBtn();
    daysContainer.innerHTML = days;

    daysContainer.innerHTML = days;
    addDayClickEvents(); 
}

renderCalendar();

nextBtn.addEventListener("click", () => {
    currentMonth++;
    if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
    }
    renderCalendar();
});

prevBtn.addEventListener("click", () => {
    currentMonth--;
    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
    }
    renderCalendar();
});

todayBtn.addEventListener("click", () => {
    currentMonth = date.getMonth();
    currentYear = date.getFullYear();
    renderCalendar();
});

function hideTodayBtn() {
    if (
        currentMonth === new Date().getMonth() &&
        currentYear === new Date().getFullYear()
        ) {
            todayBtn.style.display = "none";
        } else {
            todayBtn.style.display = "flex";
        }
    }
    
});
