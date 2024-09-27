<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
    <title>Job 03</title>
</head>
<body>
<header class="bg-blue-600 text-white">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="text-2xl font-bold">
                <a href="#" class="hover:text-blue-300">MonLogo</a>
            </div>
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
                    <div class="input-field">
                        <input type="email" id="email" required>
                        <label for="email">Adresse Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" id="motdepasse" required>
                        <label for="motdepasse">Mot de passe</label>
                    </div>
                    <div class="input-field">
                        <input type="password" id="validationMotdepasse" required>
                        <label for="validationMotdepasse">Validation du mot de passe</label>
                    </div>
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
                    <button class="btn waves-effect waves-light" type="submit" name="action">Valider</button>
                </form>
            </div><br>
        </section>
    </main>
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">À propos de nous</h3>
                    <p class="text-gray-400">Nous sommes une entreprise dédiée à fournir des solutions web modernes et efficaces.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
                    <ul>
                        <li><a href="index.php" class="text-gray-400 hover:text-white">Accueil</a></li>
                        <li><a href="index.php" class="text-gray-400 hover:text-white">Connexion</a></li>
                        <li><a href="index.php" class="text-gray-400 hover:text-white">Inscription</a></li>
                        <li><a href="index.php" class="text-gray-400 hover:text-white">Recherche</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Suivez-nous</h3>
                    <ul class="flex space-x-4">
                        <li><a href="index.php" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="index.php" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="index.php" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-4 text-center text-gray-500">
                <p>&copy; 2024 MonSite. Tous droits réservés.</p>
                <p><a href="index.php" class="hover:text-white">Mentions légales</a> | <a href="#" class="hover:text-white">Politique de confidentialité</a></p>
            </div>
        </div>
    </footer>
            

</body>

</html>