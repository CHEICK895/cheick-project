<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une actualité</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Lien vers Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        
            <h2 class="mb-4 text-center text-primary">Ajouter une nouvelle actualité</h2>
            <form action="upload_traitement.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="titre" class="form-label">Titre :</label>
                    <input type="text" class="form-control" id="titre" name="titre" required>
                </div>
                <div class="mb-3">
                    <label for="contenu" class="form-label">Contenu :</label>
                    <textarea class="form-control" id="contenu" name="contenu" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image :</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">📤 Publier</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

