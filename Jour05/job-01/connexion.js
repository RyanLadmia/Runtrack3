document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('loginForm');

    form.addEventListener('submit', async function (event) {
        event.preventDefault();

        // Réinitialiser les messages d'erreur
        resetErrors();

        // Récupérer les valeurs des champs
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;

        // Validation des champs
        let valid = true;

        if (!validateEmail(email)) {
            document.getElementById('loginEmailError').textContent = "L'email n'est pas valide.";
            valid = false;
        }

        if (password.length < 6) {
            document.getElementById('loginPasswordError').textContent = "Le mot de passe doit contenir au moins 6 caractères.";
            valid = false;
        }

        if (valid) {
            try {
                // Appel API pour vérifier les informations de connexion
                const response = await fetch('/login.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ email, password })
                });

                const data = await response.json();
                if (data.success) {
                    window.location.href = '/dashboard.php'; // Redirection après connexion réussie
                } else {
                    document.getElementById('loginPasswordError').textContent = "Email ou mot de passe incorrect.";
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
