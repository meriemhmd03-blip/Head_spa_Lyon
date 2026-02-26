<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cryothérapie Capillaire — Head Spa Lyon By F.</title>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/nav_menu.css">

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
    --nav-height:    80px;

    --font-display: 'Cormorant Garamond', serif;
    --font-body:    'Raleway', sans-serif;
}

html { scroll-behavior: smooth; }

body {
    font-family: var(--font-body);
    background: var(--bg);
    color: var(--text-dark);
    line-height: 1.7;
    padding-top: var(--nav-height);
}

a { text-decoration: none; color: inherit; }

/* ==================== HERO ==================== */
.hero {
    height: 70vh;
    min-height: 460px;
    background: url('images/cryo.jpg') center / cover no-repeat;
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
    max-width: 540px;
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
    margin-bottom: 16px;
}

.hero h1 {
    font-family: var(--font-display);
    font-weight: 300;
    font-size: clamp(2.2rem, 5vw, 3.6rem);
    line-height: 1.2;
    color: #fff;
    margin-bottom: 14px;
    text-shadow: 0 4px 20px rgba(0,0,0,0.3);
}

.hero h1 em {
    font-style: italic;
    font-weight: 300;
    color: rgba(255,255,255,0.82);
}

.hero-sub {
    font-family: var(--font-body);
    font-size: 0.88rem;
    font-weight: 300;
    letter-spacing: 0.1em;
    color: rgba(255,255,255,0.7);
    margin-bottom: 30px;
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

/* ==================== UTILITAIRES ==================== */
.section-label {
    display: block;
    font-family: var(--font-body);
    font-size: 10px;
    font-weight: 400;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    color: var(--primary);
    margin-bottom: 16px;
}

.divider {
    width: 50px;
    height: 1px;
    background: var(--primary);
    margin: 0 auto 40px;
}

/* ==================== INTRO CENTRÉE ==================== */
.intro {
    padding: 90px 40px 60px;
    max-width: 820px;
    margin: 0 auto;
    text-align: center;
}

.intro h2 {
    font-family: var(--font-display);
    font-weight: 400;
    font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    color: var(--accent);
    line-height: 1.25;
    margin-bottom: 32px;
    letter-spacing: 0.01em;
}

.intro h2 em { font-style: italic; font-weight: 300; }

.intro p {
    font-family: var(--font-body);
    font-size: 0.97rem;
    font-weight: 300;
    color: var(--text-mid);
    line-height: 1.9;
    margin-bottom: 18px;
}

/* ==================== SECTIONS DUO (texte + image) ==================== */
.section-duo {
    padding: 70px 60px;
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 70px;
    align-items: center;
}

/* Version fond alterné */
.section-duo-alt {
    background: var(--bg-alt);
    padding: 80px 0;
}

.section-duo-alt .duo-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 60px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 70px;
    align-items: center;
}

.section-text h2 {
    font-family: var(--font-display);
    font-weight: 400;
    font-size: clamp(1.6rem, 2.8vw, 2.2rem);
    color: var(--accent);
    line-height: 1.25;
    margin-bottom: 28px;
    letter-spacing: 0.01em;
}

.section-text h2 em { font-style: italic; font-weight: 300; }

.section-text p {
    font-family: var(--font-body);
    font-size: 0.95rem;
    font-weight: 300;
    color: var(--text-mid);
    line-height: 1.9;
    margin-bottom: 16px;
}

.section-text p:last-child { margin-bottom: 0; }

.section-image img {
    width: 100%;
    border-radius: 14px;
    object-fit: cover;
    aspect-ratio: 4/3;
    display: block;
    box-shadow: 0 12px 40px rgba(0,0,0,0.1);
    transition: transform 0.5s ease;
}

.section-image img:hover { transform: scale(1.02); }

/* ==================== BIENFAITS (grille de cartes) ==================== */
.bienfaits {
    padding: 80px 60px;
    max-width: 1200px;
    margin: 0 auto;
}

.bienfaits-header {
    text-align: center;
    margin-bottom: 50px;
}

.bienfaits-header h2 {
    font-family: var(--font-display);
    font-weight: 400;
    font-size: clamp(1.8rem, 3vw, 2.4rem);
    color: var(--accent);
    margin-bottom: 8px;
}

.bienfaits-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 22px;
}

.bienfait-card {
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 14px;
    padding: 30px 24px;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
}

/* Trait rose en haut de chaque carte (cohérent avec tarifs.php) */
.bienfait-card::before {
    content: '';
    position: absolute;
    top: 0; left: 24px; right: 24px;
    height: 2px;
    background: linear-gradient(to right, var(--primary), transparent);
}

