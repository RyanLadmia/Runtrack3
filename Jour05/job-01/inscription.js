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

        // Validation des champs
        let valid = true;

        if (!lastname) {
            document.getElementById('lastnameError').textContent = "Le nom est requis.";
            valid = false;
        }

        if (!firstname) {
            document.getElementById('firstnameError').textContent = "Le prénom est requis.";
            valid = false;
        }

        if (!validateEmail(email)) {
            document.getElementById('emailError').textContent = "L'email n'est pas valide.";
            valid = false;
        }

        if (password.length < 6) {
            document.getElementById('passwordError').textContent = "Le mot de passe doit contenir au moins 6 caractères.";
            valid = false;
        }

        if (password !== confirmPassword) {
            document.getElementById('confirmPasswordError').textContent = "Les mots de passe ne correspondent pas.";
            valid = false;
        }

        if (!adress) {
            document.getElementById('adressError').textContent = "L'adresse est requise.";
            valid = false;
        }

        if (!zipcode || zipcode.length !== 5) {
            document.getElementById('zipcodeError').textContent = "Le code postal doit contenir 5 chiffres.";
            valid = false;
        }

        if (valid) {
            try {
                // Appel API pour vérifier si l'email existe déjà
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

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function resetErrors() {
        const errors = document.querySelectorAll('.error');
        errors.forEach(error => error.textContent = '');
    }
});
