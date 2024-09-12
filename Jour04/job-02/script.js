function jsonValueKey(jsonString, key) {
    try {
        // Convertir la chaîne de caractères en objet JSON
        const jsonObject = JSON.parse(jsonString);
        
        // Retourner la valeur associée à la clé
        return jsonObject[key];
    } catch (error) {
        // Gérer les erreurs (par exemple si le JSON est mal formé)
        console.error("Erreur de parsing JSON:", error);
        return null;
    }
}

// Exemple d'utilisation
const jsonString = `{
    "name": "La Plateforme_",
    "address": "8 rue d'hozier",
    "city": "Marseille",
    "nb_staff": "11",
    "creation": "2019"
}`;

const key = "city";
const result = jsonValueKey(jsonString, key);
window.alert(result); // Affiche: Marseille
