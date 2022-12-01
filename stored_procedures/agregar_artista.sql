CREATE OR REPLACE FUNCTION

-- declaramos la función y sus argumentos
agregar_artista (id_artista_n int, id_evento_n int, estado_n varchar(30), id_productora_n int)

-- declaramos lo que retorna, en este caso un booleano
RETURNS INTEGER as $$

-- definimos nuestra función
BEGIN


    IF id_artista_n NOT IN (SELECT artista_en_evento.id_artista from artista_en_evento WHERE artista_en_evento.id_productora = id_productora_n AND artista_en_evento.id_evento = id_evento_n) THEN

        INSERT INTO artista_en_evento values(id_productora_n, id_evento_n, id_artista_n, estado_n);
    
    END IF;

     RETURN 1;



-- finalizamos la definición de la función y declaramos el lenguaje
END
$$ language plpgsql
