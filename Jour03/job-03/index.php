<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de Taquin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Jeu de Taquin</h1>

<div id="taquin">
    <!-- 9 cases dans la grille, la dernière est vide -->
    <div class="tile" id="tile1" style="background-image: url('1.PNG');"></div>
    <div class="tile" id="tile2" style="background-image: url('2.PNG');"></div>
    <div class="tile" id="tile3" style="background-image: url('3.PNG');"></div>
    <div class="tile" id="tile4" style="background-image: url('4.PNG');"></div>
    <div class="tile" id="tile5" style="background-image: url('5.PNG');"></div>
    <div class="tile" id="tile6" style="background-image: url('6.PNG');"></div>
    <div class="tile" id="tile7" style="background-image: url('7.PNG');"></div>
    <div class="tile" id="tile8" style="background-image: url('8.PNG');"></div>
    <div class="tile empty" id="empty"></div> <!-- Case vide -->
</div>

<div id="message"></div>
<button id="restartButton">Recommencer</button>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>

</body>
</html>
