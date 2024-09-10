window.onload = () => { // S'assure que le DOM est chargé avant le déclenchement du script
    const textarea = document.getElementById("keylogger"); // Selection de l'élément lié à l'ID "keylogger" et le stocke dans une variable

    document.addEventListener("keydown", (event) => { // Attache un ecouteur d'event au DOm entier
        const key = event.key; // Récupère la touche pressée

        // Vérifier si la touche pressée est une lettre de a à z
        if (key.length === 1 && key.match(/[a-z]/i)) {
            // Si le focus est dans le textarea
            if (document.activeElement === textarea) { // Vérifie si l'élément active est le textaera
                event.preventDefault(); // Empêcher l'insertion automatique
                textarea.value += key + key; // Ajouter deux fois la lettre manuellement
            } else {
                // Sinon, ajouter la lettre une seule fois
                textarea.value += key;
            }
        }
    });
};
