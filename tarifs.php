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
    <meta name="description" content="Tarifs — Head Spa à Villeurbanne (Lyon)">
    <title>Tarifs — Head Spa à Villeurbanne (Lyon) </title>
    <link rel="preconnect"href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/webp" href="images/6z9f45s3fdf.webp">
    <link rel="stylesheet" href="css/tarifs.css">
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
                <!--nl2br(...) : fonction PHP qui transforme les sauts de ligne (\n) en balises <br> HTML → préserve le formatage du texte.-->
                <div class="tarif-footer">
                    <span class="tarif-duree">
                        <i class="fa-regular fa-clock" aria-label="Durée"></i>
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
    <a href="https://www.planity.com/nd-beauty-concept-69100-villeurbanne" rel="noopener" target="_blank" class="btn">
        Réservez un soin
    </a>
</div>
<?php endif; ?> <!--Ferme le if (!empty($services)) du début -->
<!-- ========== FOOTER ========== -->
<footer>
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
    rel="noopener"
   aria-label="Contacter sur WhatsApp">
    <img loading="lazy" src="images/10_29_00.webp" alt="Contacter sur WhatsApp">
    <span class="whatsapp-text">
        Écrivez-nous sur WhatsApp
    </span>
</a>
<!-- ========== SCRIPT SCROLL REVEAL ========== -->
<script>
// Je sélectionne tous les éléments à animer au scroll
var elements = document.querySelectorAll('.tarif-card, .fade');
/*méthode qui sélectionne tous les éléments correspondant au sélecteur CSS.*/
/*'.tarif-card, .fade' : sélecteur multiple → tous les éléments avec la classe tarif-card ou fade.*/
/* une NodeList (liste d'éléments du DOM) stockée dans elements.*/
// Je crée un observateur qui surveille quand un élément apparaît à l'écran
var observer = new IntersectionObserver(function(entries) { // on cree un callback qui va recevoir les entrées
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




<!-- <php → on passe en mode PHP
2. require → on charge la connexion BDD
3. $sql = "SELECT..." → on écrit la requête
4. $pdo->query() → on l'exécute
5. fetchAll() → on stocke les résultats dans $services
6. ?> → on repasse en HTML
7. <html>... → structure de base
8. <php if (!empty($services)) ?> → on vérifie qu'on a des données
9. foreach ($services as $ligne) → pour chaque soin :
10.   if (changement de catégorie) → on ouvre une nouvelle section
11.   <div class="tarif-card"> → on affiche la carte avec les données sécurisées
12. endforeach → fin de la boucle
13. "<php endif ?>" → fin de la condition
14. <script> → on ajoute l'animation au scroll en JS
15. </html> → fin du document -->