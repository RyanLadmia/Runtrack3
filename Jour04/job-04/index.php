<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<h1>Liste des utilisateurs</h1>

<!-- Tableau pour afficher les utilisateurs -->
<table border="1" id="usersTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <!-- Les utilisateurs seront insérés ici -->
    </tbody>
</table><br>

<!-- Bouton pour mettre à jour le tableau -->
<button id="updateButton">Mettre à jour</button>

<script>
function updateTable() {
    fetch('users.php')
        .then(response => response.json())
        .then(data => {
            // Vider le corps du tableau avant d'ajouter les nouvelles données
            const tableBody = document.querySelector("#usersTable tbody");
            tableBody.innerHTML = '';

            // Pour chaque utilisateur dans le tableau JSON
            data.forEach(user => {
                // Ajouter une nouvelle ligne dans le tableau
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${user.id}</td>
                    <td>${user.nom}</td>
                    <td>${user.prenom}</td>
                    <td>${user.email}</td>
                `;
                tableBody.appendChild(row);
            });
        })
        .catch(error => console.log("Erreur : " + error));
}



// Exécuter la mise à jour du tableau lorsque le bouton "update" est cliqué
$("#updateButton").click(function() {
    updateTable();
});

// Charger la liste des utilisateurs lorsque la page est chargée pour la première fois
$(document).ready(function() {
    updateTable();
});
</script>

</body>
</html>
