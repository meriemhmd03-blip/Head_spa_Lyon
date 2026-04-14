<?php
// ✅ Config BDD pour O2Switch (avec préfixe bufa6866_)
$dsn = "mysql:host=localhost;dbname=bufa6866_monspalyon;charset=utf8mb4";
$user = "bufa6866_monspalyon_user";
$pwd = "P@ss9Km#L2xQ";

try {
    $pdo = new PDO($dsn, $user, $pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En production : jamais d'erreurs détaillées
    die("Erreur de connexion à la base de données.");
}
?>