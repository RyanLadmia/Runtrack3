<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link refl="stylesheet" rel="style.css">
    <title>Job 1</title>
</head>
<body>
<a href="connexion.php">Connexion</a><br><br>

    <h2>Inscription</h2><br><br>

    <form>
        <label for="lastname">Nom</label><br>
        <input type="text" id="lastname" name="lastname" required><br>
        <span class="error" id="lastnameError"></span><br><br>

        <label for="prenom">Prenom</label><br>
        <input type="text" id="firstname" name="firstname" required><br>
        <span class="error" id="firstnameError"></span><br><br>

        <label for="email">E-mail</label><br>
        <input type="email" id="email" name="email" required><br>
        <span class="error" id="emailError"></span><br><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password" required><br>
        <span class="error" id="passwordError"></span><br><br>

        <label for="confirmPassword">Confirmation du mot de passe</label><br>
        <input type="password" id="confirmPassword" name="confirmPassword" required><br>
        <span class="error" id="confirmPasswordError"></span><br><br>

        <label for="adress">Adresse</label><br>
        <input type="text" id="adress" name="adress" required><br>
        <span class="error" id="adressError"></span><br><br>

        <label for="zipcode">Code Postal</label><br>
        <input type="number" id="zipcode" name="zipcode" required><br>
        <span class="error" id="zipcodeError"></span><br><br>

        <input type="submit" id="submit" value="Valider l'inscription">
    </form>

</body>
</html>