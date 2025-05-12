document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.getElementById("menu-toggle");
    const menuOverlay = document.getElementById("menu-overlay");
    const menuClose = document.getElementById("menu-close");
    const header = document.querySelector("header");

    // Ouvrir le menu
    menuToggle.addEventListener("click", function() {
        menuOverlay.classList.toggle("open");
        menuToggle.classList.toggle("open");
        header.classList.add("sticky");

    });

    // Fermer le menu
    menuClose.addEventListener("click", function() {
        menuOverlay.classList.remove("open");
        menuToggle.classList.remove("open");
        header.classList.remove("sticky");

    });

    // Fermer le menu quand un lien est cliqué
    document.querySelectorAll(".menu-overlay nav a").forEach(link => {
        link.addEventListener("click", function() {
            menuOverlay.classList.remove("open");
            menuToggle.classList.remove("open");
            header.classList.remove("sticky");

        });
    });
});


/** header sticky script */
document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector("header");

    window.addEventListener("scroll", function() {
        if (window.scrollY > 200) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    });
});

// Carousel 
const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.next');
const prevButton = document.querySelector('.prev');
let currentIndex = 0;

// Fonction pour mettre à jour le carousel
function moveToSlide(index) {
    if (index < 0) index = slides.length - 1;
    if (index >= slides.length) index = 0;

    const slideWidth = slides[0].getBoundingClientRect().width;
    track.style.transform = `translateX(-${index * slideWidth}px)`;
    currentIndex = index;
}

// Bouton suivant
nextButton.addEventListener('click', () => {
    moveToSlide(currentIndex + 1);
});

// Bouton précédent
prevButton.addEventListener('click', () => {
    moveToSlide(currentIndex - 1);
});

// Défilement automatique
// setInterval(() => {
//     moveToSlide(currentIndex + 1);
// }, 4000);

// Ajuster la taille du carousel lors du redimensionnement
window.addEventListener('resize', () => {
    moveToSlide(currentIndex);
});