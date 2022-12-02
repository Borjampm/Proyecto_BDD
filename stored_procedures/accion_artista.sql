CREATE OR REPLACE FUNCTION

-- declaramos la función y sus argumentos
accion_artista (id_artista_n int, id_evento_n int, estado_n varchar(30), id_productora_n int)

-- declaramos lo que retorna, en este caso un booleano
RETURNS INTEGER as $$

DECLARE
total int;

DECLARE
apruebo int;

-- definimos nuestra función
BEGIN

    UPDATE artista_en_evento SET  estado = estado_n
    WHERE id_productora = id_productora_n
    AND id_evento = id_evento_n
    AND id_artista = id_artista_n;

    SELECT INTO total
    COUNT(*)
    FROM artista_en_evento
    WHERE artista_en_evento.id_evento = id_evento_n;

    SELECT INTO apruebo
    COUNT(*)
    FROM artista_en_evento
    WHERE artista_en_evento.id_evento = id_evento_n AND artista_en_evento.estado = 'Aprobado';

    IF total = apruebo THEN
        UPDATE eventos SET  estado = 'Programado'
        WHERE id_evento = id_evento_n;
    ELSE
        IF 'Rechazado' IN (SELECT estado FROM artista_en_evento WHERE artista_en_evento.id_evento = id_evento_n) THEN
            UPDATE eventos SET  estado = 'Rechazado'
            WHERE id_evento = id_evento_n;
        END IF;
    END IF;

    RETURN 1;




-- finalizamos la definición de la función y declaramos el lenguaje
END
$$ language plpgsql
