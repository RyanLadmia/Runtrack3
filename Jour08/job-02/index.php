<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
    <title>Job 02</title>
</head>
<body>
<header class="bg-blue-600 text-white">
        <div class="container mx-auto flex justify-between items-center p-4">
            <!-- Logo -->
            <div class="text-2xl font-bold">
                <a href="#" class="hover:text-blue-300">MonLogo</a>
            </div>

            <!-- Navigation Links -->
            <nav class="hidden md:flex space-x-4">
                <a href="index.php" class="hover:text-blue-300">Accueil</a>
                <a href="index.php" class="hover:text-blue-300">Connexion</a>
                <a href="index.php" class="hover:text-blue-300">Inscription</a>
                <a href="index.php" class="hover:text-blue-300">Recherche</a>
            </nav>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="container">
                <h5>Création de Compte</h5>

                <form action="#">
                    <!-- Inputs radios pour la civilité -->
                    <h6>Civilité :</h6>
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
                        <input type="text" id="prenom" required>
                        <label for="prenom">Prénom</label>
                    </div>
    
                    <div class="input-field">
                        <input type="text" id="nom" required>
                        <label for="nom">Nom</label>
                    </div>
    
                    <div class="input-field">
                        <input type="text" id="adresse" required>
                        <label for="adresse">Adresse</label>
                    </div>

                    <!-- Input de type email -->
                    <div class="input-field">
                        <input type="email" id="email" required>
                        <label for="email">Adresse Email</label>
                    </div>

                    <!-- Inputs de type password -->
                    <div class="input-field">
                        <input type="password" id="motdepasse" required>
                        <label for="motdepasse">Mot de passe</label>
                    </div>
    
                    <div class="input-field">
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
                    <button class="btn waves-effect waves-light" type="submit" name="action">Valider</button>
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
            

</body>

</html>