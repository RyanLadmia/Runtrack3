<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 1 et 2</title>
    <!-- Lien vers Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Lien vers Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Lien vers jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Lien vers Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Lien vers le fichier CSS personnalisé -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LPTF</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" id="accueilLink" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Units</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Skills</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <h1 class="text-center mt-4">LaPlateforme_</h1>

    <div class="container mt-4">
        <div class="row">
            <!-- Colonne de gauche (image et description) -->
            <div class="col-md-3">
                <div class="side-bar">
                    <h4>Un Papillon</h4>
                    <img src="papillon.jpg" alt="image d'un Papillon" class="img-fluid">
                    <p>Un papillon, c'est un peu comme une chenille, mais avec des ailes. Ne pas ingérer.</p>
                    <button class="btn btn-primary w-100" id="orderButterflyBtn">Commander votre propre papillon</button>
                </div>
            </div>

            <!-- Colonne du milieu (contenu principal) -->
            <div class="col-md-6" id="conete">
                <div id="ava">
                    <h2>Bonjour, monde!</h2>
                    <p>Il existe plusieurs visions du terme :</p>
                    <ul>
                        <li>Le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</li>
                        <li>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</li>
                    </ul><br>
                    <p>Le sens étendu désigne l'univers dans son ensemble.</p>
                    <button class="btn reboot-btn">Rebooter le Monde</button>
                </div>
                <nav aria-label="Page navigation example" class="mt-3">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" id="firstPage" aria-label="First">
                                <i class="bi bi-chevron-double-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" id="lastPage" aria-label="Last">
                                <i class="bi bi-chevron-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Colonne de droite (liste) -->
            <div class="col-md-3">
                <div class="sidebar-right">
                    <ul class="list-group" id="listGroup">
                        <li class="list-group-item">Limbes</li>
                        <li class="list-group-item">Luxure</li>
                        <li class="list-group-item">Gourmandise</li>
                        <li class="list-group-item">Avarice</li>
                        <li class="list-group-item">Colère</li>
                        <li class="list-group-item">Hérésie</li>
                        <li class="list-group-item">Violence</li>
                        <li class="list-group-item">Ruse et Tromperie</li>
                        <li class="list-group-item">Trahison</li>
                        <li class="list-group-item">Internet Explorer</li>
                    </ul>
                </div>
            </div>
        </div><br>

        <!-- Barre de progression avec boutons pour augmenter/diminuer -->
        <div class="row mt-4">
            <div class="col-12">
                <h5 id="Install">Installation de AI 9000</h5>
                <div class="progress-container">
                    <button id="decreaseButton" class="progress-control">
                        <i class="bi bi-arrow-bar-left"></i>
                    </button>
                    <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 70%;" id="progressBar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                    <button id="increaseButton" class="progress-control">
                        <i class="bi bi-arrow-bar-right"></i>
                    </button>
                </div>
            </div>
        </div><br><br>

        <!-- Disposition gauche-droite du formulaire et email -->
        <div class="row mt-4">
            <!-- Colonne de gauche (réduite à la moitié de la fenêtre) -->
            <div class="col-md-6">
                <h5>Recevez votre copie gratuite d'internet 2!</h5>
                <form>
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="login" placeholder="Login">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                            <div class="input-group-append">
                                <span class="input-group-text">@exemple.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="crypto" class="form-label">URL des Internets 2 et 2.1 Beta</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">DogeCoin</span>
                            </div>
                            <input type="text" class="form-control" id="crypto">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">https://133t.lptf/dkwb/berlusconimkt/</span>
                            </div>
                            <input type="text" class="form-control" id="url">
                        </div>
                    </div>
                </form>
            </div>

            <!-- Colonne de droite  -->
            <div class="col-md-4" id="fizz">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email">
                        <small>We'll never share your email with anyone else.</small>
                    </div><br>
                    <div>
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div><br>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkmeout">
                        <label class="form-check-label" for="checkmeout">Check me out</label>
                    </div><br>
                    <button type="submit" id="submitButton" class="btn btn-primary w-100">Submit</button><br><br>
                </form>
            </div>
        </div>
    </div>



 <!-- Modale cachée (affichée lors de la combinaison de touches d g c) -->
 <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoModalLabel">Récapitulatif des informations</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p id="recapLogin"></p>
                            <p id="recapPassword"></p>
                            <p id="recapCrypto"></p>
                            <p id="recapUrl"></p>
                        </div>
                    </div>
                </div>
            </div>

    <!-- Modale de confirmation d'achat -->
    <div class="modal fade" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="purchaseModalLabel">Confirmation d'achat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Votre commande pour un papillon a été confirmée. Merci pour votre achat !
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


     <!-- Modale d g c -->
     <div class="modal fade" id="formSummaryModal" tabindex="-1" aria-labelledby="formSummaryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formSummaryModalLabel">Récapitulatif du formulaire</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Contenu du récapitulatif sera injecté ici -->
                    <p id="formSummaryContent"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>




    <script>
        // Utilisation de jQuery pour rediriger le lien "Accueil"
