<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Empêche l'accès direct au script sans formulaire
    header("Location: inscription.html");
    exit;
}

session_start();

// Vérifie que tous les champs nécessaires sont présents

// Récupération des données du formulaire
$email = $_POST['email'];
$nom = $_POST['nom'];
$mot_de_passe = $_POST['mot_de_passe'];

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=localhost;dbname=archeo_it", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // Hash du mot de passe avant insertion
    $hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    // Insertion dans la base
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (email, mot_de_passe, nom) VALUES (?, ?, ?)");
    $stmt->execute([$email, $hash, $nom]);

    // Connexion automatique de l'utilisateur
    $_SESSION['utilisateur'] = [
        'email' => $email,
        'nom' => $nom
    ];

    // Redirection vers la page d'accueil
    header("Location: index.php");
    exit;

} catch (PDOException $e) {
    echo "Erreur de base de données : " . $e->getMessage();
    exit;
}
?>
