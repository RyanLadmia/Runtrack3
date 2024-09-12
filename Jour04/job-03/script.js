document.getElementById('filterButton').addEventListener('click', function() {
    fetch('pokemon.json')
        .then(response => response.json())
        .then(data => filterPokemons(data));
});

function filterPokemons(pokemons) {
    const id = document.getElementById('pokemonId').value.trim();
    const name = document.getElementById('pokemonName').value.trim().toLowerCase();
    const type = document.getElementById('pokemonType').value;
    
    const filteredPokemons = pokemons.filter(pokemon => {
        const matchesId = id === '' || pokemon.id.toString() === id;
        const matchesName = name === '' || pokemon.name.french.toLowerCase().includes(name);
        const matchesType = type === '' || pokemon.type.includes(type);
        return matchesId && matchesName && matchesType;
    });

    displayResults(filteredPokemons);
}

function displayResults(pokemons) {
    const resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = ''; // Clear previous results

    if (pokemons.length > 0) {
        pokemons.forEach(pokemon => {
            const pokemonDiv = document.createElement('div');
            pokemonDiv.innerHTML = `
                <h2>${pokemon.name.french} (#${pokemon.id})</h2>
                <p>Type: ${pokemon.type.join(', ')}</p>
                <p>HP: ${pokemon.base.HP}</p>
                <p>Attack: ${pokemon.base.Attack}</p>
                <p>Defense: ${pokemon.base.Defense}</p>
                <p>Speed: ${pokemon.base.Speed}</p>
            `;
            resultsDiv.appendChild(pokemonDiv);
        });
    } else {
        resultsDiv.innerHTML = '<p>Aucun Pokémon ne correspond à ces critères.</p>';
    }
}
