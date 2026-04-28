<?php
require 'config.php';
$sql = "SELECT 
            prestations.nom_categorie AS categorie, 
            sous_prestation.nom, 
            sous_prestation.description, 
            sous_prestation.duree, 
            sous_prestation.prix 
        FROM sous_prestation 
 
        INNER JOIN prestations ON sous_prestation.presta_id = prestations.IdPresta 
        ORDER BY prestations.IdPresta";


$stmt = $pdo->query($sql);
$services = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tarifs des soins Head Spa Lyon By F. à Villeurbanne : Head Spa japonais, Kobido, massage intuitif et cryothérapie capillaire. Découvrez nos prestations et réservez votre soin.">
    <title>Tarifs Head Spa Lyon | Soins japonais & massage à Villeurbanne</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/webp" href="images/6z9f45s3fdf.webp" width="721" height="719">
    <link rel="preload" as="image" href="images/relaxation-3065579_1280.webp">
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
    <?php if (!empty($services)): ?>
        <div class="tarifs-container">
            <?php
            $currentCategorie = null;
            foreach ($services as $ligne):
                if ($currentCategorie !== $ligne['categorie']):
                    if ($currentCategorie !== null) echo '</div></div>';
                    $currentCategorie = $ligne['categorie'];
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

                    <?php endforeach;
                if ($currentCategorie !== null) echo '</div></div>'; ?>
                        </div><!-- /tarifs-container -->

                        <!-- ========== CTA BAS ========== -->
                        <div class="tarifs-cta fade">
                            <p>Prête à vous offrir un moment rien qu'à vous ?</p>
                            <a href="https://www.planity.com/nd-beauty-concept-69100-villeurbanne" rel="noopener" target="_blank" class="btn">
                                Réservez un soin
                            </a>
                        </div>
                    <?php endif; ?>
                    <!-- ========== FOOTER ========== -->
                    <footer>
                        <div class="footer-brand">Head Spa Lyon By F.</div>
                        <div class="footer-divider"></div>
                        <div class="footer-info">
                            <p><i class="fa-solid fa-location-dot" aria-label="Voir la localisation"></i>34 place des Maisons Neuves, 69100 Villeurbanne</p>
                        </div>
                        <p class="footer-copy">Copyright &copy; 2026 Head Spa Lyon By F.</p>
                        <a class="footer-lien"
                            href="https://wa.me/33761525227?text=Bonjour%20je%20souhaiterais%20en%20savoir%20plus%20sur%20vos%20services%20de%20cr%C3%A9ation%20de%20site%20web."
                            target="_blank"
                            rel="noopener"
                            aria-label="Nous contacter sur WhatsApp">
                            Site réalisé par <span class="underline">CodeWithMeriem</span></a>
                    </footer>
                    <!-- ========== WHATSAPP FLOAT ========== -->
                    <a href="https://wa.me/33772293748?text=Bonjour%20je%20souhaiterais%20en%20savoir%20plus%20sur%20vos%20prestations."
                        class="whatsapp-float"
                        target="_blank"
                        rel="noopener"
                        aria-label="Contacter sur WhatsApp">
                        <img loading="lazy" src="images/10_29_00.webp" alt="Contacter sur WhatsApp" width="1024" height="1024">
                        <span class="whatsapp-text">
                            Écrivez-nous sur WhatsApp
                        </span>
                    </a>
                    <!-- ========== SCRIPT SCROLL REVEAL ========== -->
                    <script>
                        var elements = document.querySelectorAll('.tarif-card, .fade');
                        var observer = new IntersectionObserver(function(entries) {
                            for (var i = 0; i < entries.length; i++) {
                                if (entries[i].isIntersecting) {
                                    entries[i].target.classList.add('visible');
                                }
                            }
                        }, {
                            threshold: 0.1
                        });
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