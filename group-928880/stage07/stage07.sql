SELECT
     COUNT(*) AS nb 
FROM
    types
INNER JOIN pokemon_types on types.id = pokemon_types.type_id
INNER JOIN pokemon on   pokemon.id = pokemon_types.type_id
 
WHERE types.identifier = "ice";

    