.bienfait-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 14px 40px rgba(0,0,0,0.08);
}

.bienfait-card i {
    color: var(--primary);
    font-size: 1.2rem;
    margin-bottom: 14px;
    display: block;
}

.bienfait-card h3 {
    font-family: var(--font-display);
    font-weight: 400;
    font-size: 1.15rem;
    color: var(--accent);
    margin-bottom: 8px;
}

.bienfait-card p {
    font-family: var(--font-body);
    font-size: 0.88rem;
    font-weight: 300;
    color: var(--text-mid);
    line-height: 1.8;
}

/* ==================== CTA FINAL ==================== */
.cta {
    background: var(--bg-alt);
    padding: 80px 40px;
    text-align: center;
}

.cta h2 {
    font-family: var(--font-display);
    font-style: italic;
    font-weight: 300;
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    color: var(--accent);
    margin-bottom: 14px;
}

.cta p {
    font-family: var(--font-body);
    font-size: 0.9rem;
    font-weight: 300;
    color: var(--text-mid);
    margin-bottom: 32px;
    letter-spacing: 0.04em;
}

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
    margin-bottom: 0;
    text-shadow: none;
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

/* ==================== ANIMATIONS ==================== */
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0); }
}

.fade {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}
.fade.visible { opacity: 1; transform: translateY(0); }

/* ==================== RESPONSIVE ==================== */
@media (max-width: 1024px) {
    .section-duo { padding: 60px 40px; gap: 50px; }
    .section-duo-alt .duo-inner { padding: 0 40px; gap: 50px; }
    .bienfaits { padding: 70px 40px; }
    .bienfaits-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 768px) {
    .hero-content { margin-left: 32px; margin-right: 32px; }

    .intro { padding: 70px 24px 50px; }

    .section-duo {
        grid-template-columns: 1fr;
        gap: 32px;
        padding: 60px 24px;
    }

    .section-duo-alt .duo-inner {
        grid-template-columns: 1fr;
        gap: 32px;
        padding: 0 24px;
    }

    /* Image toujours en premier sur mobile */
    .section-duo .section-image { order: -1; }

    .bienfaits { padding: 60px 24px; }
    .bienfaits-grid { grid-template-columns: 1fr; gap: 16px; }

    .cta { padding: 60px 24px; }
    footer { padding: 40px 20px 28px; }
}

@media (max-width: 480px) {
    .hero { height: 65vh; }
    .hero-content { margin-left: 20px; margin-right: 20px; }
}

</style>
</head>
<body>

<!-- ========== NAVIGATION ========== -->
<?php include "nav_menu.php"; ?>

<!-- ========== HERO ========== -->
<header class="hero">
    <div class="hero-content">
        <span class="hero-eyebrow">Soin capillaire innovant</span>
        <h1>Cryothérapie<br><em>Capillaire</em></h1>
        <p class="hero-sub">Stimulation par le froid · Cuir chevelu revitalisé</p>
        <a href="https://www.planity.com/nd-beauty-concept-69100-villeurbanne" class="btn" target="_blank">Réservez un soin</a>
    </div>
</header>

<!-- ========== INTRO ========== -->
<div class="intro fade">
    <span class="section-label">Le soin</span>
    <h2>Un rituel régénérant<br><em>pour votre chevelure</em></h2>
    <div class="divider"></div>
    <p>Issue des dernières techniques de bien-être capillaire, la cryothérapie capillaire est un soin profond et revitalisant, pensé comme une véritable expérience régénérante. Grâce à l'application de froid localisé sur le cuir chevelu, ce rituel stimule la circulation sanguine et favorise la santé des follicules pileux.</p>
    <p>Ce traitement aide à renforcer les cheveux, à réguler le sébum et à apporter vitalité et brillance à la chevelure. Alternative douce et naturelle aux méthodes invasives, la cryothérapie capillaire respecte la structure naturelle de vos cheveux tout en les renforçant.</p>
</div>

<!-- ========== TECHNIQUE ========== -->
<section class="section-duo fade">
    <div class="section-text">
        <span class="section-label">La technique</span>
        <h2>Comment agit<br><em>le froid ?</em></h2>
        <p>La cryothérapie capillaire agit sur le cuir chevelu et les follicules pileux grâce à l'application de froid localisé. Cette technique stimule la circulation sanguine et lymphatique, favorisant l'oxygénation et la régénération des tissus.</p>
        <p>Le traitement cible les zones fragilisées ou sensibles, régule la production de sébum et renforce les cheveux dès la racine. Grâce à des applications précises et maîtrisées, il apporte tonus et vitalité à la chevelure.</p>
        <p>La stimulation répétée par le froid favorise la croissance et la résistance des cheveux, tout en préparant le cuir chevelu à mieux recevoir les soins complémentaires.</p>
    </div>
    <div class="section-image">
        <img src="images/cryotherapie.jpeg" alt="Technique cryothérapie capillaire">
    </div>
