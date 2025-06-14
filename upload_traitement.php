<?php
$titre = $_POST['titre'];
$contenu = $_POST['contenu'];
$target_dir = "images/";

if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$image_name = basename($_FILES["image"]["name"]);
$target_file = $target_dir . $image_name;

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $conn = new mysqli("localhost", "root", "", "archeo_it");
    if ($conn->connect_error) die("Erreur connexion : " . $conn->connect_error);

    $stmt = $conn->prepare("INSERT INTO actualites (titre, contenu, image_path) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $titre, $contenu, $target_file);
    $stmt->execute();

    echo "✅ Actualité ajoutée avec succès ! 🎉";
    $stmt->close();
    $conn->close();
} 
else {
    echo "❌ Erreur lors du téléchargement de l'image.";
}
?>
