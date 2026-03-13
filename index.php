<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Head Spa à Lyon | Cryothérapie capillaire, Kobido, Massage, Head Spa, Hair Play, Formation en ligne">
    <title>Head Spa à Lyon | Cryothérapie capillaire, Kobido, Massage, Head Spa, Hair Play, Formation en ligne</title>

    <!-- Google Fonts : Cormorant Garamond + Raleway -->
    <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Font Awesome icons -->
    <link rel="icon" type="image/webp" href="images/6z9f45s3fdf.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
/* ==================== RESET & VARIABLES ==================== */
*, *::before, *::after { /*sélecteur universel : cible TOUS les éléments de la page / *before *after cible les pseudo-éléments*/
    margin: 0; /*Supprime les marges extérieures par défaut (chaque navigateur en ajoute) */
    padding: 0; /*Supprime les marges intérieures par défaut */
    box-sizing: border-box; /*inclus le padding dans width*/
}
/* on fait ca pour avoir les mêmes bases sur tous les navigateurs */
/* =================== LES VARIABLES CSS ===================== */
:root { /*Sélecteur spécial qui cible l'élément racine <html>. Les variables définies ici sont accessibles partout dans le CSS.*/
    --primary:       #C97A93; /*Crée une variable nommée --primary avec la valeur #C97A93 (rose). Le -- indique que c'est une variable CSS.*/
    --primary-dark:  #b5607c;
    --primary-light: #f0d0db;
    --accent:        #5a3a2e;
    --text-dark:     #2a2a2a;
    --text-mid:      #555;
    --text-light:    #FAF7F2;
    --bg:            #FAF7F2;
    --bg-dark:       #2e1b01;
    --border:        rgba(90,58,46,0.15);

    --font-display: 'Cormorant Garamond', serif; /*serif = police de secours si la première n'est pas dispo*/
    --font-body:    'Raleway', sans-serif;
}
/*======================== REGLAGES DE BASE DU CORPS DE PAGE ================== */
html { scroll-behavior: smooth; } /*Rend le défilement fluide quand on clique sur un lien ancre (#contact)*/
body {
    font-family: var(--font-body);
    color: var(--text-dark);
    background: var(--bg);
    line-height: 1.6; /* Hauteur de ligne = 1.6x la talle de police ->texte plus aéré, plus lisible */
    font-size: 16px;
}
a { text-decoration: none; color: inherit; } /*inherit = les liens prennent la couleur de leur parent (au lieu du bleu par défaut)*/
/* ==================== NAVIGATION ==================== */
.nav { /* Barre de navigation principale */
    position: absolute; /*Sort l'élément du flux normal → il "flotte" par-dessus le contenu*/
    top: 0; left: 0; right: 0; /*colle le nav en haut, sur toute la largeur*/
    z-index: 100; /*Empilement : plus le chiffre est haut, plus l'élément est "au-dessus". 100 = bien au-dessus du reste*/
    display: flex; /*Active Flexbox : permet d'aligner facilement les enfants (logo + liens) sur une ligne*/
    align-items: center; /*Centre verticalement les éléments dans la nav*/
    justify-content: space-between; /*Écarte au maximum : logo à gauche, liens à droite*/
    padding: 28px 60px; /*Marge intérieure : 28px en haut/bas, 60px à gauche/droite*/
}
.nav-logo { /* Logo de navigation*/
    font-family: var(--font-display);
    font-style: italic;
    font-weight: 400;
    font-size: 1.4rem; /*Taille = 1.4 × la taille de base (16px) = ~22px. rem est relatif à la racine, mieux que px pour l'accessibilité*/
    color: #fff;
    letter-spacing: 0.02em; /*Espace entre les lettres = 2% de la taille de la police → un peu plus aéré*/
    text-shadow: 0 2px 8px rgba(0,0,0,0.4); /*Ombre portée sur le texte : décalage X=0, Y=2px, flou=8px, couleur=noir 40% opaque → rend le texte lisible sur l'image de fond*/
}
.nav-links { /* Liens de navigation*/
    display: flex; /*Met les liens côte à côte sur une ligne*/
    gap: 40px; /*Espace entre les éléments flex*/
    list-style: none; /*Enlève les puces des <li> (car .nav-links est un <ul>)*/
}
.nav-links a {
    font-weight: 300;
    font-size: 11px;
    letter-spacing: 0.18em;
    text-transform: uppercase; /*Met tout en MAJUSCULES automatiquement*/
    color: rgba(255,255,255,0.9);
    transition: color 0.3s ease; /*Animation douce quand la couleur change (au survol) : 0.3 secondes, courbe "ease" (démarrage/fin doux)*/
    text-shadow: 0 1px 4px rgba(0,0,0,0.3);
}
.nav-links a:hover { color: #fff; } /*	Au survol de la souris, le lien devient blanc 100% opaque*/
/*========================= MOBILE ======================*/
/*menu burger mobile*/
.nav-burger { 
    display: none; /* Caché par défaut (on ne le voit que sur mobile via media query)*/
    flex-direction: column; /*Empile les 3 barres du burger verticalement*/
    gap: 5px; 
    cursor: pointer; /*Change le curseur en main au survol → indique que c'est cliquable*/
    padding: 4px;
}
.nav-burger span { 
    display: block; /*/*Chaque barre (<span>) devient un bloc pour appliquer width/height*/*/
    width: 24px; /*Dimensions de chaque barre du burger*/
    height: 2px;
    background: #fff;
    border-radius: 2px;
}
/*menu mobile plein écran*/
.nav-mobile {
    display: none;
    position: fixed; /*L'élément reste fixe par rapport à la fenêtre, même quand on scrolle*/
    inset: 0; /*Raccourci pour top:0; right:0; bottom:0; left:0 → couvre tout l'écran*/
    background: rgba(46,27,1,0.97);
    z-index: 200; /*Au-dessus de la nav normale (100) et du reste*/
    flex-direction: column;
    align-items: center; /*Centre les liens horizontalement */ 
    justify-content: center; /*ET verticalement*/
    gap: 36px;
}
.nav-mobile.open { display: flex; } /*Quand JavaScript ajoute la classe open, le menu apparaît en flex*/
.nav-mobile a {
    font-weight: 300;
    font-size: 13px;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.85);
    transition: color 0.3s;
}
.nav-mobile a:hover { color: #fff; }
.nav-mobile-close {
    position: absolute;
    top: 28px; right: 28px;
    color: #fff;
    font-size: 1.8rem;
    cursor: pointer;
    background: none;
    border: none;
}
/*============== MEDIA QUERY : ADAPTATION MOBILE ===========*/
/*On adapte le design selon la taille de l'écran*/
@media (max-width: 768px) { /*"Si l'écran fait 768px de large ou moins" (tablettes et mobiles)*/
    .nav { padding: 22px 24px; }
    .nav-links { display: none; } /*Cache le menu horizontal classique*/
    .nav-burger { display: flex; } /*Affiche le bouton burger à la place*/
}
/* ==================== HERO : BANNIERE PRINCIPALE ==================== */
.hero {
    height: 100vh; /*Hauteur = 100% de la hauteur de la fenêtre (vh = viewport height). La bannière prend tout l'écran.*/
    min-height: 600px;/*Mais jamais moins de 600px (pour les très petits écrans en hauteur)*/
    background-image: url('images/f9n7g89hl7y.webp');
    background-size: cover; /*l'image remplit tout le conteneur sans être déformée (elle peut être légèrement recadrée)*/
    background-position: center;
    position: relative; /*Nécessaire pour que les enfants en position: absolute se positionnent par rapport à .hero*/
    display: flex;
    align-items: center; /*Centre le contenu verticalement (grâce à display: flex)*/
    overflow: hidden; /*Cache tout ce qui dépasse du conteneur (évite les débordements visuels)*/
}
.hero::before { /* Filtre sombre sur l'image (pseudo-élément) / but :  Assombrir l'image pour que le texte blanc reste lisible, avec un effet esthétique en dégradé./ 	
Crée un pseudo-élément avant le contenu de .hero (comme une couche supplémentaire) */ 
    content: ''; /*Obligatoire pour que ::before s'affiche. Vide car on veut juste un fond.*/
    position: absolute; /*+ inset : 0 : Cette couche couvre exactement tout le .hero*/
    inset: 0;
    background: linear-gradient(135deg, rgba(0,0,0,0.45) 0%, rgba(46,27,1,0.25) 100%);
    z-index: 1; /*Cette couche est au-dessus de l'image de fond, mais en-dessous du texte (z-index: 2)*/
}
.hero-content {
    position: relative;
    z-index: 2; /*Le contenu est AU-DESSUS du filtre sombre (z-index:1)*/
    margin-left: 80px;
    max-width: 580px; /*Le texte ne dépasse jamais 580px de large → reste lisible même sur grand écran*/
    animation: fadeInUp 1.2s ease forwards; /*Applique l'animation fadeInUp : durée 1.2s, courbe douce, forwards = garde l'état final après l'animation*/
}
/*========= TYPOGRAPHIE DU HERO ==============*/
.hero-eyebrow { /*Petit texte d'introduction ("Institut de soin...")*/
    font-size: 10px;
    font-weight: 400;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.7); /*Blanc à 70% d'opacité*/
    margin-bottom: 20px;
    display: block;
}
.hero h1 {
    font-family: var(--font-display);
    font-weight: 400;
    font-size: clamp(2.6rem, 5vw, 4rem); /* la taille sera :
- minimum 2.6rem (~42px)
- idéale 5vw (5% de la largeur de l'écran)
- maximum 4rem (~64px)
→ Le titre s'adapte parfaitement à toutes les tailles d'écran */
    line-height: 1.15; /*Hauteur de ligne serrée pour les titres*/
    color: #fff;
    margin-bottom: 18px;
    text-shadow: 0 4px 20px rgba(0,0,0,0.3);
    letter-spacing: 0.01em;
}
.hero h1 em { /* le mot By F. */
    font-style: italic;
    font-weight: 300;
    color: rgba(255,255,255,0.85);
}
.hero-sub {
    font-size: 0.95rem;
    font-weight: 300;
    letter-spacing: 0.08em;
    color: rgba(255,255,255,0.8);
    margin-bottom: 36px;
    text-transform: uppercase;
}
/* =============== BOUTON D'ACTION ============ */ 
.btn {
    display: inline-block; /*Permet d'appliquer padding/marge à un lien <a> tout en restant "en ligne"*/
    font-weight: 400;
    font-size: 11px;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: #fff;
    background: var(--primary);
    padding: 15px 38px;
    border-radius: 30px;
    transition: background 0.3s, transform 0.3s, box-shadow 0.3s; /*Anime 3 propriétés au survol : couleur de fond, position, ombre*/
    box-shadow: 0 8px 24px rgba(201,122,147,0.4);
}
.btn:hover {
    background: var(--primary-dark);
    transform: translateY(-3px); /*Au survol, le bouton monte de 3px → effet "soulevé" interactif*/
    box-shadow: 0 14px 30px rgba(201,122,147,0.5); /*L'ombre s'agrandit et s'intensifie au survol → renforce l'effet 3D*/
}
/* ============== INDICATEUR DE SCROLL (FLECHE QUI REBONDIT) ============ */
.hero-scroll {
    position: absolute;
    bottom: 36px;

    left: 50%;
    transform: translateX(-50%);
    /*centrer horizontalement un élément en position absolute. On le place à 50% de la largeur, puis on le recule de 50% de sa propre largeur.*/
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px; /*Espace entre le texte "Découvrir" et l'icône flèche*/
    color: rgba(255,255,255,0.6);
    font-size: 9px;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    animation: bounce 2.5s ease-in-out infinite; /*Applique l'animation bounce : durée 2.5s, démarrage/fin doux, en boucle infinie*/
}
.hero-scroll i { font-size: 0.8rem; }
@keyframes bounce { /*Crée un mouvement de rebond doux*/
    0%, 100% { transform: translateX(-50%) translateY(0); } /*0% et 100% : position normale*/
    50%       { transform: translateX(-50%) translateY(6px); } /*50% : descend de 6px (translateY(6px))*/
}
@media (max-width: 768px) { /*Réduit les marges latérales du hero pour gagner de l'espace*/
    .hero-content { margin-left: 40px; margin-right: 40px; }
}
@media (max-width: 480px) { /*<ul><li>Marges encore plus réduites</li><li>text-align: center → le texte se centre (plus lisible sur petit écran)</li><li>height: 90vh → le hero prend 90% de l'écran (pas 100%) pour laisser voir qu'il y a du contenu en dessous</li></ul> */
    .hero-content { margin-left: 24px; margin-right: 24px; text-align: center; }
    .hero { height: 90vh; }
}
/* ==================== BIENVENUE ==================== */
.bienvenue {
    padding: 100px 40px;
    max-width: 900px;
    margin: 0 auto; /*Centre horizontalement la section (marge gauche/droite automatique)*/
    text-align: center;
}
.section-label { /*"Notre philosophie"*/
    display: block;
    font-size: 10px;
    font-weight: 400;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    color: var(--primary);
    margin-bottom: 20px;
}
.bienvenue h2 {
    font-family: var(--font-display);
    font-weight: 400;
    font-size: clamp(2rem, 4vw, 3rem);
    color: var(--accent);
    line-height: 1.25;
    margin-bottom: 40px;
    letter-spacing: 0.01em;
}
.bienvenue h2 em { font-style: italic; font-weight: 300; }
.bienvenue-divider { /*Petite ligne décorative sous le titre H2 : 50px de large, 1px de haut, couleur rose*/
    width: 50px;
    height: 1px;
    background: var(--primary);
    margin: 0 auto 40px; /*Marge : haut=0, gauche/droite=auto (centré), bas=40px*/
}
.bienvenue p { /*texte courant*/
    font-size: 1rem;
    font-weight: 300;
    color: var(--text-mid);
    line-height: 1.9;
    margin-bottom: 18px;
    max-width: 720px; /*Le paragraphe ne dépasse pas 720px et reste centré → lignes de texte de longueur idéale pour la lecture*/
    margin-left: auto;
    margin-right: auto;
}
@media (max-width: 480px) { .bienvenue { padding: 70px 24px; } }
/* ==================== PRESTATIONS ==================== */
.prestations {
    padding: 0 40px 100px;
    max-width: 1400px;
    margin: 0 auto;
}
.prestations-header {
    text-align: center;
    margin-bottom: 60px;
}
.prestations-header h2 {
    font-family: var(--font-display);
    font-weight: 400;
    font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    color: var(--accent);
    letter-spacing: 0.01em;
}
/* GRILLE FIXE 3 colonnes */
.presta-grid {
    display: grid; /*Active CSS Grid, un système de mise en page en 2D (lignes + colonnes)*/
    grid-template-columns: repeat(3, 1fr); /*Crée 3 colonnes de largeur égale. 1fr = "1 fraction" de l'espace disponible. 3 colonnes = 3 × 1fr = espace divisé en 3*/
    gap: 20px; /*Espace entre les cartes*/
}
@media (max-width: 900px) { .presta-grid { grid-template-columns: repeat(2, 1fr); } } /*Sur tablette : passe à 2 colonnes*/
@media (max-width: 560px) {
    .presta-grid { grid-template-columns: 1fr; gap: 16px; } /*Sur mobile : 1 seule colonne, les cartes s'empilent*/
    .prestations { padding: 0 16px 70px; }
}
/*Avantage de Grid : Le responsive se gère en changeant juste le nombre de colonnes, sans toucher au HTML.*/
/*============ CARTE DE PRESTATION ===================*/
.presta-card {
    position: relative;
    overflow: hidden; /*Cache tout ce qui dépasse de la carte → nécessaire pour l'effet de zoom sur l'image*/
    border-radius: 12px;
    aspect-ratio: 4/3; /* force le ratio largeur/hauteur à 4:3. La carte reste toujours proportionnée, peu importe sa largeur.*/
    display: block;
    box-shadow: 0 4px 20px rgba(0,0,0,0.12); /*Ombre légère pour détacher la carte du fond*/
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}
.presta-card:hover {
    transform: translateY(-6px); /*La carte monte au survol → effet interactif*/
    box-shadow: 0 16px 40px rgba(0,0,0,0.2);
}
.presta-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.6s ease;
}
.presta-card:hover img { transform: scale(1.07); } /*L'image zoome très légèrement au survol de la carte*/
/*=========== OVERLAY TEXTE SUR L'IMAGE ======================*/
.presta-card::after { /*Crée un dégradé sombre en bas de l'image → rend le texte blanc lisible*/
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0.1) 50%, transparent 100%); /*Dégradé vertical : noir opaque en bas → transparent en haut*/
}
.presta-card-label {
    position: absolute;
    bottom: 0; left: 0; right: 0; /* +position absolute : Colle le texte en bas de la carte, par-dessus l'image*/
    z-index: 2;
    padding: 28px 24px 24px;
    text-align: center;
}
.presta-card-label span {
    font-family: var(--font-display);
    font-weight: 400;
    font-size: 1.5rem;
    color: #fff;
    letter-spacing: 0.03em;
    text-shadow: 0 2px 10px rgba(0,0,0,0.4);
    transition: transform 0.3s ease; /*Anime le titre de la carte au survol*/
    display: inline-block;
}
.presta-card:hover .presta-card-label span { transform: translateY(-4px); }
.presta-card-label em {
    display: block;
    font-style: normal;
    font-size: 10px;
    font-weight: 300;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.7);
    margin-top: 4px;
    opacity: 0; /*Le sous-titre ("Découvrir le soin") est invisible et décalé vers le bas par défaut*/
    transform: translateY(6px);
    transition: all 0.3s ease 0.05s; /*Anime toutes les propriétés, avec un léger délai (0.05s) pour décaler l'animation par rapport au titre*/
}
.presta-card:hover .presta-card-label em {
    opacity: 1; 
    transform: translateY(0); /*Au survol, le sous-titre apparaît en glissant vers le haut */
}
/* ==================== TEMOIGNAGES ==================== */
.temoignages {
    background: linear-gradient(160deg, #1a0e00 0%, #2e1b01 60%, #1a0e18 100%); /*Dégradé diagonal complexe avec 3 couleurs marron/noir*/
    padding: 90px 40px 100px;
    margin: 0 0 80px;
    position: relative;
    overflow: hidden;
}
/* Ambiance lumineuse derrière le téléphone */
.temoignages::before {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    width: 600px; height: 600px;
    background: radial-gradient(circle, rgba(201,122,147,0.12) 0%, transparent 70%); /*radial gradient Crée un "halo" rose très subtil derrière le téléphone pour attirer l'œil*/ /* circle : Dégradé circulaire : rose transparent au centre → transparent vers les bords*/
    pointer-events: none; /*Empêche ce calque décoratif de bloquer les clics sur les éléments en dessous*/
}
.temoignages-header {
    text-align: center;
    margin-bottom: 56px;
}
.temoignages-header h2 {
    font-family: var(--font-display);
    font-weight: 400;
    font-size: clamp(1.6rem, 3vw, 2.4rem);
    color: #fff;
    letter-spacing: 0.02em;
    margin-bottom: 10px;
}

.temoignages-header p {
    font-size: 10px;
    font-weight: 300;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.4);
}
/* ============ MOCKUP TÉLÉPHONE ================ */
.phone-wrapper {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    position: relative;
}
.phone-mockup {
    width: 375px; /*Largeur standard d'un iPhone en portrait*/
    background: #000;
    border-radius: 50px; /*Coins très arrondis pour imiter la forme d'un smartphone moderne*/
    box-shadow:
        0 0 0 10px #1c1c1e, /*bordure interne de 10px (simule le cadre du téléphone)*/
        0 0 0 12px #3a3a3c, /*deuxième bordure légèrement plus claire*/
        0 40px 80px rgba(0,0,0,0.7), /*ombre portée réaliste sous le téléphone*/
        0 0 60px rgba(201,122,147,0.15); /*lueur rose subtile autour → effet "glow"*/
    position: relative;
    overflow: hidden; /*Cache ce qui dépasse (comme l'écran qui ne doit pas sortir des bords arrondis)*/
}
/* Encoches et boutons physiques du téléphone */
.phone-notch { /*Rectangle arrondi noir centré en haut → simule l'encoche d'un iPhone*/
    position: absolute;
    top: 14px; left: 50%;
    transform: translateX(-50%);
    width: 126px; height: 34px;
    background: #000;
    border-radius: 20px;
    z-index: 10; /*S'affiche au-dessus de l'écran (phone-screen)*/
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}
.phone-notch::after { /*Petit cercle gris à l'intérieur de l'encoche → simule la caméra frontale*/
    content: '';
    width: 12px; height: 12px;
    background: #1c1c1e;
    border-radius: 50%;
    border: 2px solid #2a2a2a;
}
/* Boutons latéraux décoratifs */
.phone-btn-vol {
    position: absolute;
    left: -12px; top: 120px;
    width: 4px; height: 32px;
    background: #3a3a3c;
    border-radius: 2px 0 0 2px;
    box-shadow: 0 44px 0 #3a3a3c;
}
.phone-btn-power {
    position: absolute;
    right: -12px; top: 160px;
    width: 4px; height: 60px;
    background: #3a3a3c;
    border-radius: 0 2px 2px 0;
}
/* Écran du téléphone */
.phone-screen {
    background: #fff;
    border-radius: 40px; /*Coins arrondis légèrement moins que le mockup → simule l'écran à l'intérieur du cadre*/
    overflow: hidden;
    margin: 0;
    height: 700px;
    display: flex;
    flex-direction: column; /*Empile les éléments de l'interface Instagram verticalement (barre haut → stories → feed → barre bas)*/
}
/* ---- BARRE INSTAGRAM EN HAUT ---- */
.insta-topbar {
    background: #fff;
    border-bottom: 1px solid #efefef;
    padding: 52px 14px 10px; /* 52px pour passer sous l'encoche */
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-shrink: 0;
    position: sticky;
    top: 0;
    z-index: 5;
}
.insta-username {
    font-family: -apple-system, 'Segoe UI', sans-serif;
    font-weight: 700;
    font-size: 15px;
    color: #000;
    letter-spacing: -0.3px;
}
.insta-topbar-icons {
    display: flex;
    gap: 16px;
    align-items: center;
}
.insta-topbar-icons i {
    font-size: 20px;
    color: #000;
    cursor: pointer;
}
/* ---- STORIES ---- */
.insta-stories {
    display: flex;
    gap: 12px;
    padding: 10px 14px;
    overflow-x: auto; /*Permet de scroller horizontalement si les stories dépassent*/
    border-bottom: 1px solid #efefef;
    flex-shrink: 0;
    scrollbar-width: none; /*Cache la barre de scroll (esthétique) tout en gardant le scroll fonctionnel*/
}
.insta-stories::-webkit-scrollbar { display: none; }
.story-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4px;
    flex-shrink: 0; /*Empêche les éléments de rétrécir quand l'espace manque → chaque story garde sa taille*/
    cursor: pointer;
}
.story-avatar { 
    width: 56px; height: 56px;
    border-radius: 50%; /*Crée un cercle parfait (quand width = height)*/
    background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); /*Dégradé multicolore typique des stories Instagram "non vues"*/
    padding: 2px; 
    display: flex;
    align-items: center;
    justify-content: center;
}
.story-avatar-inner {
    width: 100%; height: 100%;
    border-radius: 50%;
    background: #C97A93;
    border: 3px solid #fff; /* avec padding 2x ,Crée l'effet de contour blanc autour de l'avatar (comme sur Instagram)*/
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}
.story-label {
    font-family: -apple-system, 'Segoe UI', sans-serif;
    font-size: 10px;
    color: #262626;
    text-align: center;
    max-width: 60px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
/* ---- FEED INSTAGRAM (scrollable) ---- */
.insta-feed {
    flex: 1;
    overflow-y: auto;
    background: #fff;
    scrollbar-width: none;
}
.insta-feed::-webkit-scrollbar { display: none; }
/* ---- Post Instagram (simplifié) ---- */
.insta-post {
    border-bottom: 1px solid #efefef;
}
/* La zone image : carrée, cliquable */
.post-image {
    width: 100%;
    aspect-ratio: 1 / 1; /*Force l'image à être carrée (comme les posts Instagram)*/
    position: relative;
    cursor: pointer; /*Affiche une main au survol → indique que c'est cliquable*/
    overflow: hidden;
    background: #f0f0f0;
}
.post-image img {
    width: 100%;
    height: 100%;
    object-fit: cover; /*L'image remplit le carré sans être déformée*/
    display: block;
    transition: transform 0.3s ease;
}
.post-image:hover img {
    transform: scale(1.03); /*Zoom très léger au survol → effet interactif subtil*/
}
/* Icône play qui apparaît au survol */
.post-play {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, 0.15);
    opacity: 0; /*L'icône play est invisible par défaut*/
    transition: opacity 0.2s; /*Apparition/disparition en fondu doux*/
}
.post-image:hover .post-play {
    opacity: 1; /*Apparaît au survol de l'image → indique qu'il s'agit d'une vidéo*/
}
.post-play i {
    font-size: 20px;
    color: #fff;
    background: rgba(255, 255, 255, 0.2);
    border: 2px solid rgba(255,255,255,0.8);
    border-radius: 50%;
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
}
/* Boutons like / commentaire / partage / enregistrer */
.post-actions {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 14px 12px;
}
.post-actions-gauche {
    display: flex;
    gap: 14px;
    align-items: center;
}
.post-actions i {
    font-size: 22px;
    color: #262626;
    cursor: pointer;
    transition: color 0.15s, transform 0.15s;
}
.post-actions i:hover {
    transform: scale(1.15);
}
/* ---- BARRE DE NAV INSTAGRAM EN BAS ---- */
.insta-navbar {
    background: #fff;
    border-top: 1px solid #efefef;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 10px 0 20px;
    flex-shrink: 0;
}
.insta-navbar i {
    font-size: 22px;
    color: #262626;
    cursor: pointer;
    transition: opacity 0.2s;
}
.insta-navbar i:hover { opacity: 0.6; }
.insta-navbar .nav-avatar {
    width: 24px; height: 24px;
    border-radius: 50%;
    background: #C97A93;
    border: 2px solid #000;
}
@media (max-width: 768px) {
    .phone-mockup { width: 320px; }
    .phone-screen { height: 600px; }
    .temoignages { padding: 70px 20px 80px; }
}
@media (max-width: 400px) {
    .phone-mockup { width: 290px; }
    .phone-screen { height: 560px; }
}
/* ==================== MODAL VIDÉO ==================== */
.modal {
    display: none; /*La modal est cachée par défaut*/
    position: fixed;
    inset: 0; /*Couvre tout l'écran, même quand on scrolle*/
    background: rgba(0,0,0,0.92);
    z-index: 1000; /*Très haut pour être au-dessus de TOUT (nav=100, phone=200, etc.)*/
    justify-content: center;
    align-items: center; /*Centre la vidéo horizontalement et verticalement dans la modal*/
    padding: 20px;
}
.modal.active { display: flex; } /*Quand JavaScript ajoute la classe active, elle apparaît en flex (pour centrer le contenu)*/
.modal-content {
    position: relative;
    max-width: 420px;
    width: 95%;
}
#videoPlayer {
    width: 100%;
    border-radius: 10px;
    max-height: 80vh; /*La vidéo ne dépasse jamais 80% de la hauteur de l'écran → reste visible même sur petit écran*/
    display: block;
}
.modal-close {
    position: absolute;
    top: -42px; right: 0; /*Place la croix de fermeture juste AU-DESSUS de la vidéo*/
    color: rgba(255,255,255,0.7);
    font-size: 1.8rem;
    cursor: pointer;
    transition: color 0.2s;
    background: none;
    border: none; /*Enlève le style par défaut des boutons pour un design personnalisé*/
    line-height: 1;
}
.modal-close:hover { color: #fff; }
/* ==================== FOOTER ==================== */
footer {
    background: var(--bg);
    border-top: 1px solid var(--border); /*Ligne de séparation subtile en haut du footer*/
    padding: 60px 40px 40px;
    text-align: center;
}
.footer-brand {
    font-family: var(--font-display);
    font-style: italic;
    font-size: 1.8rem;
    font-weight: 400;
    color: var(--accent);
    margin-bottom: 28px;
    letter-spacing: 0.02em;
}
.footer-divider { /*Petite ligne rose décorative sous le nom de la marque*/
    width: 40px;
    height: 1px;
    background: var(--primary);
    margin: 0 auto 28px;
}
.footer-info {
    display: flex; /*Aligne l'icône et le texte sur la même ligne avec un espace entre eux 10px*/
    flex-direction: column;
    gap: 10px;
    margin-bottom: 36px;
}
.footer-info p {
    font-size: 0.85rem;
    font-weight: 300;
    color: var(--text-mid);
    letter-spacing: 0.04em;
    display: flex;
    align-items: center;
    justify-content: center; /*Centre le contenu de chaque paragraphe (icône + texte)*/
    gap: 10px;
}
.footer-info i { color: var(--primary); font-size: 0.8rem; width: 14px; }
.footer-info a { color: var(--text-mid); transition: color 0.3s; }
.footer-info a:hover { color: var(--primary); } /*Les liens deviennent roses au survol → feedback interactif*/
.footer-copy {
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
}}
@media (max-width: 480px) { footer { padding: 50px 24px 32px; } }
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
.reveal { /*Élément invisible et légèrement décalé vers le bas*/
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.7s ease, transform 0.7s ease; /*La transition entre les deux états dure 0.7 secondes avec une courbe douce*/
}
.reveal.visible { /*Éliment visible et à sa place*/
    opacity: 1;
    transform: translateY(0);
}
/*Combiné avec JavaScript (IntersectionObserver), ça crée un effet d'apparition fluide quand l'utilisateur scrolle.*/
</style>
</head>
<body>
<?php include "nav_menu.php"; ?>
<div class="nav-mobile" id="mobileNav">
    <button class="nav-mobile-close" onclick="document.getElementById('mobileNav').classList.remove('open')">&times;</button>
    <a href="#" onclick="document.getElementById('mobileNav').classList.remove('open')">Accueil</a>
    <a href="#prestations" onclick="document.getElementById('mobileNav').classList.remove('open')">Prestations</a>
    <a href="#temoignages" onclick="document.getElementById('mobileNav').classList.remove('open')">Témoignages</a>
    <a href="#contact" onclick="document.getElementById('mobileNav').classList.remove('open')">Contact</a>
    <a href="https://www.planity.com/nd-beauty-concept-69100-villeurbanne" target="_blank" rel="noopener" style="color:var(--primary)">Réserver</a>
