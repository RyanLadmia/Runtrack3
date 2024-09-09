function jourtravaille(date) {
    // Déclaration des jours fériés de 2020 au format "MM-JJ"
    const joursFeries2020 = [
        '01-01',  // Jour de l'an
        '04-13',  // Lundi de Pâques
        '05-01',  // Fête du travail
        '05-08',  // Victoire 1945
        '05-21',  // Ascension
        '06-01',  // Lundi de Pentecôte
        '07-14',  // Fête nationale
        '08-15',  // Assomption
        '11-01',  // Toussaint
        '11-11',  // Armistice
        '12-25'   // Noël
    ];

    // Extraction du jour, du mois et de l'année de la date
    const jour = date.getDate();
    const mois = date.getMonth();  // Les mois commencent à 0
    const annee = date.getFullYear();

    // Formatter la date pour comparer (MM-DD)
    const moisJour = (mois < 10 ? '0' + mois : mois) + '-' + (jour < 10 ? '0' + jour : jour);

    // Vérification si la date est un jour férié
    if (joursFeries2020.includes(moisJour)) {
        console.log(`Le ${jour} ${mois} ${annee} est un jour férié.`);
    }
    // Vérification si c'est un week-end (samedi ou dimanche)
    else if (date.getDay() === 6 || date.getDay() === 0) {
        console.log(`Non, le ${jour} ${mois} ${annee} est un week-end.`);
    }
    // Sinon, c'est un jour travaillé
    else {
        console.log(`Oui, le ${jour} ${mois} ${annee} est un jour travaillé.`);
    }
}
