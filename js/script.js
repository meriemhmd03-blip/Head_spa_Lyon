// ----- MES VIDÉOS -----
// C'est une liste (tableau) qui contient les infos de chaque vidéo

/*déclaration de la cst mesVideos*/
const mesVideos = [ /*[] = tableau (array)*/
    {
        video: "vidéos/Copy 33Cef53a-5870-42C6-8B1b-Debc3299160f(3).webm",
        image: "images/2026-03-11 150816.webp"
    }, /*chaque élément = objet*/
    {
        video: "vidéos/Ff403d41d8fe4c96b718cfcf7feb479c.webm",
        image: "images/2026-03-11 151052.webp"
    },
    {
        video: "vidéos/Copy 76Bba345-Eaaf-4960-Ad3a-C4925aab6f6c(1).webm",
        image: "images/2026-03-11 151238.webp"
    },
    {
        video: "vidéos/Copy 522Dadec-20C8-4A3b-A03b-2C26edf5d1b1(1).webm",
        image: "images/2026-03-11 151401.webp"
    },
    {
        video: "vidéos/Copy 6385Bb81-E5bb-40Ee-98B8-80E158bcd2a0(1).webm",
        image: "images/2026-03-11 151457.webp"
    },
    {
        video: "vidéos/Img 6778.webm",
        image: "images/2026-03-11 152008.webp"
    },
    {
        video: "vidéos/Img 6779.webm",
        image: "images/2026-03-11 152217.webp"
    },
    {
        video: "vidéos/Img 6936.webm",
        image: "images/2026-03-11 152309.webp"
    },
    {
        video: "vidéos/Img 6941.webm",
        image: "images/2026-03-11 152511.webp"
    },
    {
        video: "vidéos/Img 7112.webm",
        image: "images/2026-03-11 152553.webp"
    },
    {
        video: "vidéos/Img 7209.webm",
        image: "images/2026-03-11 152745.webp"
    },
    {
        video: "vidéos/Img 9295 (1).webm",
        image: "images/2026-03-11 152828.webp"
    },

];


// ----- JE RÉCUPÈRE MES ÉLÉMENTS HTML -----
// Je cherche dans la page les éléments dont j'ai besoin
/*document = objet global qui représente toute la page HTML, ca permet de manipuler le DOM*/

var feed     = document.getElementById("grid");        // la zone où afficher les posts/ cherche un élément HTML dont l'id est grid
var modal    = document.getElementById("modal");       // la fenêtre qui s'ouvre pour la vidéo
var lecteur  = document.getElementById("videoPlayer"); // le lecteur vidéo
var fermer   = document.getElementById("closeBtn");    // le bouton croix pour fermer


// ----- JE CRÉE LES POSTS -----
// Je parcours chaque vidéo de ma liste et je crée un post pour chacune

