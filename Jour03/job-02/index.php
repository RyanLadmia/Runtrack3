<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 2</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> <!-- jQuery UI for drag and drop -->
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

    <h1>Reconstituez l'arc-en-ciel</h1>

    <!-- Bouton pour mélanger les images -->
    <button id="shuffleButton">Mélanger les images</button>

    <!-- Conteneur pour les images -->
    <div id="imageContainer" class="container">
        <img src="arc1.png" alt="Couleur 1" id="img1" class="rainbowPiece">
        <img src="arc2.png" alt="Couleur 2" id="img2" class="rainbowPiece">
        <img src="arc3.png" alt="Couleur 3" id="img3" class="rainbowPiece">
        <img src="arc4.png" alt="Couleur 4" id="img4" class="rainbowPiece">
        <img src="arc5.png" alt="Couleur 5" id="img5" class="rainbowPiece">
        <img src="arc6.png" alt="Couleur 6" id="img6" class="rainbowPiece">
    </div>

    <!-- Message affiché selon le résultat -->
    <p id="resultMessage"></p>

</body>
</html>
