<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="inscription.js"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Job 1</title>
</head>
<body>
<a href="connexion.php">Connexion</a><br><br>

    <h2>Inscription</h2><br><br>

    <form id="registrationForm">
        <label for="lastname">Nom</label><br>
        <input type="text" id="lastname" name="lastname"><br>
        <span class="error" id="lastnameError"></span><br><br>

        <label for="prenom">Prenom</label><br>
        <input type="text" id="firstname" name="firstname"><br>
        <span class="error" id="firstnameError"></span><br><br>

        <label for="email">E-mail</label><br>
        <input type="email" id="email" name="email"><br>
        <span class="error" id="emailError"></span><br><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <span class="error" id="passwordError"></span><br><br>

        <label for="confirmPassword">Confirmation du mot de passe</label><br>
        <input type="password" id="confirmPassword" name="confirmPassword"><br>
        <span class="error" id="confirmPasswordError"></span><br><br>

        <label for="adress">Adresse</label><br>
        <input type="text" id="adress" name="adress"><br>
        <span class="error" id="adressError"></span><br><br>

        <label for="zipcode">Code Postal</label><br>
        <input type="number" id="zipcode" name="zipcode"><br>
        <span class="error" id="zipcodeError"></span><br><br>

        <input type="submit" id="submit" value="Valider l'inscription">
    </form>

</body>
</html>