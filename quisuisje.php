<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fadoua | Praticienne Head Spa à Villeurbanne (Lyon)">
    <title>Fadoua | Praticienne Head Spa à Villeurbanne (Lyon)</title>

    <!-- Polices identiques à tout le site -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/webp" href="images/6z9f45s3fdf.webp">
    <link rel="stylesheet" href="css/quisuisje.css">
</head>
<body>
<!-- ========== NAVIGATION ========== -->
<?php include "nav_menu.php"; ?>
<!-- ========== HERO ========== -->
<header class="hero">
    <div class="hero-content">
        <span class="hero-eyebrow">Head Spa Lyon By F. — Villeurbanne</span>
        <h1>Derrière chaque soin, une histoire,<br><em>la mienne</em></h1>
        <p class="hero-sub">Head Spa japonais · Rituel de soin · Présence</p>
        <a href="https://www.planity.com/nd-beauty-concept-69100-villeurbanne" class="btn" target="_blank" rel="noopener">Réservez un soin</a>
    </div>
</header>
<!-- ========== PRÉSENTATION ========== -->
<section class="presentation fade">
    <span class="section-label">À propos</span>
    <blockquote>
        Je m'appelle Fadoua.<br>
        Je prends soin des femmes,<br>
        avec le cœur et les mains.
    </blockquote>
    <div class="divider"></div>
</section>
<!-- ========== HISTOIRE ========== -->
<section class="section-duo fade">
    <div class="section-text">
        <span class="section-label">Mon histoire</span>
        <h2>Un chemin vers<br>l'essentiel</h2>
        <p>Pendant 15 ans, j'ai travaillé dans le management.</p>
        <p>Puis, après le covid, quelque chose s'est vidé.</p>
        <p>J'ai ressenti un besoin profond de ralentir.</p>
        <p>Je n'ai pas eu l'opportunité d'enfanter. Alors j'ai créé un lieu.</p>
    </div>
    <div class="section-image">
        <img loading="lazy" src="images/23fs2fdg2z.webp" alt="L'espace de soin">
    </div>
</section>
<!-- ========== FORMATIONS ========== -->
<section class="section-duo inverse fade">
    <div class="section-text">
        <span class="section-label">Ma formation</span>
        <h2>Des techniques apprises<br>avec soin</h2>
        <p>Le Head Spa, je l'ai appris à Paris, dans une formation individuelle, intime et à l'écoute du geste et de l'eau.</p>
        <p>Le Kobido, je l'ai découvert à Lyon, dans la précision et la tradition.</p>
        <p>Le massage intuitif, en cercle de femmes, guidées par Océane Chavanel.</p>
    </div>
    <div class="section-image">
        <img loading="lazy" src="images/3s2f3d65dg4.webp" alt="Certifications">
    </div>
</section>
<!-- ========== AMBIANCE ========== -->
<div class="section-ambiance fade">
    <h2>Un espace pour se déposer</h2>
</div>
<!-- ========== RITUELS ========== -->
<section class="section-rituels fade">
    <div class="section-rituels-inner">
        <div class="section-rituels-header">
            <span class="section-label">Les soins</span>
            <h2>Chaque soin est un rituel</h2>
        </div>
        <div class="rituels-grid">
            <!-- Photo à gauche -->
            <div class="rituels-photo">
                <img loading="lazy" src="images/20260306_160842.webp" alt="Head Spa japonais">
            </div>
            <!-- Cartes rituels à droite -->
            <div class="rituel-card">
                <h3>Head Spa japonais</h3>
                <p>Un soin du cuir chevelu à l'eau. Purifiant, enveloppant, profondément libérateur.</p>
            </div>
            <div class="rituel-card">
                <h3>Kobido</h3>
                <p>Massage du visage japonais. Lissage des traits, circulation de l'énergie.</p>
            </div>

            <div class="rituel-card">
                <h3>Massage intuitif</h3>
                <p>Unique à chaque séance. Guidé par l'écoute du corps et des émotions.</p>
            </div>
        </div>
    </div>
</section>
<!-- ========== DIFFÉRENCE ========== -->
<section class="section-duo fade">
    <div class="section-image">
        <img loading="lazy" src="images/2154dgf45dg5.webp" alt="Écoute et présence">
    </div>
    <div class="section-text">
        <span class="section-label">Ma promesse</span>
        <h2>Je n'offre pas<br>que des soins</h2>
        <p>Je n'offre pas des soins. J'accueille.</p>
        <p>J'écoute. J'enveloppe.</p>
        <p>Ici, vous pouvez vous déposer. Sans masque. Sans attente.</p>
        <p>Juste être.</p>
    </div>
</section>
<!-- ========== FOOTER ========== -->
<footer>
    <div class="footer-brand">Head Spa Lyon By F.</div>
    <div class="footer-divider"></div>
    <div class="footer-info">
        <p><i class="fa-solid fa-location-dot" aria-label ="Voir la localisation"></i>34 place des Maisons Neuves, 69100 Villeurbanne</p>
    </div>
    <p class="footer-copy">&copy; 2026 Head Spa Lyon By F. — Tous droits réservés.</p>
</footer>
<!-- ========== WHATSAPP FLOAT ========== -->
<a href="https://wa.me/33772293748?text=Bonjour%20je%20souhaite%20avoir%20des%20informations"
   class="whatsapp-float"
   target="_blank"
   rel="noopener"
   aria-label="Contacter sur WhatsApp">
    <img loading="lazy" src="images/10_29_00.webp" alt="Contacter sur WhatsApp">
    <span class="whatsapp-text">
        Écrivez-nous sur WhatsApp
    </span>
</a>
<!-- ========== SCRIPT SCROLL REVEAL ========== -->
<script>
var elements = document.querySelectorAll('.fade');
var observer = new IntersectionObserver(function(entries) {
    for (var i = 0; i < entries.length; i++) {
        if (entries[i].isIntersecting) {
            entries[i].target.classList.add('visible');
        }
    }
}, { threshold: 0.12 });
for (var i = 0; i < elements.length; i++) {
    observer.observe(elements[i]);
}
</script>
</body>
</html>