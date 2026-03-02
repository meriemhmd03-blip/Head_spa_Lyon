<?php
require 'config.php'; //instruction PHP qui oblige le chargement du fichier config.php

$sql = "SELECT 
            prestations.nom_categorie AS categorie, /*demande de la colonne nom_categorie de la table prestations, on donne l'alias categorie à cette colonne*/
            sous_prestation.nom, 
            sous_prestation.description, 
            sous_prestation.duree, 
            sous_prestation.prix 
        FROM sous_prestation 
        /*indique la table principale de la requête, où sont stockés les soins individuels*/
        INNER JOIN prestations ON sous_prestation.presta_id = prestations.IdPresta 
        /*INNER JOIN= jointure interne, on relie 2 tables pour combiner leurs données*/ 
        /*prestations = la deuxieme table à joindre (contient les catégories)*/
        /*ON introduit la condition de liaison entre les 2 tables*/ 
        /*sous_prestation.presta_id = prestations.IdPresta : la condition exacte :
        • presta_id (dans sous_prestation) est une clé étrangère
        • IdPresta (dans prestations) est la clé primaire
        • On ne garde que les lignes où ces deux valeurs sont égales. */
        ORDER BY prestations.IdPresta";
        /*ORDER BY = mot clé SQL pour trier les résultats
        on trie par l'ID de la catégorie (pour grouper les soins par catégorie).
        */

$stmt = $pdo->query($sql); /*Cette ligne exécute la requête SQL stocké dans $sql via la connexion à la BDD ($pdo) et place de résultat dans la variable $stmt pour qu'on puisse lire ensuite */
$services = $stmt->fetchAll(); /*$services : nouvelle variable qui va contenir toutes les lignes récupérées / méthode qui récupère tous les résultats de la requête sous forme de tableau associatif*/
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarifs — Head Spa Lyon By F.</title>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/nav_menu.css">

<style>

/* ==================== RESET & VARIABLES ==================== */
*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

:root {
    --primary:      #C97A93;
    --primary-dark: #b5607c;
    --accent:       #5a3a2e;
    --text-dark:    #2a2a2a;
    --text-mid:     #555;
    --bg:           #FAF7F2;
    --bg-card:      #ffffff;
    --border:       rgba(90,58,46,0.12);
    --nav-height:   80px;

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
    min-height: 480px;
    background: url('images/cheveux.jpeg') center / cover no-repeat;
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
    max-width: 520px;
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
    font-size: 0.9rem;
    font-weight: 300;
    letter-spacing: 0.12em;
    color: rgba(255,255,255,0.72);
    margin-bottom: 32px;
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
    margin-bottom: 14px;
}

/* ==================== INTRO ==================== */
.tarifs-intro {
    text-align: center;
    padding: 80px 40px 20px;
    max-width: 700px;
    margin: 0 auto;
}

.tarifs-intro h2 {
    font-family: var(--font-display);
    font-style: italic;
    font-weight: 300;
    font-size: clamp(1.8rem, 3vw, 2.4rem);
    color: var(--accent);
    margin-bottom: 16px;
}

.tarifs-intro p {
    font-family: var(--font-body);
    font-size: 0.95rem;
    font-weight: 300;
    color: var(--text-mid);
    line-height: 1.9;
}

.divider {
    width: 50px;
    height: 1px;
    background: var(--primary);
    margin: 32px auto 0;
}

/* ==================== CONTENEUR TARIFS ==================== */
.tarifs-container {
    max-width: 1100px;
    margin: 70px auto 60px;
    padding: 0 40px;
}

/* ==================== CATÉGORIE ==================== */
.tarifs-categorie {
    margin-bottom: 80px;
}

.tarifs-categorie-header {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 40px;
}

.tarifs-categorie-header::after {
    content: '';
    flex: 1;
    height: 1px;
    background: var(--border);
}

.tarifs-categorie-header h2 {
    font-family: var(--font-display);
    font-weight: 400;
    font-size: clamp(1.6rem, 2.5vw, 2.2rem);
    color: var(--accent);
    white-space: nowrap;
    letter-spacing: 0.01em;
}

/* ==================== GRILLE CARTES ==================== */
.tarifs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 24px;
}

/* ==================== CARTE TARIF ==================== */
.tarif-card {
    background: var(--bg-card);
    border-radius: 18px;
    padding: 36px 32px;
    border: 1px solid var(--border);
    box-shadow: 0 4px 24px rgba(0,0,0,0.05);
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    gap: 12px;

    /* Animation reveal */
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.7s ease, transform 0.7s ease, box-shadow 0.3s ease;
}

.tarif-card.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Trait rose décoratif en haut de la carte */
.tarif-card::before {
    content: '';
    position: absolute;
    top: 0; left: 32px; right: 32px;
    height: 2px;
    background: linear-gradient(to right, var(--primary), transparent);
    border-radius: 2px;
}

.tarif-card:hover {
    box-shadow: 0 12px 40px rgba(0,0,0,0.1);
    transform: translateY(-4px);
}

/* Nom du soin */
.tarif-card h3 {
    font-family: var(--font-display);
    font-weight: 400;
    font-size: 1.35rem;
    color: var(--accent);
    letter-spacing: 0.01em;
    line-height: 1.3;
}

/* Description */
.tarif-desc {
    font-family: var(--font-body);
    font-size: 0.88rem;
    font-weight: 300;
    color: var(--text-mid);
    line-height: 1.8;
    flex: 1;
}

/* Ligne durée + prix */
.tarif-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 16px;
    border-top: 1px solid var(--border);
    margin-top: auto;
}