$('#accueilLink').on('click', function(e) {
    e.preventDefault(); // Empêche le comportement par défaut
    window.location.href = "https://laplateforme.io"; // Redirige vers La Plateforme
});

// Gestion de la barre de progression
document.getElementById('increaseButton').addEventListener('click', function() {
    var progressBar = document.getElementById('progressBar');
    var currentValue = parseInt(progressBar.getAttribute('aria-valuenow'));
    if (currentValue < 100) {
        currentValue += 10;
        progressBar.style.width = currentValue + '%';
        progressBar.setAttribute('aria-valuenow', currentValue);
        progressBar.textContent = currentValue + '%';
    }
});

document.getElementById('decreaseButton').addEventListener('click', function() {
    var progressBar = document.getElementById('progressBar');
    var currentValue = parseInt(progressBar.getAttribute('aria-valuenow'));
    if (currentValue > 0) {
        currentValue -= 10;
        progressBar.style.width = currentValue + '%';
        progressBar.setAttribute('aria-valuenow', currentValue);
        progressBar.textContent = currentValue + '%';
    }
});

// Gestion du bouton de commande du papillon pour afficher la modale
$('#orderButterflyBtn').on('click', function() {
    $('#purchaseModal').modal('show'); // Affiche la modale
});



const quotes = [
"Blade Runner :<br><br>J'ai vu tant de choses que vous, humains, ne pourriez pas croire.\
Tous ces moments se perdront dans l\'oubli, comme les larmes dans la pluie.\<br>\
C\'est l\'heure de mourir.\<br>\
La lumière qui brûle deux fois plus fort brûle deux fois moins longtemps.\<br>\
Qu'est-ce qu'une tortue de terre fait dans un désert?"
];

document.querySelector('.reboot-btn').addEventListener('click', function() {
const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
document.getElementById('ava').innerHTML = `<h5 id="citation">${randomQuote}</h5>`;
});

// Fonction pour activer un élément de la liste à droite lorsqu'on clique dessus
$('#listGroup .list-group-item').on('click', function() {
    $('#listGroup .list-group-item').removeClass('active');
    $(this).addClass('active');
});




 // Fonction pour détecter la séquence de touches D, G, C
 let sequence = [];
document.addEventListener('keydown', function(event) {
    const key = event.key.toUpperCase();
    sequence.push(key);
    if (sequence.slice(-3).join('') === 'DGC') {
        // Récupérer les informations du formulaire
        const login = document.getElementById('login').value;
        const password = document.getElementById('password').value;
        const crypto = document.getElementById('crypto').value;
        const url = document.getElementById('url').value;

        // Afficher les informations dans la modale
        document.getElementById('recapLogin').innerText = 'Login: ' + login;
        document.getElementById('recapPassword').innerText = 'Mot de passe: ' + password;
        document.getElementById('recapCrypto').innerText = 'DogeCoin: ' + crypto;
        document.getElementById('recapUrl').innerText = 'URL: ' + url;

        // Afficher la modale Bootstrap
        const infoModal = new bootstrap.Modal(document.getElementById('infoModal'));
        infoModal.show();

        // Réinitialiser la séquence
        sequence = [];
    }
});


// Variables pour suivre les touches pressées
let keysPressed = {};

// Détection des touches "D", "G" et "C"
document.addEventListener("keydown", function (e) {
keysPressed[e.key.toLowerCase()] = true;

// Vérifie si les touches D, G et C sont toutes pressées en même temps
if (keysPressed['d'] && keysPressed['g'] && keysPressed['c']) {
// Affiche la modale avec le récapitulatif du formulaire
let login = document.getElementById("login").value;
let password = document.getElementById("password").value;
let crypto = document.getElementById("crypto").value;
let url = document.getElementById("url").value;
let email = document.getElementById("email").value;

let summaryContent = `
    <strong>Login:</strong> ${login} <br>
    <strong>Mot de passe:</strong> ${password} <br>
    <strong>Cryptomonnaie:</strong> ${crypto} <br>
    <strong>URL:</strong> ${url} <br>
    <strong>Email:</strong> ${email} <br>
`;

document.getElementById("formSummaryContent").innerHTML = summaryContent;

let modal = new bootstrap.Modal(document.getElementById('formSummaryModal'));
modal.show();
}
});

