<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script> <!-- Inclusion du fichier JavaScript -->
    <title>Vérifier une année bisextile</title>    
</head>
<body>
    <h2>Vérification de l'année bisextile</h2>
    <p id="result"></p> <!-- L'endroit où le résultat sera affiché -->
    <script>
        // Appel de la fonction bisextile avec l'année 366 jours (pour l'exemple)
        var isBisextile = bisextile(365);

        // Affichage du résultat sur la page
        if (isBisextile) {
            document.getElementById('result').innerHTML = 'L\'année est bisextile (366 jours).';
        } else {
            document.getElementById('result').innerHTML = 'L\'année n\'est pas bisextile.';
        }
    </script>
</body>
</html>