.tarif-duree {
    font-family: var(--font-body);
    font-size: 11px;
    font-weight: 400;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: rgba(85,85,85,0.6);
    display: flex;
    align-items: center;
    gap: 6px;
}

.tarif-duree i { color: var(--primary); font-size: 10px; }

.tarif-prix {
    font-family: var(--font-display);
    font-size: 1.6rem;
    font-weight: 500;
    color: var(--primary);
    letter-spacing: 0.01em;
}

/* ==================== CTA BAS DE PAGE ==================== */
.tarifs-cta {
    text-align: center;
    padding: 40px 20px 100px;
}

.tarifs-cta p {
    font-family: var(--font-body);
    font-size: 0.9rem;
    font-weight: 300;
    color: var(--text-mid);
    margin-bottom: 28px;
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

/* ==================== RESPONSIVE ==================== */
@media (max-width: 1024px) {
    .tarifs-container { padding: 0 30px; }
    .hero-content { margin-left: 50px; }
}

@media (max-width: 768px) {
    .hero-content {
        margin-left: 28px;
        margin-right: 28px;
        text-align: center;
    }

    .tarifs-intro { padding: 60px 24px 20px; }

    .tarifs-container {
        padding: 0 20px;
        margin: 50px auto 40px;
    }

    .tarifs-categorie { margin-bottom: 60px; }

    .tarifs-categorie-header { flex-direction: column; align-items: flex-start; gap: 8px; }
    .tarifs-categorie-header::after { display: none; }

    .tarifs-grid {
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .tarif-card { padding: 28px 24px; }

    .tarif-prix { font-size: 1.4rem; }

    footer { padding: 40px 20px 28px; }
}

@media (max-width: 480px) {
    .hero { height: 60vh; }
    .hero-content { margin-left: 20px; margin-right: 20px; }
    .hero h1 { font-size: 2rem; }

    .tarif-card { padding: 24px 20px; }
    .tarif-card h3 { font-size: 1.2rem; }
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
        <h1>Nos <em>tarifs</em></h1>
        <p class="hero-sub">Des soins pensés pour vous, à votre rythme</p>
        <a href="https://www.planity.com/nd-beauty-concept-69100-villeurbanne" class="btn" target="_blank">Réservez un soin</a>
    </div>
</header>

<!-- ========== INTRO ========== -->
<div class="tarifs-intro fade">
    <span class="section-label">Nos prestations</span>
    <h2>Chaque soin est unique,<br>comme vous l'êtes</h2>
    <p>Retrouvez ci-dessous l'ensemble de nos rituels et leurs tarifs. Chaque soin est réalisé avec soin et attention, dans un cadre apaisant pensé pour votre bien-être.</p>
    <div class="divider"></div>
</div>

<!-- ========== TARIFS (depuis la BDD) ========== -->
<?php if (!empty($services)): ?> <!--vérifie que le tableau $services n'est pas vide -->

<div class="tarifs-container">

<?php
$currentCategorie = null; //initialise une variable pour suivre la catégorie en cours / null = valeur "vide" en PHP
foreach ($services as $ligne): //boucle qui parcourt chaque éléments de tableau $services contenant tous les résultats de la BDD , as $ligne = à chaque tour, l'élément courant est copié dans $ligne
        // : -> début du bloc HTML à répéter pour chaque ligne   
    if ($currentCategorie !== $ligne['categorie']): /*si la catégorie actuelle est différente de la catérogie en cours, alors ... */
        // Ferme la grille et la catégorie précédente
        if ($currentCategorie !== null) echo '</div></div>'; /*si on change de catégorie, on ferme l'ancienne */
        $currentCategorie = $ligne['categorie']; /*on met à jour, maintenant c'est cette catégorie qu'on affiche*/
?>

    <div class="tarifs-categorie fade">
        <div class="tarifs-categorie-header">
            <h2><?= htmlspecialchars($currentCategorie) ?></h2>
        </div>
        <div class="tarifs-grid">

<?php endif; ?>

            <!-- Carte soin -->
            <div class="tarif-card"> <!--ouvre une carte individuelle pour un soin -->
                <h3><?= htmlspecialchars($ligne['nom']) ?></h3>
                <p class="tarif-desc"><?= nl2br(htmlspecialchars($ligne['description'])) ?></p>
                <div class="tarif-footer">
                    <span class="tarif-duree">
                        <i class="fa-regular fa-clock"></i>
                        <?= htmlspecialchars($ligne['duree']) ?> min
                    </span>
                    <span class="tarif-prix"><?= htmlspecialchars($ligne['prix']) ?> €</span>
                </div>
            </div>

<?php endforeach; if ($currentCategorie !== null) echo '</div></div>'; ?>

</div><!-- /tarifs-container -->

<!-- ========== CTA BAS ========== -->
<div class="tarifs-cta fade">
    <p>Prête à vous offrir un moment rien qu'à vous ?</p>
    <a href="https://www.planity.com/nd-beauty-concept-69100-villeurbanne" target="_blank" class="btn">
        Réservez un soin
    </a>
</div>

<?php endif; ?>

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
// Je sélectionne tous les éléments à animer au scroll
var elements = document.querySelectorAll('.tarif-card, .fade');

// Je crée un observateur qui surveille quand un élément apparaît à l'écran
var observer = new IntersectionObserver(function(entries) {
    for (var i = 0; i < entries.length; i++) {
        if (entries[i].isIntersecting) {
            entries[i].target.classList.add('visible');
        }
    }
}, { threshold: 0.1 });

// J'applique l'observateur sur chaque élément
for (var i = 0; i < elements.length; i++) {
    observer.observe(elements[i]);
}
</script>

</body>
</html>