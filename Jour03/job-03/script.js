$(document).ready(function() {
    var taquin = $("#taquin"); // Sélectionne la grille de jeu
    var emptyTile = $("#empty"); // Sélectionne la case vide

    // Fonction pour mélanger les carreaux
    function shuffleTiles() {
        var tiles = $(".tile").not(".empty").toArray(); // Récupère toutes les tuiles sauf la vide
        tiles.sort(function() { return Math.random() - 0.5; }); // Mélange aléatoirement les tuiles
        tiles.forEach(function(tile) {
            $(taquin).append(tile); // Replace les tuiles mélangées dans la grille
        });
        $("#message").text(""); // Efface tout message précédent
        $("#restartButton").hide(); // Cache le bouton Recommencer
    }

    // Vérification si le joueur a gagné
    function checkWin() {
        var correctOrder = ["tile1", "tile2", "tile3", "tile4", "tile5", "tile6", "tile7", "tile8"];
        var currentOrder = [];

        // Récupère l'ordre actuel des tuiles dans la grille
        $(".tile").not(".empty").each(function() {
            currentOrder.push($(this).attr("id"));
        });

        // Compare l'ordre actuel à l'ordre correct
        if (JSON.stringify(correctOrder) === JSON.stringify(currentOrder)) {
            $("#message").text("Vous avez gagné !").css("color", "green");
            $(".tile").off("click"); // Désactive les clics sur les tuiles
            $("#restartButton").show(); // Affiche le bouton Recommencer
        }
    }

    // Fonction pour déplacer une tuile adjacente à la case vide
    function moveTile(tile) {
        var emptyPos = emptyTile.index();
        var tilePos = $(tile).index();

        // Vérifie si la tuile est adjacente à la case vide (haut, bas, gauche ou droite)
        if (Math.abs(emptyPos - tilePos) === 1 || Math.abs(emptyPos - tilePos) === 3) {
            emptyTile.before(tile); // Déplace la tuile dans la case vide
        }
    }

    // Ajoute un événement de clic à toutes les tuiles
    $(".tile").on("click", function() {
        moveTile(this); // Déplace la tuile cliquée si possible
        checkWin(); // Vérifie si le joueur a gagné
    });

    // Mélange les tuiles au chargement de la page
    shuffleTiles();

    // Gère le bouton "Recommencer"
    $("#restartButton").on("click", function() {
        shuffleTiles(); // Mélange les tuiles à nouveau
        $(".tile").on("click", function() {
            moveTile(this); // Permet de déplacer les tuiles après un nouveau démarrage
            checkWin(); // Vérifie la victoire
        });
    });
});