</div>
<!-- ========== HERO ========== -->
<header class="hero">
    <div class="hero-content">
        <span class="hero-eyebrow">Institut de soin — Villeurbanne, Lyon</span>
        <h1>Head Spa Lyon<br><em>By F.</em></h1>
        <p class="hero-sub">Un art du soin inspiré de l'Asie</p>
        <a href="https://www.planity.com/nd-beauty-concept-69100-villeurbanne" class="btn" 
            target="_blank">Réservez un soin
        </a>
    </div>
    <div class="hero-scroll">
        <span>Découvrir</span>
        <i class="fa-solid fa-chevron-down"></i>
    </div>
</header>
<!-- ========== BIENVENUE ========== -->
<section class="bienvenue reveal">
    <span class="section-label">Notre philosophie</span>
    <h2>Bienvenue chez<br><em>Head Spa Lyon By F.</em></h2>
    <div class="bienvenue-divider"></div>
    <p>Au croisement des traditions asiatiques et d'une approche profondément intuitive du bien-être, je vous propose des soins uniques, pensés comme de véritables voyages sensoriels.</p>
    <p>Chaque rituel est une invitation à ralentir, à relâcher les tensions et à se reconnecter à soi, dans un cadre apaisant et enveloppant.</p>
    <p>Mes soins s'inspirent de techniques ancestrales venues du Japon et d'Asie, enrichies par une écoute attentive du corps et de l'énergie de chaque personne.</p>
