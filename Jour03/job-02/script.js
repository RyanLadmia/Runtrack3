// Une fois que le document est complètement chargé, on exécute le code ci-dessous
$(document).ready(function() {

    // Rendre les images dans le conteneur "imageContainer" triables par glisser-déposer
    $("#imageContainer").sortable({
        // Lorsque l'utilisateur modifie l'ordre des images (après avoir glissé et déposé), la fonction suivante est appelée
        update: function(event, ui) {
            checkOrder(); // Appelle la fonction checkOrder pour vérifier si l'ordre des images est correct
        }
    });

    // Lorsque le bouton avec l'ID "shuffleButton" est cliqué
    $("#shuffleButton").click(function() {
        var container = $("#imageContainer"); // Sélectionne le conteneur qui contient les images
        var images = container.children(); // Récupère toutes les images contenues dans le conteneur

        // Fonction pour mélanger les images de manière aléatoire
        images.sort(function() {
            return Math.random() - 0.5; // Retourne un nombre aléatoire entre -0.5 et 0.5 pour mélanger les images
        });

        // Remplace les images dans le conteneur par celles qui ont été mélangées
        container.html(images);

        // Réinitialise le message de résultat pour qu'il soit vide après le mélange
        $("#resultMessage").text("");
    });

    // Fonction pour vérifier si les images sont dans le bon ordre
    function checkOrder() {
        // Tableau qui contient l'ordre correct des images (en fonction de leurs ID)
        var correctOrder = ["img1", "img2", "img3", "img4", "img5", "img6"];
        var currentOrder = []; // Initialise un tableau vide pour stocker l'ordre actuel des images

        // Pour chaque image dans le conteneur, on récupère son ID et on l'ajoute à currentOrder
        $("#imageContainer img").each(function() {
            currentOrder.push($(this).attr("id")); // Ajoute l'ID de chaque image dans le tableau currentOrder
        });

        // Compare l'ordre actuel des images avec l'ordre correct
        if (JSON.stringify(correctOrder) === JSON.stringify(currentOrder)) {
            // Si l'ordre est correct, on affiche le message "Vous avez gagné !" en vert
            $("#resultMessage").text("Vous avez gagné !").css("color", "green");
        } else {
            // Si l'ordre est incorrect, on affiche le message "Vous avez perdu !" en rouge
            $("#resultMessage").text("Vous avez perdu !").css("color", "red");
        }
    }
});
