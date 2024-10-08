<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 03</title>
    <script defer src="script.js"></script>
</head>
<body>
    <h1>Pokedex</h1>
    
    <form id="pokemonForm">
        <label for="pokemonId">ID :</label>
        <input type="text" id="pokemonId" name="pokemonId"><br><br>
        
        <label for="pokemonName">Nom :</label>
        <input type="text" id="pokemonName" name="pokemonName"><br><br>
        
        <label for="pokemonType">Type :</label>
        <select id="pokemonType" name="pokemonType">
            <option value="">Tous</option>
            <option value="Grass">Plante</option>
            <option value="Poison">Poison</option>
            <option value="Fire">Feu</option>
            <option value="Water">Eau</option>
            <option value="Flying">Vol</option>
            <option value="Ground">Sol</option>
            <option value="Dragon">Dragon</option>
            <!-- Ajoute d'autres types si nécessaire -->
        </select><br><br>
        
        <input type="button" id="filterButton" value="Filtrer">
    </form>
    
    <div id="results"></div>
</body>
</html>
