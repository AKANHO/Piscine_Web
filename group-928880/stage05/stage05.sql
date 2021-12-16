SELECT
    moves.identifier AS attaque
FROM
    pokemon,
    pokemon_moves,
    moves
WHERE
    pokemon_moves.pokemon_id = pokemon.id
    AND pokemon_moves.move_id = moves.id
    AND pokemon.identifier = "Snorlax"
LIMIT
    5;