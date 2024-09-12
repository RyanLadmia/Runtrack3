<?php
// users.php

// Paramètres de connexion
$host = 'localhost';
$db = 'utilisateurs'; // Nom de la base de données
$user = 'root'; // Nom d'utilisateur MySQL
$pass = ''; // Mot de passe MySQL (souvent vide en local)

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparer et exécuter la requête pour récupérer les utilisateurs
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs");
    $stmt->execute();

    // Récupérer tous les résultats sous forme de tableau associatif
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Afficher les résultats au format JSON
    header('Content-Type: application/json');
    echo json_encode($users);

} catch (PDOException $e) {
    // En cas d'erreur, afficher le message d'erreur
    echo 'Erreur : ' . $e->getMessage();
}
?>