// Réinitialisation des touches quand elles sont relâchées
document.addEventListener("keyup", function (e) {
keysPressed[e.key.toLowerCase()] = false;
});



// Pagination infernale 
$(document).ready(function () {
// Détection du clic sur un élément de pagination
$('.pagination a').on('click', function (e) {
e.preventDefault(); // Empêche le comportement par défaut des liens

// Récupère le texte de la page cliquée
var page = $(this).text().trim();

// Change le contenu du jumbotron en fonction de la page cliquée 
if (page === "1") {
    $('#ava').html(`
        <h2>Bonjour, monde!</h2>
        <p>Il existe plusieurs visions du terme :</p>
        <ul>
            <li>Le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</li>
            <li>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</li>
        </ul><br>
        <p>Le sens étendu désigne l'univers dans son ensemble.</p>
        <button class="btn reboot-btn">Rebooter le Monde</button>
        `);
} else if (page === "2") {
    $('#ava').html(`
        <h2>The Witcher :</h2>
        <p>Geralt de Riv, un chasseur de monstres professionnel à gages, également connu sous le nom de sorceleur, lutte pour conserver son humanité dans un monde médiéval fantastique et sombre gouverné par des rois, des reines et des mages corrompus, où la pauvreté, la violence et l'intolérance sont omniprésentes, où les humains normaux sont parfois pires que les vrais monstres et où la plupart des emplois bien payés impliquent les émotions et les désirs humains les plus sombres.</p><br>
        `);
} else if (page === "3") {
    $('#ava').html(`
        <h2>Star Wars :</h2>
        <p>La République galactique a été fondée pour amener la paix dans la galaxie, mais, tout au long de son existence, elle a été secouée par des sécessions et des guerres, notamment contre l'Empire Sith. Les chevaliers Jedi, gardiens de la paix et de la justice, réussissent à éliminer les Sith et la galaxie retrouve la prospérité. Cependant, après des millénaires d'existence, la République montre de lourdes failles ainsi qu'une corruption rampante, et se trouve de fait fragilisée ; selon une prophétie Jedi, un « Élu » naîtra et rétablira un jour l'équilibre dans la Force.</p><br>
        `);
}

// Optionnel : pour s'assurer que la pagination conserve le focus visuel sur la page active
$('.pagination a').removeClass('active'); // Enlève la classe active de tous les liens
$(this).addClass('active'); // Ajoute la classe active au lien cliqué
});
});

