// Le code Konami à détecter
const konamiCode = [
    'ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown'
]; 

let konamiIndex = 0; // Variable pour suivre la progression actuelle du code

document.addEventListener('keydown', (event) => { // Ecouteur d'event pour les frappes de touches
    if (event.code === konamiCode[konamiIndex]) { // Verifie la validité des touches pressées
        konamiIndex++; // Incrémentation pour vérifier la prochaine touche
        if (konamiIndex === konamiCode.length) { // Vérifie la séquence complète
            // Code Konami détecté
            document.body.classList.add('konami-mode'); // Applique le style contenu dans le classe "konami-mode"
            konamiIndex = 0; // Réinitialiser l'index pour une nouvelle saisie
        }
    } else {
        konamiIndex = 0; // Réinitialiser l'index si la touche est incorrecte
    }
});
