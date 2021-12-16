SELECT
    types.identifier AS type
FROM
    pokemon,
    pokemon_types,
    types
WHERE
    pokemon_types.pokemon_id = pokemon.id
    AND pokemon_types.type_id = types.id
    AND pokemon.identifier = "Scyther"
LIMIT
    2;