$(document).ready(function () {
            // Gestion du bouton "Rebooter le Monde"
            $(document).on('click', '.reboot-btn', function() {
                const quotes = [
                    "Blade Runner :<br><br>J'ai vu tant de choses que vous, humains, ne pourriez pas croire. Tous ces moments se perdront dans l\'oubli, comme les larmes dans la pluie.<br>C\'est l\'heure de mourir.<br>La lumière qui brûle deux fois plus fort brûle deux fois moins longtemps.<br>Qu'est-ce qu'une tortue de terre fait dans un désert?"
                ];
                const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
                $('#ava').html(`<h5 id="citation">${randomQuote}</h5>`);
            });

            // Pagination infernale
            $('.pagination a').on('click', function (e) {
                e.preventDefault(); // Empêche le comportement par défaut des liens
                const page = $(this).text().trim();
                if (page === "1") {
                    $('#ava').html(`
                        <h2>Bonjour, monde!</h2>
                        <p>Il existe plusieurs visions du terme :</p>
                        <ul>
                            <li>Le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</li>
                            <li>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</li>
                        </ul><br>
                        <p>Le sens étendu désigne l'univers dans son ensemble.</p>
                        <button class="btn reboot-btn">Rebooter le Monde</button>
                    `);
                } else if (page === "2") {
                    $('#ava').html(`
                        <h2>The Witcher :</h2>
                        <p>Geralt de Riv, un chasseur de monstres professionnel à gages, également connu sous le nom de sorceleur, lutte pour conserver son humanité dans un monde médiéval fantastique et sombre gouverné par des rois, des reines et des mages corrompus, où la pauvreté, la violence et l'intolérance sont omniprésentes, où les humains normaux sont parfois pires que les vrais monstres et où la plupart des emplois bien payés impliquent les émotions et les désirs humains les plus sombres.</p><br>
                    `);
                } else if (page === "3") {
                    $('#ava').html(`
                        <h2>Star Wars :</h2>
                        <p>La République galactique a été fondée pour amener la paix dans la galaxie, mais, tout au long de son existence, elle a été secouée par des sécessions et des guerres, notamment contre l'Empire Sith. Les chevaliers Jedi, gardiens de la paix et de la justice, réussissent à éliminer les Sith et la galaxie retrouve la prospérité. Cependant, après des millénaires d'existence, la République montre de lourdes failles ainsi qu'une corruption rampante, et se trouve de fait fragilisée ; selon une prophétie Jedi, un « Élu » naîtra et rétablira un jour l'équilibre dans la Force.</p><br>
                    `);
                }
            });
        });



        $(document).ready(function () {
    // Gestion des clics sur les flèches de pagination infernale
    $('#firstPage').on('click', function (e) {
        e.preventDefault(); // Empêche le comportement par défaut du lien
        $('#ava').html(`
            <h2>Bonjour, monde!</h2>
            <p>Il existe plusieurs visions du terme :</p>
            <ul>
                <li>Le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</li>
                <li>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</li>
            </ul><br>
            <p>Le sens étendu désigne l'univers dans son ensemble.</p>
            <button class="btn reboot-btn">Rebooter le Monde</button>
        `);
    });

    $('#lastPage').on('click', function (e) {
        e.preventDefault(); // Empêche le comportement par défaut du lien
        $('#ava').html(`
            <h2>Star Wars :</h2>
            <p>La République galactique a été fondée pour amener la paix dans la galaxie, mais, tout au long de son existence, elle a été secouée par des sécessions et des guerres, notamment contre l'Empire Sith. Les chevaliers Jedi, gardiens de la paix et de la justice, réussissent à éliminer les Sith et la galaxie retrouve la prospérité. Cependant, après des millénaires d'existence, la République montre de lourdes failles ainsi qu'une corruption rampante, et se trouve de fait fragilisée ; selon une prophétie Jedi, un « Élu » naîtra et rétablira un jour l'équilibre dans la Force.</p><br>
        `);
    });

    // Gestion des autres pages
    $('.pagination a').on('click', function (e) {
        e.preventDefault(); // Empêche le comportement par défaut des liens
        const page = $(this).text().trim();
        if (page === "1") {
            $('#ava').html(`
                <h2>Bonjour, monde!</h2>
                <p>Il existe plusieurs visions du terme :</p>
                <ul>
                    <li>Le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</li>
                    <li>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</li>
                </ul><br>
                <p>Le sens étendu désigne l'univers dans son ensemble.</p>
                <button class="btn reboot-btn">Rebooter le Monde</button>
            `);
        } else if (page === "2") {
            $('#ava').html(`
                <h2>The Witcher :</h2>
                <p>Geralt de Riv, un chasseur de monstres professionnel à gages, également connu sous le nom de sorceleur, lutte pour conserver son humanité dans un monde médiéval fantastique et sombre gouverné par des rois, des reines et des mages corrompus, où la pauvreté, la violence et l'intolérance sont omniprésentes, où les humains normaux sont parfois pires que les vrais monstres et où la plupart des emplois bien payés impliquent les émotions et les désirs humains les plus sombres.</p><br>
            `);
        }
    });
});


$(document).ready(function () {
    // Fonction pour générer une couleur hexadécimale aléatoire
    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    // Gestion de la soumission du formulaire
    $('#submitButton').on('click', function (e) {
        e.preventDefault(); // Empêche le comportement par défaut du bouton

        // Récupère les valeurs des champs email et mot de passe
        const email = $('#email').val();
        const password = $('#password').val();

        // Vérifie que les champs ne sont pas vides
        if (email !== '' && password !== '') {
            // Change aléatoirement la couleur du spinner
            const randomColor = getRandomColor();
            $('.progress-bar-custom').css('background-color', randomColor);

            // Optionnel : affiche un message de confirmation ou une action supplémentaire
            alert('Formulaire validé et couleur du spinner changée !');
        } else {
            // Affiche un message d'erreur si les champs sont vides
            alert('Veuillez remplir tous les champs.');
        }
    });
});



    </script>
</body>
</html>
