CREATE OR REPLACE FUNCTION

-- declaramos la función y sus argumentos
agregar_artista (id_artista_n int, id_evento_n int, estado_n varchar(30), id_productora_n int)

-- declaramos lo que retorna, en este caso un booleano
RETURNS INTEGER as $$

-- definimos nuestra función
BEGIN


    INSERT INTO artista_en_evento values(id_productora_n, id_evento_n, id_artista_n, estado_n);

    -- retornamos true si se agregó el valor
     RETURN 1;



-- finalizamos la definición de la función y declaramos el lenguaje
END
$$ language plpgsql
