<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <title>Jeu de Taquin</title>
</head>
<body>
    <h1>Jeu de Taquin</h1>
    <div id="taquin">
        <!-- Les carreaux sont initialement placés ici. -->
        <!-- La case vide est représentée par un carreau sans image. -->
        <button class="tile" data-position="0"></button>
        <button class="tile" data-position="1"></button>
        <button class="tile" data-position="2"></button>
        <button class="tile" data-position="3"></button>
        <button class="tile" data-position="4"></button>
        <button class="tile" data-position="5"></button>
        <button class="tile" data-position="6"></button>
        <button class="tile" data-position="7"></button>
        <button class="tile empty" data-position="8"></button> <!-- Case vide -->
    </div>
    <div id="message"></div>
    <button id="restartButton">Recommencer</button>
</body>
</html>