for (var i = 0; i < mesVideos.length; i++) { //Répète le bloc de code tant que la condition est vraie // var i =0 crée une variable i qui commenec à 0, c'est la position actuelle dans le tableau
// continue tant que i est strictement inférieur au nombre d'éléments dans mesVideos //length = propriété qui donne la taille du tableau
//après chaque tour de boucle, ajoute 1 à i


    var uneVideo = mesVideos[i]; // la vidéo en cours //Récupère l'élément à la position i dans le tableau et le stocke dans uneVideo pour plus de lisibilité.

    // Je crée une div pour ce post
    var post = document.createElement("div"); //Crée un nouvel élément HTML <div> en mémoire (pas encore dans la page).
    post.className = "insta-post"; //Ajoute la classe CSS insta-post à cet élément

    // Je remplis le post avec le HTML d'un post Instagram simplifié =construction du HTML du post
    post.innerHTML = //Injecte du code HTML sous forme de chaîne de caractères à l'intérieur de l'élément post.
        // L'image cliquable
        '<div class="post-image">' + // '...' + '...' : Concaténation : assemble plusieurs morceaux de texte avec l'opérateur +.
            '<img src="' + uneVideo.image + '" alt="Témoignage">' +
            '<div class="post-play"><i class="fa-solid fa-play"></i></div>' +
        '</div>' +

        // Les boutons like / commentaire / partage / enregistrer
        '<div class="post-actions">' +
            '<div class="post-actions-gauche">' +
                '<i class="fa-regular fa-heart js-like"></i>' + //Classe spéciale pour cibler cet élément en JS plus tard (le préfixe js- indique "cette classe sert au JavaScript").
                '<i class="fa-regular fa-comment"></i>' +
                '<i class="fa-regular fa-paper-plane"></i>' +
            '</div>' +
            '<i class="fa-regular fa-bookmark"></i>' +
        '</div>';

    // Quand on clique sur l'image → on ouvre la vidéo
    var image = post.querySelector(".post-image");//Cherche le premier élément avec la classe .post-image à l'intérieur de post. Retourne l'élément ou null.
    image.addEventListener("click", ouvrirVideo(uneVideo.video)); //Attache un écouteur d'événement : quand l'événement "click" se produit sur cet élément, exécute la fonction donnée.

    // Quand on clique sur le cœur → il devient rouge
    var coeur = post.querySelector(".js-like"); //
    coeur.addEventListener("click", function() { //fonction anonyme (sans nom) qui sera exécutée à chaque clic sur le cœur.
        // Si le cœur est vide (regular) → je le rends plein et rouge
        if (this.classList.contains("fa-regular")) {
            this.classList.remove("fa-regular");
            this.classList.add("fa-solid");
            this.style.color = "#ed4956";
        } else {
            // Sinon je le remet vide
            this.classList.remove("fa-solid");
            this.classList.add("fa-regular");
            this.style.color = "";
        }
    });

    //État initial : classe "fa-regular" (cœur vide)
    //↓ Clic
    //→ On enlève "fa-regular", on ajoute "fa-solid" (cœur plein) + couleur rouge
    //↓ Clic à nouveau
    //→ On enlève "fa-solid", on remet "fa-regular" + couleur par défaut


    // J'ajoute le post dans le feed
    feed.appendChild(post); // insertion dans le DOM - il apparait à l'écran
}


// ----- FONCTION OUVRIR LA VIDÉO -----
// J'utilise une fonction intermédiaire pour éviter un problème classique de débutant avec les boucles et les événements (le problème de la closure)
//Une fonction qui "se souvient" des variables de son environnement de création, même après que cet environnement ait disparu.


function ouvrirVideo(src) { //src : La valeur de uneVideo.video est "capturée" au moment où ouvrirVideo() est appelée dans la boucle.
    return function() { //On ne retourne pas le résultat de l'exécution, mais la fonction elle-même, qui sera exécutée plus tard au clic.
        lecteur.src = src; //Change la source du lecteur vidéo (<video>) vers le nouveau fichier MP4.
        lecteur.load(); //Force le navigateur à charger la nouvelle vidéo (utile si on change de source).
        lecteur.play(); //Lance la lecture automatiquement.
        modal.classList.add("active"); //Ajoute la classe active à la modal → en CSS, .modal.active { display: flex } la rend visible.
    }; 
}


// ----- FERMER LA VIDÉO -----
// Quand on clique sur la croix

fermer.addEventListener("click", function() {
    lecteur.pause(); //Met la vidéo en pause (arrête la lecture)
    lecteur.src = ""; //Réinitialise la source → libère la mémoire et évite que la vidéo continue en fond.
    modal.classList.remove("active"); //Enlève la classe active → la modal redevient display: none via le CSS.
});

// Quand on clique sur le fond noir derrière la vidéo

modal.addEventListener("click", function(e) { //L'événement click passe un objet e (event) qui contient des infos sur le clic.
    if (e.target === modal) { //L'élément réellement cliqué //N'exécute le code que si on a cliqué directement sur la modal (le fond noir), pas sur la vidéo à l'intérieur.
        lecteur.pause();
        lecteur.src = "";
        modal.classList.remove("active");
    }
});

// Quand on appuie sur Échap

document.addEventListener("keydown", function(e) { //Écoute les appuis sur les touches du clavier sur toute la page.
    if (e.key === "Escape") { //Propriété qui contient le nom de la touche pressée  //N'exécute le code que si la touche Échap a été pressée.
        lecteur.pause();
        lecteur.src = "";
        modal.classList.remove("active");
    }
});