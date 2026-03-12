<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qui suis-je | Praticienne Head Spa à Lyon | Head Spa Lyon By F.</title>

    <!-- Polices identiques à tout le site -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/webp" href="images/6z9f45s3fdf.webp">

<style>

/* ==================== RESET & VARIABLES ==================== */
*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

:root {
    --primary:       #C97A93;
    --primary-dark:  #b5607c;
    --accent:        #5a3a2e;
    --text-dark:     #2a2a2a;
    --text-mid:      #555;
    --bg:            #FAF7F2;
    --bg-alt:        #f3ede5;
    --border:        rgba(90,58,46,0.12);

    --font-display: 'Cormorant Garamond', serif;
    --font-body:    'Raleway', sans-serif;

    --nav-height: 80px;
}

html { scroll-behavior: smooth; }

body {
    font-family: var(--font-body);
    background: var(--bg);
    color: var(--text-dark);
    line-height: 1.7;
}

a { text-decoration: none; color: inherit; }

/* Décalage pour la nav fixe (pas un hero plein écran ici) */
body { padding-top: var(--nav-height); }

/* ==================== HERO ==================== */
.hero {
    height: 90vh;
    min-height: 560px;
    background-image: url('images/5ds4fg4d4eq.webp');
    background-size: cover;
    background-position: 90% 10%;
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0,0,0,0.45) 0%, rgba(46,27,1,0.2) 100%);
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
    margin-left: 80px;
    max-width: 560px;
    animation: fadeInUp 1.2s ease forwards;
}

.hero-eyebrow {
    display: block;
    font-family: var(--font-body);
    font-size: 10px;
    font-weight: 400;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.65);
    margin-bottom: 18px;
}

.hero h1 {
    font-family: var(--font-display);
    font-weight: 300;
    font-size: clamp(2.4rem, 5vw, 3.8rem);
    line-height: 1.2;
    color: #fff;
    margin-bottom: 16px;
    text-shadow: 0 4px 20px rgba(0,0,0,0.3);
}

.hero h1 em {
    font-style: italic;
    font-weight: 300;
    color: rgba(255,255,255,0.82);
}

.hero-sub {
    font-family: var(--font-body);
    font-size: 0.9rem;
    font-weight: 300;
    letter-spacing: 0.12em;
    color: rgba(255,255,255,0.75);
    margin-bottom: 34px;
}

.btn {
    display: inline-block;
    font-family: var(--font-body);
    font-size: 11px;
    font-weight: 400;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: #fff;
    background: var(--primary);
    padding: 14px 36px;
    border-radius: 30px;
    transition: background 0.3s, transform 0.3s, box-shadow 0.3s;
    box-shadow: 0 8px 24px rgba(201,122,147,0.4);
}

.btn:hover {
    background: var(--primary-dark);
    transform: translateY(-3px);
    box-shadow: 0 14px 30px rgba(201,122,147,0.5);
}

/* ==================== SECTION LABEL ==================== */
.section-label {
    display: block;
    font-family: var(--font-body);
    font-size: 10px;
    font-weight: 400;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    color: var(--primary);
    margin-bottom: 18px;
}

