 <?php
session_start();
$estConnecte = isset($_SESSION['utilisateur']); // change si ton système utilise autre chose

// Connexion à la base de données
$conn = new mysqli("localhost", "root", "", "archeo_it");
if ($conn->connect_error) die("Erreur BDD : " . $conn->connect_error);

$pdo = new PDO('mysql:host=localhost;dbname=archeo_it', 'root', '');

// Préparation de la requête
if ($estConnecte) {
    $stmt = $pdo->prepare("SELECT * FROM actualites ORDER BY date_pub DESC");
} else {
    $stmt = $pdo->prepare("SELECT * FROM actualites ORDER BY date_pub DESC LIMIT 3");
}

$stmt->execute();
$actualites = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="accueil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="accueil.css">
</head>
<body>
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <i class="bi bi-compass"></i> Archéo-IT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="accueil.php">Accueil</a>
        <a class="nav-link" href="chantier.php">Chantier</a>
        <a class="nav-link" href="contact.php">Contact</a>
      <?php if (isset($_SESSION['utilisateur'])): ?>
    <span class="nav-link disabled">Bienvenue, <?= htmlspecialchars($_SESSION['utilisateur']['nom']) ?> 👋</span>
    <a class="nav-link" href="deconnexion.php">Déconnexion</a>
<?php else: ?>
    <a class="nav-link" href="inscription.html">Inscription</a>
    <a class="nav-link" href="connexion.html">Connexion</a>
<?php endif; ?>

        <a class="nav-link disabled" aria-disabled="true"></a>
      </div>
    </div>
  </div>
</nav>
  <header>
  <video autoplay muted loop style="width: 100%; height: 550px; object-fit: cover;">
  <source src="video/Generated File June 02, 2025 - 11_59AM.mp4" type="video/mp4">
</video>



</header>


<div class="container my-5">
  <div class="row g-0">    
    <!-- Carte 1 : Texte uniquement -->
    <div class="col-md-6">
      <div class="bg-white p-4 d-flex flex-column justify-content-center h-100 border-end border-light-subtle" style="height: 300px;">
       <h2 class="mb-3">Qui sommes-nous ?</h2>
        <p class="lead">Archéo-IT est une association française qui mélange archéologie traditionnelle et nouvelles technologies.</p>
        <p>Nous utilisons des drones, des scanners 3D et l'intelligence artificielle pour étudier les sites archéologiques avec plus de précision.</p>
        <p>Notre mission : préserver et faire découvrir l'histoire de France grâce aux outils modernes.</p>
      </div>
    </div>
    <!-- Carte 2 : Image uniquement avec effet au survol -->
    <div class="col-md-6">
      <div class="h-100" style="height: 300px; overflow: hidden;">
        <img src="images/va (1).jpg" 
             class="img-fluid h-100 w-100 object-fit-cover hover-zoom" 
             alt="Image carte 2">
      </div>
    </div>

  </div>
</div>
<section class="section-bleue">
        <div class="container-bleue">
            <h2 class="text-center mb-5 display-5 fw-bold">L'Archéologie en France</h2>
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="gros-chiffre">45,000</div>
                    <p>Sites archéologiques</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="gros-chiffre">2,800</div>
                    <p>Archéologues professionnels</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="gros-chiffre">150</div>
                    <p>Fouilles par an</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="gros-chiffre">49</div>
                    <p>Sites UNESCO</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container my-5" id="technologies">
        <h2 class="text-center display-5 fw-bold mb-5">
            <i class="bi bi-gear text-primary"></i> Nos Technologies
        </h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card carte-tech h-100 border-0  text-center p-4">
                    <i class="bi bi-robot icone-bleue mb-3"></i>
                    <h4>Intelligence Artificielle</h4>
                    <p>L'IA nous aide à analyser automatiquement les objets trouvés lors des fouilles et à identifier leur âge et leur origine.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card carte-tech h-100 text-center p-4">
                    <i class="bi bi-camera icone-bleue mb-3"></i>
                    <h4>Photogrammétrie 3D</h4>
                    <p>Nous créons des modèles 3D précis des objets et sites archéologiques pour les étudier sous tous les angles.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card carte-tech h-100 text-center p-4">
                    <i class="bi bi-eye-fill mb-3"></i>
                    <h4>Drones et LiDAR</h4>
                    <p>Les drones nous permettent de cartographier les sites et de découvrir des structures cachées sous la végétation.</p>
                </div>
            </div>
        </div>
        </div>
    </section>
     <!-- Section grise : Histoire de l'archéologie française -->
    <section class="chronologie">
        <div class="container ">
            <h2 class="text-center display-5 fw-bold mb-5">
                <i class="bi bi-clock-history text-success"></i> Dates Importantes
            </h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="text-primary">1940 - Grotte de Lascaux</h5>
                            <p>Découverte des célèbres peintures rupestres de Lascaux en Dordogne, vieilles de 17 000 ans.</p>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="text-primary">1994 - Grotte Chauvet</h5>
                            <p>Découverte de la grotte Chauvet avec les plus anciennes peintures du monde (36 000 ans).</p>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="text-primary">2001 - Création de l'INRAP</h5>
                            <p>Création de l'Institut National de Recherches Archéologiques Préventives pour protéger notre patrimoine.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-primary">2020 - Archéologie numérique</h5>
                            <p>Boom des technologies numériques : IA, drones, scanners 3D révolutionnent l'archéologie.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Actualités -->
<h2 class="text-center display-5 fw-bold mb-5"><i class="bi bi-newspaper text-info"></i> Actualités</h2>         
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($actualites as $actu): ?>
        <div class="col">
            <div class="card h-100">
                <img src="<?= htmlspecialchars($actu['image_path']) ?>" class="card-img-top" alt="Image actu" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($actu['titre']) ?></h5>
                    <p class="card-text"><?= nl2br(htmlspecialchars($actu['contenu'])) ?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Publié le <?= date("d/m/Y", strtotime($actu['date_pub'])) ?></small>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<section id="section-citation">
        <div class="container text-center">
            
                <p class="display-6 fw-light">
                    "L'archéologie est l'art de faire parler les pierres"
                </p><br>
                    <p>André Leroi-Gourhan, archéologue français </p>
        </div>
    </section>

<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="foot"></i> Archéo-IT</h5>
                    <p>Association dédiée à l'archéologie moderne et aux nouvelles technologies.</p>
                </div>
            </div>
             <div class="col-md-6">
                <h3>Suivez-nous</h3>
                <ul class="reseau">
                    <li><a href="https://facebook.com/votresite" target="_blank">Facebook</a></li>
                    <li><a href="https://twitter.com/votresite" target="_blank">Twitter</a></li>
                    <li><a href="https://instagram.com/votresite" target="_blank">Instagram</a></li>
                    <li><a href="https://linkedin.com/in/votresite" target="_blank">LinkedIn</a></li>
                </ul>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; 2025 Archéo-IT. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>