</section>
<!-- ========== PRESTATIONS ========== -->
<section class="prestations reveal" id="prestations">
    <div class="prestations-header">
        <span class="section-label">Ce que nous proposons</span>
        <h2>Nos rituels de soins</h2>
    </div>
    <div class="presta-grid">
        <a href="hair-play.php" class="presta-card">
            <img loading="lazy" src="images/2026-03-06 155406.webp" alt="Soin Hair Play à Lyon">
            <div class="presta-card-label"><span>Hair Play</span><em>Découvrir le soin</em></div>
        </a>
        <a href="cryo-capillaire.php" class="presta-card">
            <img loading="lazy" src="images/IMG-20260306-WA0026.webp" alt="Cryothérapie Capillaire soin cheveux à Lyon">
            <div class="presta-card-label"><span>Cryothérapie Capillaire</span><em>Découvrir le soin</em></div>
        </a>
        <a href="head-spa.php" class="presta-card">
            <img loading="lazy" src="images/6f5g588rpo.webp" alt="Soin Head Spa à Lyon">
            <div class="presta-card-label"><span>Head Spa</span><em>Découvrir le soin</em></div>
        </a>
        <a href="kobido.php" class="presta-card">
            <img loading="lazy" src="images/5de2g1e5e.webp" alt="Soin Kobido à Lyon">
            <div class="presta-card-label"><span>Kobido</span><em>Découvrir le soin</em></div>
        </a>
        <a href="massage-intuitif.php" class="presta-card">
            <img loading="lazy" src="images/2q6d2g3e88.webp" alt="Massage Intuitif à Lyon">
            <div class="presta-card-label"><span>Massage Intuitif</span><em>Découvrir le soin</em></div>
        </a>
        <a href="massage-signature.php" class="presta-card">
            <img loading="lazy" src="images/p5e6r6sg1.webp" alt="Massage Signature à Lyon">
            <div class="presta-card-label"><span>Massage Signature</span><em>Découvrir le soin</em></div>
        </a>
    </div>