</section>

<!-- ========== RÉSULTATS ========== -->
<div class="section-duo-alt fade">
    <div class="duo-inner">
        <div class="section-image">
            <img src="images/cryotherapie-resultats.jpeg" alt="Résultats cryothérapie capillaire">
        </div>
        <div class="section-text">
            <span class="section-label">Les résultats</span>
            <h2>Cheveux renforcés,<br><em>cuir chevelu revitalisé</em></h2>
            <p>La cryothérapie capillaire apporte un effet régénérant immédiat. Elle contribue à renforcer les cheveux dès la racine, à réguler la production de sébum et à améliorer la santé globale de la chevelure.</p>
            <p>Elle favorise la croissance, augmente la densité des cheveux et apporte brillance et vitalité, tout en respectant l'équilibre naturel du cuir chevelu.</p>
        </div>
    </div>
</div>

<!-- ========== BIENFAITS ========== -->
<section class="bienfaits fade">
    <div class="bienfaits-header">
        <span class="section-label">Les bienfaits</span>
        <h2>Pourquoi choisir ce soin ?</h2>
    </div>
    <div class="bienfaits-grid">

        <div class="bienfait-card">
            <i class="fa-solid fa-droplet"></i>
            <h3>Circulation stimulée</h3>
            <p>Le froid active la microcirculation sanguine du cuir chevelu, favorisant l'apport en nutriments aux follicules pileux.</p>
        </div>

        <div class="bienfait-card">
            <i class="fa-solid fa-seedling"></i>
            <h3>Croissance favorisée</h3>
            <p>La stimulation régulière renforce les cheveux à la racine et favorise une repousse plus dense et résistante.</p>
        </div>

        <div class="bienfait-card">
            <i class="fa-solid fa-spa"></i>
            <h3>Sébum régulé</h3>
            <p>Le soin aide à équilibrer la production de sébum pour un cuir chevelu purifié, ni trop gras, ni trop sec.</p>
        </div>

        <div class="bienfait-card">
            <i class="fa-solid fa-star"></i>
            <h3>Brillance retrouvée</h3>
            <p>Les cheveux retrouvent éclat, légèreté et vitalité dès les premières séances.</p>
        </div>

        <div class="bienfait-card">
            <i class="fa-solid fa-leaf"></i>
            <h3>Méthode naturelle</h3>
            <p>Alternative douce sans produits chimiques invasifs, qui respecte la structure naturelle du cheveu.</p>
        </div>

        <div class="bienfait-card">
            <i class="fa-solid fa-heart"></i>
            <h3>Soin apaisant</h3>
            <p>Le froid a un effet déstressant sur le cuir chevelu, pour un moment de détente profonde.</p>
        </div>

    </div>
</section>

<!-- ========== CTA ========== -->
<section class="cta fade">
    <h2>Prête à essayer la cryothérapie capillaire ?</h2>
    <p>Réservez votre séance et offrez-vous un soin unique et revitalisant</p>
    <a href="https://www.planity.com/nd-beauty-concept-69100-villeurbanne" class="btn" target="_blank">Réservez un soin</a>
</section>

<!-- ========== FOOTER ========== -->
<footer>
    <div class="footer-brand">Head Spa Lyon By F.</div>
    <div class="footer-divider"></div>
    <div class="footer-info">
        <p><i class="fa-solid fa-location-dot"></i>34 place des Maisons Neuves, 69100 Villeurbanne</p>
        <p><i class="fa-solid fa-phone"></i><a href="tel:+33772293748">07 72 29 37 48</a></p>
        <p><i class="fa-brands fa-instagram"></i><a href="https://www.instagram.com/head_spa_lyon" target="_blank">@headspalyon_byf</a></p>
    </div>
    <p class="footer-copy">&copy; 2026 Head Spa Lyon By F. — Tous droits réservés.</p>
</footer>

<!-- ========== SCRIPT SCROLL REVEAL ========== -->
<script>
var elements = document.querySelectorAll('.fade');

var observer = new IntersectionObserver(function(entries) {
    for (var i = 0; i < entries.length; i++) {
        if (entries[i].isIntersecting) {
            entries[i].target.classList.add('visible');
        }
    }
}, { threshold: 0.1 });

for (var i = 0; i < elements.length; i++) {
    observer.observe(elements[i]);
}
</script>

</body>
</html>