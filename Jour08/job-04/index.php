<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Job 04</title>
</head>

<body class="bg-gray-100">
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
            <div class="md:hidden">
                <button class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <main class="container mx-auto p-8">
        <section class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto">
            <h5 class="text-2xl font-bold text-center mb-6 text-gray-700">Création de Compte</h5>
            <form action="#">
                <h6 class="text-lg font-semibold text-gray-700">Civilité :</h6>
                <div class="flex items-center mb-4">
                    <input name="civilite" type="radio" value="monsieur" checked class="mr-2">
                    <label for="monsieur" class="text-gray-700">Monsieur</label>
                </div>
                <div class="flex items-center mb-4">
                    <input name="civilite" type="radio" value="madame" class="mr-2">
                    <label for="madame" class="text-gray-700">Madame</label>
                </div>
                <div class="flex items-center mb-4">
                    <input name="civilite" type="radio" value="autre" class="mr-2">
                    <label for="autre" class="text-gray-700">Autre</label>
                </div>
                <div class="mb-4">
                    <label for="prenom" class="text-gray-700 font-semibold">Prénom</label>
                    <div class="relative">
                        <input type="text" id="prenom" required class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Votre prénom">
                        <span class="absolute top-3 left-3 text-gray-400"><i class="fas fa-user"></i></span>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="nom" class="text-gray-700 font-semibold">Nom</label>
                    <div class="relative">
                        <input type="text" id="nom" required class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Votre nom">
                        <span class="absolute top-3 left-3 text-gray-400"><i class="fas fa-id-card"></i></span>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="adresse" class="text-gray-700 font-semibold">Adresse</label>
                    <div class="relative">
                        <input type="text" id="adresse" required class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Votre adresse">
                        <span class="absolute top-3 left-3 text-gray-400"><i class="fas fa-home"></i></span>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="email" class="text-gray-700 font-semibold">Adresse Email</label>
                    <div class="relative">
                        <input type="email" id="email" required class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Votre email">
                        <span class="absolute top-3 left-3 text-gray-400"><i class="fas fa-envelope"></i></span>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="motdepasse" class="text-gray-700 font-semibold">Mot de passe</label>
                    <div class="relative">
                        <input type="password" id="motdepasse" required class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Votre mot de passe">
                        <span class="absolute top-3 left-3 text-gray-400"><i class="fas fa-lock"></i></span>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="validationMotdepasse" class="text-gray-700 font-semibold">Validation du mot de passe</label>
                    <div class="relative">
                        <input type="password" id="validationMotdepasse" required class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Confirmez votre mot de passe">
                        <span class="absolute top-3 left-3 text-gray-400"><i class="fas fa-lock"></i></span>
                    </div>
                </div>
                <h6 class="text-lg font-semibold text-gray-700 mb-2">Passions</h6>
                <div class="mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" value="informatique" class="mr-2">
                        <span class="text-gray-700">Informatique</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" value="voyages" class="mr-2">
                        <span class="text-gray-700">Voyages</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" value="sport" class="mr-2">
                        <span class="text-gray-700">Sport</span>
                    </label>
                </div>
                <div class="mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" value="lecture" class="mr-2">
                        <span class="text-gray-700">Lecture</span>
                    </label>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">Valider</button>
            </form>
        </section>
    </main>
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">À propos de nous</h3>
                    <p class="text-gray-400">Nous fournissons des solutions web modernes et efficaces.</p>
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
                        <li><a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i> Instagram</a></li>
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