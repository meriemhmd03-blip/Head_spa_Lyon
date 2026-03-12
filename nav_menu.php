<!-- ========== NAVIGATION PRINCIPALE ========== -->
<link rel="stylesheet" href="css/menu_nav.css">

<nav class="main-nav">
    <div class="nav-container">

        <!-- Logo à gauche -->
        <a href="index.php" class="nav-logo">
            <img src="images/6z9f45s3fdf.webp" alt="Head Spa Lyon By F.">
        </a>

        <!-- Liens de navigation (centre) -->
        <ul class="nav-menu" id="navMenu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="quisuisje.php">Qui suis-je ?</a></li>

            <!-- Menu déroulant Prestations -->
            <li class="menu-deroulant">
                <a href="#" class="derbtn">Prestations</a>
                <ul class="sous-menu">
                    <li><a href="cryo-capillaire.php">Cryothérapie Capillaire</a></li>
                    <li><a href="hair-play.php">Hair Play</a></li>
                    <li><a href="head-spa.php">Head Spa</a></li>
                    <li><a href="kobido.php">Kobido</a></li>
                    <li><a href="massage-intuitif.php">Massage Intuitif</a></li>
                    <li><a href="massage-signature.php">Massage Signature</a></li>
                </ul>
            </li>

            <li><a href="tarifs.php">Tarifs</a></li>
            <li><a href="formations.php">Formations</a></li>
        </ul>

        <!-- Droite : Instagram + bouton réserver + burger -->
        <div class="nav-right">

            <!-- Bouton WhatsApp -->
            <a href="https://wa.me/33772293748?text=Bonjour%20je%20souhaite%20avoir%20des%20informations" target="_blank" class="nav-whatsapp">
                <img src="images/10_29_00.webp" alt="WhatsApp">
                <span>Contactez-nous</span>
            </a>

            <!-- Lien Instagram -->
            <a href="https://www.instagram.com/head_spa_lyon" target="_blank" class="nav-instagram">
                <img src="images/5d2g1g5z.webp" alt="Instagram">
                <span>Suivez-nous</span>
            </a>

            <!-- Bouton réserver -->
            <a href="https://www.planity.com/nd-beauty-concept-69100-villeurbanne" target="_blank" class="nav-btn-reserver">
                Réserver
            </a>

            <!-- Burger (mobile uniquement) -->
            <button class="burger" id="burgerBtn" aria-label="Ouvrir le menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>

    </div>
</nav>

<!-- Overlay menu mobile -->
<div class="nav-mobile-overlay" id="navOverlay">
    <button class="nav-mobile-close" id="navClose">&times;</button>
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="quisuisje.php">Qui suis-je ?</a></li>
        <li><a href="#">Prestations</a></li>
        <li class="sous-menu-mobile">
            <a href="cryo-capillaire.php">— Cryothérapie Capillaire</a>
            <a href="hair-play.php">— Hair Play</a>
            <a href="head-spa.php">— Head Spa</a>
            <a href="kobido.php">— Kobido</a>
            <a href="massage-intuitif.php">— Massage Intuitif</a>
            <a href="massage-signature.php">— Massage Signature</a>
        </li>
        <li><a href="tarifs.php">Tarifs</a></li>
        <li><a href="formations.php">Formations</a></li>
        <li>
            <a href="https://www.planity.com/nd-beauty-concept-69100-villeurbanne"
               target="_blank" style="color: #C97A93;">Réserver un soin</a>
        </li>
    </ul>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {

    var burger  = document.getElementById('burgerBtn');
    var overlay = document.getElementById('navOverlay');
    var close   = document.getElementById('navClose');

    // Ouvre le menu mobile
    burger.addEventListener('click', function() {
        overlay.classList.add('open');
    });

    // Ferme le menu mobile
    close.addEventListener('click', function() {
        overlay.classList.remove('open');
    });

    // Ferme aussi si on clique sur un lien
    var liens = overlay.querySelectorAll('a');
    for (var i = 0; i < liens.length; i++) {
        liens[i].addEventListener('click', function() {
            overlay.classList.remove('open');
        });
    }

});
</script>