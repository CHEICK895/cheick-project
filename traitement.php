<?php
// Connexion à la base de données
$host = 'localhost';
$dbname = 'contact_db';
$username = 'root';  // à adapter selon ton serveur
$password = '';      // à adapter aussi

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Récupération des données du formulaire
$nom = $_POST['nom'] ?? '';
$email = $_POST['email'] ?? '';
$telephone = $_POST['telephone'] ?? '';
$sujet = $_POST['sujet'] ?? '';
$message = $_POST['message'] ?? '';

// Insertion dans la base de données
$sql = "INSERT INTO messages (nom, email, telephone, sujet, message) VALUES (?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nom, $email, $telephone, $sujet, $message]);

// Redirection ou message de confirmation
echo "Message envoyé avec succès !";
?>
