function showhide() {
    // article existe dans la page ?
    const article = document.getElementById("article");
    
    if (article) {
        article.remove(); // Si oui, le supprimer
    } else {
        // Sinon, le créer et l'ajouter à la page
        const newArticle = document.createElement("article");
        newArticle.id = "article"; // Ajoute un ID pour pouvoir le cibler
        newArticle.textContent = "L'important n'est pas la chute, mais l'atterrissage.";
        document.body.appendChild(newArticle); // Ajoute l'article au body
    }
}