function tri(numbers, order) {
    // Fonction de comparaison pour le tri
    function comparer(a, b) {
        if (order === "asc") {
            return a - b; // Tri croissant
        } else if (order === "desc") {
            return b - a; // Tri décroissant
        } else {
            throw new Error("L'ordre spécifié est invalide. Utilisez 'asc' ou 'desc'.");
        }
    }

    // Trier le tableau en utilisant la fonction de comparaison
    return numbers.sort(comparer);
}