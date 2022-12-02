CREATE OR REPLACE FUNCTION

-- declaramos la función y sus argumentos
accion_artista (id_artista_n int, id_evento_n int, estado_n varchar(30), id_productora_n int)

-- declaramos lo que retorna, en este caso un booleano
RETURNS INTEGER as $$

-- definimos nuestra función
BEGIN

    UPDATE artista_en_evento SET id_productora = id_productora_n, id_evento = id_evento_n, id_artista = id_artista_n, estado = estado_n
    WHERE id_productora = id_productora_n
    AND id_evento = id_evento_n
    AND id_artista = id_artista_n;

    RETURN 1;


-- finalizamos la definición de la función y declaramos el lenguaje
END
$$ language plpgsql
