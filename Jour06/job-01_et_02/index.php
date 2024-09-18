<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaPlateforme_</title>
    <!-- Lien vers Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Lien vers Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Lien vers jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Lien vers Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Lien vers le fichier CSS personnalisé -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LPTF</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" id="accueilLink" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Units</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Skills</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <h1>LaPlateforme_</h1>

    <div class="container mt-4">
        <div class="row">
            <!-- Colonne de gauche (image et description) -->
            <div class="col-md-3 side-bar">
                <h4>Un Papillon</h4>
                <img src="papillon.jpg" alt="image d'un Papillon" class="img-fluid">
                <p>Un papillon, c'est un peu comme une chenille, mais avec des ailes. Ne pas ingérer.</p>
                <button class="btn btn-primary w-100" id="orderButterflyBtn">Commander votre propre papillon</button>
            </div>

            <!-- Colonne du milieu (contenu principal) -->
            <div class="col-md-6" id="ava">
                <h2>Bonjour, monde!</h2>
                <p>Il existe plusieurs visions du terme :</p>
                <ul>
                    <li>Le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</li>
                    <li>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</li>
                </ul><br>
                <p>Le sens étendu désigne l'univers dans son ensemble.</p>
                <button class="btn reboot-btn">Rebooter le Monde</button>
                <nav aria-label="Page navigation example" class="mt-3">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="First">
                                <i class="bi bi-chevron-double-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Last">
                                <i class="bi bi-chevron-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Colonne de droite (liste) -->
            <div class="col-md-3 sidebar-right">
                <ul class="list-group">
                    <li class="list-group-item" id="baba">Limbes</li>
                    <li class="list-group-item" id="baba">Luxure</li>
                    <li class="list-group-item" id="baba">Gourmandise</li>
                    <li class="list-group-item" id="baba">Avarice</li>
                    <li class="list-group-item" id="baba">Colère</li>
                    <li class="list-group-item" id="baba">Hérésie</li>
                    <li class="list-group-item" id="baba">Violence</li>
                    <li class="list-group-item" id="baba">Ruse et Tromperie</li>
                    <li class="list-group-item" id="baba">Trahison</li>
                    <li class="list-group-item" id="baba">Internet Explorer</li>
                </ul>
            </div>
        </div>

        <!-- Barre de progression avec boutons pour augmenter/diminuer -->
        <div class="row mt-4">
            <div class="col-12">
                <h5 id="Install">Installation de AI 9000</h5>
                <div class="progress-container">
                    <button id="decreaseButton" class="progress-control">
                        <i class="bi bi-arrow-bar-left"></i>
                    </button>
                    <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 70%;" id="progressBar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                    <button id="increaseButton" class="progress-control">
                        <i class="bi bi-arrow-bar-right"></i>
                    </button>
                </div>
            </div>
        </div><br>

        <!-- Disposition gauche-droite du formulaire et email -->
        <div class="row mt-4">
            <!-- Colonne de gauche (réduite à la moitié de la fenêtre) -->
            <div class="col-md-6">
                <h5>Recevez votre copie gratuite d'internet 2!</h5>
                <form>
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="login" placeholder="Login">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                            <div class="input-group-append">
                                <span class="input-group-text">@exemple.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="crypto" class="form-label">URL des Internets 2 et 2.1 Beta</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">DogeCoin</span>
                            </div>
                            <input type="text" class="form-control" id="crypto">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">https://133t.lptf/dkwb/berlusconimkt/</span>
                            </div>
                            <input type="text" class="form-control" id="url">
                        </div>
                    </div>
                </form>
            </div>

            <!-- Colonne de droite (inchangée) -->
            <div class="col-md-4" id="fizz">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email">
                        <small>We'll never share your email with anyone else.</small>
                    </div><br>
                    <div>
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div><br>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkmeout">
                        <label class="form-check-label" for="checkmeout">Check me out</label>
                    </div><br>
                    <button type="submit" class="btn btn-primary w-100">Submit</button><br><br>
                </form>
            </div>
        </div>
    </div>

    <!-- Modale de confirmation d'achat -->
    <div class="modal fade" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="purchaseModalLabel">Confirmation d'achat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Votre commande pour un papillon a été confirmée. Merci pour votre achat !
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Utilisation de jQuery pour rediriger le lien "Accueil"
        $('#accueilLink').on('click', function(e) {
            e.preventDefault(); // Empêche le comportement par défaut
            window.location.href = "https://laplateforme.io"; // Redirige vers La Plateforme
        });

        // Gestion de la barre de progression
        document.getElementById('increaseButton').addEventListener('click', function() {
            var progressBar = document.getElementById('progressBar');
            var currentValue = parseInt(progressBar.getAttribute('aria-valuenow'));
            if (currentValue < 100) {
                currentValue += 10;
                progressBar.style.width = currentValue + '%';
                progressBar.setAttribute('aria-valuenow', currentValue);
                progressBar.textContent = currentValue + '%';
            }
        });

        document.getElementById('decreaseButton').addEventListener('click', function() {
            var progressBar = document.getElementById('progressBar');
            var currentValue = parseInt(progressBar.getAttribute('aria-valuenow'));
            if (currentValue > 0) {
                currentValue -= 10;
                progressBar.style.width = currentValue + '%';
                progressBar.setAttribute('aria-valuenow', currentValue);
                progressBar.textContent = currentValue + '%';
            }
        });

        // Gestion du bouton de commande du papillon pour afficher la modale
        $('#orderButterflyBtn').on('click', function() {
            $('#purchaseModal').modal('show'); // Affiche la modale
        });



        const quotes = [
        "J'ai vu tant de choses que vous, humains, ne pourriez pas croire.\
        Tous ces moments se perdront dans l\'oubli, comme les larmes dans la pluie.\
        C\'est l\'heure de mourir.\
        La lumière qui brûle deux fois plus fort brûle deux fois moins longtemps.\
        Qu'est-ce qu'une tortue de terre fait dans un désert?"
    ];

    document.querySelector('.reboot-btn').addEventListener('click', function() {
        const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
        document.getElementById('ava').innerHTML = `<h5>${randomQuote}</h5>`;
    });
    </script>
</body>
</html>
