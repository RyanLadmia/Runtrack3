function estPremier(nombre) {
    if (nombre <= 1) return false;
    if (nombre <= 3) return true;
    if (nombre % 2 === 0 || nombre % 3 === 0) return false;
    for (let i = 5; i * i <= nombre; i += 6) {
        if (nombre % i === 0 || nombre % (i + 2) === 0) return false;
    }
    return true;
}

function sommenombrespremiers(a, b) {
    if (estPremier(a) && estPremier(b)) {
        return a + b;
    } else {
        return false;
    }
}
