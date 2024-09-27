<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Job 04</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php">Connexion</a></li>
                    <li><a href="index.php">Inscription</a></li>
                    <li><a href="index.php">Recherche</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
    <section>
            <div class="container">
                <h5>Création de Compte</h5>
                <form action="#">
                    <!-- Inputs radios pour la civilité -->
                    <h6>Civilité</h6>
                        <p>
                            <label>
                            <input name="civilite" type="radio" value="monsieur" checked />
                            <span>Monsieur</span>
                            </label>
                        </p>
                        <p>
                            <label>
                            <input name="civilite" type="radio" value="madame" />
                            <span>Madame</span>
                            </label>
                        </p>
                        <p>
                            <label>
                            <input name="civilite" type="radio" value="autre" />
                            <span>Autre</span>
                            </label>
                        </p>
                    <!-- Inputs de type text pour prénom, nom et adresse -->
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i> <!-- Icône pour le prénom -->
                        <input type="text" id="prenom" required>
                        <label for="prenom">Prénom</label>
                    </div>
    
                    <div class="input-field">
                        <i class="material-icons prefix">person</i> <!-- Icône pour le nom -->
                        <input type="text" id="nom" required>
                        <label for="nom">Nom</label>
                    </div>
    
                    <div class="input-field">
                        <i class="material-icons prefix">home</i> <!-- Icône pour l'adresse -->
                        <input type="text" id="adresse" required>
                        <label for="adresse">Adresse</label>
                    </div>
                    <!-- Input de type email -->
                    <div class="input-field">
                        <i class="material-icons prefix">email</i> <!-- Icône pour l'email -->
                        <input type="email" id="email" required>
                        <label for="email">Adresse Email</label>
                    </div>
                    <!-- Inputs de type password -->
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i> <!-- Icône pour le mot de passe -->
                        <input type="password" id="motdepasse" required>
                        <label for="motdepasse">Mot de passe</label>
                    </div>
    
                    <div class="input-field">
                        <i class="material-icons prefix">lock_outline</i> <!-- Icône pour la validation du mot de passe -->
                        <input type="password" id="validationMotdepasse" required>
                        <label for="validationMotdepasse">Validation du mot de passe</label>
                    </div>
                    <!-- Checkboxes pour choisir ses passions -->
                    <h6>Passions</h6>
                        <p>
                            <label>
                            <input type="checkbox" value="informatique" />
                            <span>Informatique</span>
                            </label>
                        </p>
                        <p>
                            <label>
                            <input type="checkbox" value="voyages" />
                            <span>Voyages</span>
                            </label>
                        </p>
                        <p>
                            <label>
                            <input type="checkbox" value="sport" />
                            <span>Sport</span>
                            </label>
                        </p>
                        <p>
                            <label>
                            <input type="checkbox" value="lecture" />
                            <span>Lecture</span>
                            </label>
                        </p>
                    <!-- Bouton pour valider le formulaire -->
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        Valider
                        <i class="material-icons right">send</i> <!-- Icône d'envoi sur le bouton -->
                    </button>
                </form>
            </div><br>
        </section>
    </main>
    
    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Accueil</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php">Connexion</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php">Inscription</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php">Recherche</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2024 Copyright
            <a class="grey-text text-lighten-4 right" href="index.php">More Links</a>
            </div>
          </div>
        </footer>
            


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
