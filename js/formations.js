document.addEventListener('DOMContentLoaded', function () {

    // ===== HAMBURGER =====
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.querySelector('.nav-menu');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function () {
            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
    }

    // ===== FAQ =====
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(function (question) {
        question.addEventListener('click', function () {
            const item = question.closest('.faq-item');
            if (!item) return;

            item.classList.toggle('active');
        });
    });

    // ===== MODULES =====
    const moduleToggles = document.querySelectorAll('.module-toggle');

    moduleToggles.forEach(function (toggle) {
        toggle.addEventListener('click', function () {
            const item = toggle.closest('.module-item');
            if (!item) return;

            item.classList.toggle('active');
        });
    });

// ====== CARROUSEL ÉLÈVES CERTIFIÉS ======
const slider = document.querySelector('.eleves-slider');
const prevBtn = document.querySelector('.slider-prev');
const nextBtn = document.querySelector('.slider-next');

if (slider && prevBtn && nextBtn) {

    const card = document.querySelector('.eleve-card');
    const gap = 25;
    const cardWidth = card.offsetWidth + gap;

    nextBtn.addEventListener('click', () => {
        slider.scrollBy({
            left: cardWidth,
            behavior: 'smooth'
        });
    });

    prevBtn.addEventListener('click', () => {
        slider.scrollBy({
            left: -cardWidth,
            behavior: 'smooth'
        });
    });
}


document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');
    
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });
    
    // Fermer le menu si on clique sur un lien
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
    });
    
    // Fermer au redimensionnement
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768) {
            navMenu.classList.remove('active');
            hamburger.classList.remove('active');
        }
    });
});

});
