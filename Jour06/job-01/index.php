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
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
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
                <img src="papillon.jpg" alt="Papillon" class="img-fluid">
                <p>Un papillon, c'est un peu comme une chenille, mais avec des ailes. Ne pas ingérer.</p>
                <button class="btn btn-primary w-100">Commander votre propre papillon</button>
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
                        <!-- Double flèche pour aller à la première page -->
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="First">
                                <span aria-hidden="true">&laquo;&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <!-- Double flèche pour aller à la dernière page -->
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Last">
                                <span aria-hidden="true">&raquo;&raquo;</span>
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

        <!-- Barre de progression -->
        <div class="row mt-4">
            <div class="col-12">
                <h5>Installation de AI 9000</h5>
                <div class="progress">
                    <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
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
                        <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">URL des Internets 2 et 2.1 Beta</label>
                        <input type="url" class="form-control" id="url" placeholder="DogeCoin .00"><br>
                        <input type="url" class="form-control" id="url" placeholder="https://133t.lptf/dkwb/berlusconimkt/">
                    </div>
                </form>
            </div>

            <!-- Colonne de droite (inchangée) -->
            <div class="col-md-4" id="fizz">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email">
                        <caption>We'll never share your email with anyone else.</caption>
                    </div><br>
                    <div>
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div><br>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkmeout">
                        <label class="form-check-label" for="checkmeout">Check me out</label>
                    </div><br>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div><br> 
</div>

</body>
</html>
