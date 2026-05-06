window.addEventListener("scroll", function() {
    const header = document.querySelector(".header");
    header.classList.toggle("scrolled", window.scrollY > 50);
});

const toggle = document.getElementById("menu-toggle");
const nav = document.getElementById("nav");

toggle.addEventListener("click", () => {
    nav.classList.toggle("active");
    toggle.classList.toggle("active"); // 👈 para animar icono
});

const overlay = document.getElementById("overlay");

toggle.addEventListener("click", () => {
    overlay.classList.toggle("active");
});

overlay.addEventListener("click", () => {
    nav.classList.remove("active");
    toggle.classList.remove("active");
    overlay.classList.remove("active");
});

document.querySelectorAll(".nav a").forEach(link => {
    link.addEventListener("click", () => {
        nav.classList.remove("active");
        toggle.classList.remove("active");
        overlay.classList.remove("active");
    });
});






const slides = document.querySelectorAll(".slide");
let current = 0;

if (slides.length === 0) {
    // 🔥 no estamos en el home → no ejecutar nada
 
}else{
    showSlide(current);
    setInterval(() => {
        current = (current + 1) % slides.length;
        showSlide(current);
    }, 5000);
}
function showSlide(index) {
    slides.forEach(slide => slide.classList.remove("active"));
    slides[index].classList.add("active");
}





console.log("JS cargado");
const searchToggle = document.getElementById("search-toggle");
const searchForm = document.querySelector(".search-form");

searchToggle.addEventListener("click", () => {
    searchForm.classList.toggle("active");
});

document.addEventListener("click", (e) => {
    if (!e.target.closest(".search-container")) {
        searchForm.classList.remove("active");
    }
});