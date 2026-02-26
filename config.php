<?php
//---------PDO = classe PHP pour se connecter à plusieurs types de BDD
//---------dsn = Data Source Name = les infos de connexion
//---------mysql = type de BDD
//---------host = machine (localhost = ton ordinateur)
//---------dbname = nom de la base de données

$dsn = "mysql:host=localhost;dbname=head_spa;";
$user = "root";
$pwd = '';

//---------
//try = essayer de se connecter
//catch = si ça marche pas, afficher un message d'erreur
try {
    $pdo = new PDO($dsn, $user, $pwd);
    // echo "Connexion OK !"; // Tu peux décommenter pour tester
} catch (PDOException $e) {
    echo "Erreur de connexion à la BDD";
}
?>