// Attendre que le DOM soit complètement chargé avant d'ajouter l'écouteur d'événements
document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner le bouton par son id
    const button = document.getElementById('button');
    // Sélectionner le paragraphe où afficher l'expression
    const expressionPara = document.getElementById('expression');

    // Ajouter un événement 'click' au bouton
    button.addEventListener('click', function() {
        // Utiliser Fetch pour récupérer le contenu du fichier expression.txt
        fetch('expression.txt')
            .then(response => {
                // Vérifier si la réponse est OK
                if (!response.ok) {
                    throw new Error('Erreur lors du chargement du fichier.');
                }
                return response.text(); // Convertir la réponse en texte
            })
            .then(data => {
                // Insérer le texte récupéré dans le paragraphe
                expressionPara.textContent = data;
            })
            .catch(error => {
                // Afficher une erreur en cas de problème
                expressionPara.textContent = 'Une erreur est survenue : ' + error.message;
            });
    });
});