/* ==================== PRÉSENTATION ==================== */
.presentation {
    padding: 90px 40px;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.presentation blockquote {
    font-family: var(--font-display);
    font-style: italic;
    font-weight: 300;
    font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    color: var(--accent);
    line-height: 1.5;
    letter-spacing: 0.01em;
}

.divider {
    width: 50px;
    height: 1px;
    background: var(--primary);
    margin: 36px auto;
}

/* ==================== SECTIONS TEXTE + IMAGE ==================== */
.section-duo {
    padding: 70px 60px;
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 70px;
    align-items: center;
}

/* Version inversée (image à gauche) */
.section-duo.inverse {
    direction: rtl; /* inverse l'ordre */
}
.section-duo.inverse > * {
    direction: ltr; /* remet le texte dans le bon sens */
}

.section-text h2 {
    font-family: var(--font-display);
    font-weight: 400;
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    color: var(--accent);
    margin-bottom: 28px;
    letter-spacing: 0.01em;
    line-height: 1.3;
}

.section-text p {
    font-family: var(--font-body);
    font-size: 0.97rem;
    font-weight: 300;
    color: var(--text-mid);
    line-height: 1.9;
    margin-bottom: 16px;
    text-shadow: none;
}

.section-text p:last-child { margin-bottom: 0; }

/* Image */
.section-image img {
    width: 100%;
    border-radius: 14px;
    object-fit: cover;
    object-position: center 25%;
    aspect-ratio: 3/3;
    display: block;
    transition: transform 0.6s ease;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
}

.section-image img:hover { transform: scale(1.02); }

/* ==================== SECTION PLEIN-ÉCRAN (espace) ==================== */
.section-ambiance {
    height: 60vh;
    min-height: 380px;
    background:
        linear-gradient(rgba(0,0,0,0.38), rgba(0,0,0,0.38)),
        url("images/4d12f3n4er.webp") center / cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 0 40px;
}

.section-ambiance h2 {
    font-family: var(--font-display);
    font-weight: 300;
    font-style: italic;
    font-size: clamp(1.8rem, 4vw, 3rem);
    color: #fff;
    text-shadow: 0 4px 20px rgba(0,0,0,0.3);
    letter-spacing: 0.02em;
}

/* ==================== SECTION RITUELS ==================== */
.section-rituels {
    background: var(--bg-alt);
    padding: 90px 60px;
}

.section-rituels-inner {
    max-width: 1100px;
    margin: 0 auto;
}

.section-rituels-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-rituels-header h2 {
    font-family: var(--font-display);
    font-style: italic;
    font-weight: 300;
    font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    color: var(--accent);
}

.rituels-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: start;
}

/* Photo à gauche qui s'étend sur 2 lignes */
.rituels-photo {
    grid-row: 1 / span 3;
}

.rituels-photo img {
    width: 100%;
    max-height :600px;
    border-radius: 14px;
    object-fit: cover;
    object-position : 80% 30%;
    aspect-ratio: auto;
    display: block;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    transition: transform 0.5s ease;
}

.rituels-photo img:hover { transform: scale(1.02); }

/* Carte rituel */
.rituel-card {
    padding-left: 24px;
    border-left: 2px solid var(--primary-light, #f0d0db);
    position: relative;
}

.rituel-card::before {
    content: '';
    position: absolute;
    left: -4px; top: 4px;
    width: 8px; height: 8px;
    border-radius: 50%;
    background: var(--primary);
}

.rituel-card h3 {
    font-family: var(--font-display);
    font-weight: 400;
    font-size: 1.5rem;
    color: var(--accent);
    margin-bottom: 10px;
    letter-spacing: 0.01em;
}

.rituel-card p {
    font-family: var(--font-body);
    font-size: 0.92rem;
    font-weight: 300;
    color: var(--text-mid);
    line-height: 1.8;
}

/* ==================== ANIMATIONS ==================== */

/* Animation respiration WhatsApp */
@keyframes whatsapp-breath {

0% {
    transform: scale(1);
}

50% {
    transform: scale(1.06);
}

100% {
    transform: scale(1);
}

}


@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0); }
}

