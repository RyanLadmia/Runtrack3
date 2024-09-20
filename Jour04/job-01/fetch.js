// Method fetch()
document.getElementById('button').addEventListener('click', function() {
    // Utilisation de Fetch() pour récupérer le contenu du fichier expression.txt
    fetch('expression.txt')
        .then(response => response.text()) // Convertit la réponse en texte
        .then(data => {
            // Insère le contenu dans le paragraphe avec l'id "expression"
            document.getElementById('expression').textContent = data;
        })
        .catch(error => {
            console.error('Erreur lors de la récupération de l\'expression :', error);
        })
})