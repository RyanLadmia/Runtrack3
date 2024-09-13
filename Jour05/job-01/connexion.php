<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="connexion.js"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Job 1</title>
</head>
<body>
    <a href="inscription.php">Inscription</a><br><br>

    <h2>Connexion</h2><br><br>

    <form id="loginForm">
        <label for="email">E-mail</label><br>
        <input type="email" id="email" name="email"><br>
        <span class="error" id="loginEmailError"></span><br><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br><br>
        <span class="error" id="loginPasswordError"></span><br><br>

        <input type="submit" id="connect" value="Se connecter">
    </form>
    
</body>
</html>