window.addEventListener("scroll", () => { // Ajoute un écouteur d'event sur le scroll
    const footer = document.getElementById("footer"); // Récupère footer via sonn ID
    const scrollTop = window.scrollY; // Prend la position verticale du scroll (en px)
    const docHeight = document.documentElement.scrollHeight; // Prend la hauteur totle du DOM (en px)
    const winHeight = window.innerHeight; // Prend la hauteur de la fenetre d'affichage (partie visible)
    const scrollPercent = (scrollTop / (docHeight - winHeight)) * 100; // Calcule le pourcentage de scrolling de la page (moins la hauteur de la fenêtre)

    // Calculer la couleur en fonction du pourcentage de défilement
    const colorValue = Math.min(255, Math.floor(scrollPercent * 2.55)); // 1) S'assur que la valeur ne dépasse pas 255 (max pour rgb) 2) Converti %tage en valeur entre 0 et 255 sans decimale
    footer.style.backgroundColor = `rgb(${colorValue}, 0, ${255 - colorValue})`; // Passe du bleu au rouge
});
