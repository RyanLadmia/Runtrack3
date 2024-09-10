<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Job 3</title>
</head>

<body>
    <button id="button">Cliquez ici</button>
    <p id="compteur">0</p>
    <script>
        window.onload = () => document.getElementById("button").addEventListener("click", addOne);
    </script>
</body>
</html>
