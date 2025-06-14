<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
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
                    <a class="nav-link" href="index.php">Accueil</a>
                    <a class="nav-link" href="chantier.php">Chantier</a>
                    <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                    <a class="nav-link disabled" aria-disabled="true"></a>
                </div>
            </div>
        </div>
    </nav>
 <section class="section-contact">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">
                <i class="bi bi-envelope"></i> Contactez-nous
            </h1>
            <p class="lead">
                Une question sur nos recherches ? Envie de rejoindre nos missions ?<br>
                L'équipe d'Archéo-IT vous répond rapidement !
            </p>
        </div>
    </section>

    <div class="containerM">
        <div class="card-header"> 
         <h1>Contactez-nous</h1>
        </div>
        
        <!-- Message de succès (caché par défaut) -->
        <div id="successMessage" class="success-message">
            Merci ! Votre message a été envoyé avec succès.
        </div>
        
        <!-- Formulaire de contact -->
         <form id="contactForm" action="traitement.php" method="POST">
            <div class="form-group">
                <label for="nom">Nom complet *</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="tel" id="telephone" name="telephone" placeholder="Optionnel">
            </div>
            
            <div class="form-group">
        <label for="sujet">Sujet *</label>
        <select id="sujet" name="sujet" required>
            <option value="">-- Choisissez un sujet --</option>
            <option value="infos">Demande d’infos</option>
            <option value="rendezvous">Demande de Rendez-vous</option>
            <option value="autre">Autre</option>
        </select>
    </div>

            
            <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" name="message" required placeholder="Écrivez votre message ici..."></textarea>
            </div>
            
            <button type="submit" class="btn">Envoyer le message</button>
        </form>
        
        <!-- Informations de contact -->
        <div class="contact-info">
            <h3>Nos coordonnées</h3>
            <div class="contact-item">
                <strong>📧 Email :</strong> contact@monsite.fr
            </div>
            <div class="contact-item">
                <strong>📞 Téléphone :</strong> 01 23 45 67 89
            </div>
            <div class="contact-item">
                <strong>📍 Adresse :</strong> 123 Rue de la Paix, 75000 Paris
            </div>
            <div class="contact-item">
                <strong>🕒 Horaires :</strong> Lun-Ven 9h-18h
            </div>
        </div>
    </div>
    <script>
            // Récupérer les valeurs du formulaire
            var nom = document.getElementById('nom').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;
            
            // Vérification simple
            if (nom && email && message) {
                // Afficher le message de succès
                document.getElementById('successMessage').style.display = 'block';
                
                // Réinitialiser le formulaire
                document.getElementById('contactForm').reset();
                
                // Faire défiler vers le haut pour voir le message
                window.scrollTo(0, 0);
                
                // Cacher le message après 5 secondes
                setTimeout(function() {
                    document.getElementById('successMessage').style.display = 'none';
                }, 5000);
            }
        });
        
        // Effet visuel sur les champs quand on tape
        var inputs = document.querySelectorAll('input, textarea');
        inputs.forEach(function(input) {
            input.addEventListener('input', function() {
                if (this.value.length > 0) {
                    this.style.borderColor = '#4CAF50';
                } else {
                    this.style.borderColor = '#ddd';
                }
            });
        });
    </script>
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