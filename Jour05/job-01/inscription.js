document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registrationForm');

    form.addEventListener('submit', async function (event) {
        event.preventDefault();

        // Réinitialiser les messages d'erreur
        resetErrors();

        // Récupérer les valeurs des champs
        const lastname = document.getElementById('lastname').value.trim();
        const firstname = document.getElementById('firstname').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        const adress = document.getElementById('adress').value.trim();
        const zipcode = document.getElementById('zipcode').value.trim();

        // Tableau des vérifications
        const validations = [];

        validations.push(validateField(lastname, 'lastnameError', "Le nom est requis."));
        validations.push(validateField(firstname, 'firstnameError', "Le prénom est requis."));
        validations.push(validateEmailAsync(email));
        validations.push(validatePassword(password, confirmPassword));
        validations.push(validateField(adress, 'adressError', "L'adresse est requise."));
        validations.push(validateZipcode(zipcode));

        // Attendre toutes les validations
        const results = await Promise.all(validations);
        const valid = results.every(result => result === true);

        if (valid) {
            try {
                // Vérification de l'email via l'API
                const response = await fetch('/check-email.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ email })
                });

                const data = await response.json();
                if (data.exists) {
                    document.getElementById('emailError').textContent = "Cet email est déjà utilisé.";
                } else {
                    // Soumettre le formulaire
                    form.submit();
                }
            } catch (error) {
                console.error('Erreur:', error);
            }
        }
    });

    async function validateField(value, errorId, errorMessage) {
        if (!value) {
            document.getElementById(errorId).textContent = errorMessage;
            return false;
        }
        return true;
    }

    async function validateEmailAsync(email) {
        if (!validateEmail(email)) {
            document.getElementById('emailError').textContent = "L'email n'est pas valide.";
            return false;
        }
        return true;
    }

    async function validatePassword(password, confirmPassword) {
        if (password.length < 6) {
            document.getElementById('passwordError').textContent = "Le mot de passe doit contenir au moins 6 caractères.";
            return false;
        }
        if (password !== confirmPassword) {
            document.getElementById('confirmPasswordError').textContent = "Les mots de passe ne correspondent pas.";
            return false;
        }
        return true;
    }

    async function validateZipcode(zipcode) {
        if (!zipcode || zipcode.length !== 5) {
            document.getElementById('zipcodeError').textContent = "Le code postal doit contenir 5 chiffres.";
            return false;
        }
        return true;
    }

    async function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    async function resetErrors() {
        const errors = document.querySelectorAll('.error');
        errors.forEach(error => error.textContent = '');
    }
});
