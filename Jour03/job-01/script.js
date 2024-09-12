// Utilisation de jQuery pour gérer le clic sur le bouton
$('#button').click(function() {
    // On vérifie si le texte est affiché
    if ($('#text').is(':visible')) {
        $('#text').hide(); // Cache le texte
        $('#button').text('Afficher le texte'); // Change le texte du bouton
    } else {
        $('#text').show(); // Affiche le texte
        $('#button').text('Cacher le texte'); // Change le texte du bouton
    }
});
