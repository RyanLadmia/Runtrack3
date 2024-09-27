<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Example</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Section Héros -->
    <section class="bg-blue-600 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold mb-4">Bienvenue mon univers, un monde de fantaisie, heroïsme et d'aventure.</h1>
            <p class="text-lg mb-6">Et vous, quel univers est votre favoris ?</p>
            <a href="#" class="bg-white text-blue-600 py-3 px-6 rounded-lg shadow-lg font-semibold hover:bg-gray-100 transition duration-300">
                Ajoutez le votre
            </a>
        </div>
    </section>

    <!-- Section Cartes -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Carte 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold mb-4">L'unvers de The Witcher</h2>
                    <p class="text-gray-700 mb-4">L'univers de The Witcher est un monde médiéval-fantastique sombre, peuplé de créatures mythiques, de sorciers et de monstres. Il suit les aventures de Geralt de Riv, un sorceleur (chasseur de monstres), alors qu'il navigue entre conflits politiques, magie et quête de survie. Dans ce monde, les humains, elfes, nains et autres races cohabitent difficilement, tandis que la magie et les créatures surnaturelles façonnent un paysage brutal, où le destin, le pouvoir et la moralité sont souvent ambigus..</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">En savoir plus</a>
                </div>

                <!-- Carte 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold mb-4">Univers de Star Wars</h2>
                    <p class="text-gray-700 mb-4">L'univers de Star Wars se déroule dans une galaxie lointaine où des empires, républiques et rebelles s'affrontent pour le pouvoir. Au cœur de cette lutte, les Jedi, gardiens de la paix sensibles à la Force, s'opposent aux Sith, qui utilisent son côté obscur pour dominer. Des planètes variées, des races extraterrestres, des vaisseaux spatiaux, et des personnages iconiques comme Luke Skywalker, Darth Vader et Yoda façonnent cet univers, où la bataille entre le bien et le mal est omniprésente. La Force, une énergie mystique, lie toutes les créatures vivantes et joue un rôle central dans l'équilibre de la galaxie.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Découvrir</a>
                </div>

                <!-- Carte 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold mb-4">Univers du Seigneur des anneaux</h2>
                    <p class="text-gray-700 mb-4">L'univers du Seigneur des Anneaux, créé par J.R.R. Tolkien, est un monde fantastique appelé la Terre du Milieu, peuplé de différentes races comme les Hommes, les Elfes, les Nains et les Hobbits, ainsi que des créatures maléfiques telles que les Orques. L’histoire se concentre sur la quête pour détruire l'Anneau Unique, un artefact de pouvoir immense forgé par le Seigneur Sauron, un être maléfique cherchant à asservir le monde. Au cœur de cet univers épique, des thèmes comme l'amitié, le sacrifice et la lutte entre le bien et le mal se déploient à travers des paysages vastes, des royaumes anciens et des batailles épiques.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Explorer</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Nos Univers. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>