.fade {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.fade.visible {
    opacity: 1;
    transform: translateY(0);
}

/*lien whatsapp*/

.nav-whatsapp {
    display: flex;
    align-items: center;
   

    font-family: 'Raleway', sans-serif;
    font-size: 10px;
    font-weight: 400;
    letter-spacing: 0.12em;
    text-transform: uppercase;

    color: #555;
    transition: color 0.3s;
}

.nav-whatsapp img {
    height: 35px;
    width: auto;
    display: block;
}

.nav-whatsapp:hover {
    color: var(--primary);
}
/* Lien Instagram */
.nav-instagram {
    display: flex;
    align-items: center;
    gap: 6px;
    font-family: 'Raleway', sans-serif;
    font-size: 10px;
    font-weight: 400;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #555;
    transition: color 0.3s;
}

.nav-instagram img {
    height: 20px;
    width: auto;
    display: block;
}

.nav-instagram:hover { color: var(--primary); }
/* ==================== FOOTER ==================== */
footer {
    background: var(--bg);
    border-top: 1px solid var(--border);
    padding: 50px 40px 36px;
    text-align: center;
}

.footer-brand {
    font-family: var(--font-display);
    font-style: italic;
    font-size: 1.6rem;
    color: var(--accent);
    margin-bottom: 20px;
}

.footer-divider {
    width: 36px; height: 1px;
    background: var(--primary);
    margin: 0 auto 20px;
}

.footer-info {
    display: flex;
    flex-direction: column;
    gap: 8px;
    margin-bottom: 28px;
}

.footer-info p {
    font-family: var(--font-body);
    font-size: 0.85rem;
    font-weight: 300;
    color: var(--text-mid);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    text-shadow: none;
    margin-bottom: 0;
}

.footer-info i { color: var(--primary); width: 14px; }
.footer-info a { color: var(--text-mid); transition: color 0.3s; }
.footer-info a:hover { color: var(--primary); }


.footer-copy {
    font-family: var(--font-body);
    font-size: 0.75rem;
    font-weight: 300;
    letter-spacing: 0.08em;
    color: rgba(85,85,85,0.5);
}

/* ==================== WHATSAPP FLOAT ==================== */

.whatsapp-float{
    position: fixed;
    bottom: 20px;
    right: 20px;

    display: flex;
    align-items: center;
    gap: 10px;

    background: #FAF7F2;
    color: #156934;

    padding: 7px 15px;
    border-radius: 40px;

    font-family: 'Raleway', sans-serif;
    font-size: 12px;
    font-weight: 400;

    box-shadow: 0 10px 28px rgba(0,0,0,0.18);

    z-index: 999;

    animation: whatsapp-breath 3s ease-in-out infinite;

    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.whatsapp-float img{
    width: 40px;
    height: 40px;
}

.whatsapp-text{
    white-space: nowrap;
}

.whatsapp-float:hover{
    transform: translateY(-3px);
    box-shadow: 0 14px 34px rgba(0,0,0,0.25);
}

@media (max-width:768px){

.whatsapp-text{
    display:none;
}

.whatsapp-float{
    width:58px;
    height:58px;
    padding:0;
    justify-content:center;
    border-radius:50%;
}

.whatsapp-float img{
    width:40px;
}

}

/* ==================== RESPONSIVE ==================== */
@media (max-width: 1024px) {
    .section-duo { padding: 60px 40px; gap: 50px; }
    .section-rituels { padding: 70px 40px; }
}

@media (max-width: 768px) {
    .hero-content { margin-left: 36px; margin-right: 36px; }

    .presentation { padding: 70px 24px; }

    .section-duo {
        grid-template-columns: 1fr;
        gap: 32px;
        padding: 60px 24px;
        direction: ltr; /* annule l'inversion sur mobile */
    }
    .section-duo.inverse > * { direction: ltr; }

    .section-rituels { padding: 60px 24px; }

    .rituels-grid {
        grid-template-columns: 1fr;
        gap: 36px;
    }

    .rituels-photo {
        grid-row: auto;
    }

    .rituels-photo img { aspect-ratio: 16/9; }

    footer { padding: 40px 24px 28px; }
}

@media (max-width: 480px) {
    .hero { height: 80vh; }
    .hero-content { margin-left: 20px; margin-right: 20px; text-align: center; }

    .section-ambiance h2 { font-size: 1.6rem; }
}

</style>
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
        <a href="https://www.planity.com/nd-beauty-concept-69100-villeurbanne" class="btn" target="_blank">Réservez un soin</a>
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
        <img src="images/23fs2fdg2z.webp" alt="L'espace de soin">
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
        <img src="images/3s2f3d65dg4.webp" alt="Certifications">
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
                <img src="images/20260306_160842.webp" alt="Head Spa japonais">
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
        <img src="images/2154dgf45dg5.webp" alt="Écoute et présence">
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
        <p><i class="fa-solid fa-location-dot"></i>34 place des Maisons Neuves, 69100 Villeurbanne</p>
    </div>
    <p class="footer-copy">&copy; 2026 Head Spa Lyon By F. — Tous droits réservés.</p>
</footer>


<!-- ========== WHATSAPP FLOAT ========== -->
<a href="https://wa.me/33772293748?text=Bonjour%20je%20souhaite%20avoir%20des%20informations"
   class="whatsapp-float"
   target="_blank"
   aria-label="Contact WhatsApp">

    <img src="images/10_29_00.webp" alt="WhatsApp">

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