</section>
<!-- ========== TÉMOIGNAGES ========== -->
<section class="temoignages" id="temoignages">
    <div class="temoignages-header reveal">
        <h2>Les témoignages de nos clientes</h2>
        <p>Retrouvez-nous sur Instagram</p>
    </div>
    <!-- MOCKUP TÉLÉPHONE -->
    <div class="phone-wrapper reveal">
        <div class="phone-mockup">
            <!-- Boutons physiques décoratifs -->
            <div class="phone-btn-vol"></div>
            <div class="phone-btn-power"></div>
            <!-- Écran -->
            <div class="phone-screen">
                <!-- Barre du haut Instagram -->
                <div class="insta-topbar">
                    <span class="insta-username">headspalyon_byf</span>
                    <div class="insta-topbar-icons">
                        <i class="fa-regular fa-heart" aria-label = "Like"></i>
                        <i class="fa-regular fa-paper-plane" aria-label="Envoyer le message"></i>
                    </div>
                </div>
                <!-- Stories -->
                <div class="insta-stories">
                    <div class="story-item">
                        <div class="story-avatar">
                            <div class="story-avatar-inner">🌸</div>
                        </div>
                        <span class="story-label">Head Spa</span>
                    </div>
                    <div class="story-item">
                        <div class="story-avatar">
                            <div class="story-avatar-inner">✨</div>
                        </div>
                        <span class="story-label">Kobido</span>
                    </div>
                    <div class="story-item">
                        <div class="story-avatar">
                            <div class="story-avatar-inner">❄️</div>
                        </div>
                        <span class="story-label">Cryo</span>
                    </div>
                    <div class="story-item">
                        <div class="story-avatar">
                            <div class="story-avatar-inner">💆</div>
                        </div>
                        <span class="story-label">Massage</span>
                    </div>
                </div>
                <!-- Feed : les posts sont injectés par script.js -->
                <div class="insta-feed" id="grid"></div>
            </div><!-- /phone-screen -->
            <!-- Encoche dynamique (se place par-dessus l'écran) -->
            <div class="phone-notch"></div>
        </div><!-- /phone-mockup -->
    </div><!-- /phone-wrapper -->
    <!-- Lien Instagram sous le téléphone -->
    <div style="text-align:center; margin-top:36px;">
        <a href="https://www.instagram.com/headspalyon_byf" target="_blank"
           style="display:inline-flex; align-items:center; gap:10px;
                  font-family:'Raleway',sans-serif; font-size:11px; font-weight:400;
                  letter-spacing:0.2em; text-transform:uppercase; color:rgba(255,255,255,0.65);
                  border:1px solid rgba(255,255,255,0.2); padding:12px 28px; border-radius:30px;
                  transition:all 0.3s ease;">
            <i class="fa-brands fa-instagram" style="font-size:16px;" aria-label="Voir Instagram"></i>
            Suivre sur Instagram
        </a>
    </div>
    <!-- Modal vidéo -->
    <div class="modal" id="modal">
        <div class="modal-content">
            <button class="modal-close" id="closeBtn">&times;</button>
            <video id="videoPlayer" controls></video>
        </div>
    </div>
</section>
<!-- ========== FOOTER ========== -->
<footer id="contact">
    <div class="footer-brand">Head Spa Lyon By F.</div>
    <div class="footer-divider"></div>
    <div class="footer-info">
        <p><i class="fa-solid fa-location-dot" aria-label="Voir la localisation"></i>34 place des Maisons Neuves, 69100 Villeurbanne</p>
    </div>
    <p class="footer-copy">&copy; 2026 Head Spa Lyon By F. — Tous droits réservés.</p>
</footer>
<!-- ========== WHATSAPP FLOAT ========== -->
<a href="https://wa.me/33772293748?text=Bonjour%20je%20souhaite%20avoir%20des%20informations"
   class="whatsapp-float"
   target="_blank"
   aria-label="Contact WhatsApp">
    <img loading="lazy" src="images/10_29_00.webp" alt="logo WhatsApp pour écrire un message">
    <span class="whatsapp-text">
        Écrivez-nous sur WhatsApp
    </span>
</a>
<!-- ========== SCRIPTS ========== -->
<!-- 1. Scroll reveal (pas de conflit, n'utilise pas modal/videoPlayer/closeBtn) -->
<script>
    const reveals = document.querySelectorAll('.reveal');
//méthode qui cherche TOUS les éléments ayant la classe .reveal dans la page et les retourne sous forme de NodeList (comme un tableau)
    const revealObserver = new IntersectionObserver((entries) => { //(entries) = Fonction callback : une fonction qui sera automatiquement appelée par le navigateur à chaque fois qu'un élément observé change de visibilité. entries = liste des changements détectés. 
    //Crée un observateur : un outil moderne du navigateur qui surveille quand des éléments entrent ou sortent de l'écran (viewport).      
    //fonction callback : traiter chaque élément détecté
            entries.forEach(e => { //parcours chaque entrée (e) dans la liste des changements
            //e= un objet "Entry" qui contient des infos sur un éléments observé (est il visible, a quel pourcentage ?)
            if (e.isIntersecting) {//Vérifie si l'élément est en train d'entrer dans l'écran (et non d'en sortir). isIntersecting = true ou false.
                e.target.classList.add('visible'); //e.target = L'élément HTML réel qui est observé (ex: la <section class="bienvenue reveal">).
                //Ajoute la classe CSS visible à l'élément → en CSS, .reveal.visible { opacity: 1; transform: translateY(0); } → l'élément apparaît avec une animation.
                revealObserver.unobserve(e.target); //Arrête de surveiller cet élément une fois qu'il est apparu. Utile pour la performance : pas besoin de continuer à l'observer s'il a déjà fait son animation.
            }
        });
    }, { threshold: 0.12 }); //	
//Options de configuration : threshold: 0.12 signifie "déclenche la callback quand 12% de l'élément est visible dans l'écran".
    //foreach Parcourt chaque élément r dans la liste reveals (les éléments avec la classe .reveal).
    reveals.forEach(r => revealObserver.observe(r)); //Dit à l'observateur : "Surveille cet élément r !". À partir de maintenant, le navigateur va automatiquement appeler la callback quand r entre/sort de l'écran.
</script>
<!-- 2. script.js gère TOUT le reste : création des cartes vidéo + ouverture/fermeture modal -->
<script src="js/script.js"></script>
</body>
</html>