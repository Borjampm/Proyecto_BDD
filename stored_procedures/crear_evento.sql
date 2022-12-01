CREATE OR REPLACE FUNCTION

-- declaramos la función y sus argumentos
crear_evento (nombre varchar(100), fecha_inicio date, ciudad varchar(30), pais varchar(30), recinto varchar(100), id_productora int)

-- declaramos lo que retorna, en este caso un booleano
RETURNS INTEGER as $$



-- definimos nuestra función
BEGIN

    IF fecha_inicio NOT IN (SELECT eventos.fecha_inicio from eventos WHERE eventos.recinto = recinto) THEN
        INSERT INTO eventos values(nombre, fecha_inicio, ciudad, pais, recinto, id_productora);

        -- retornamos true si se agregó el valor
        RETURN 1;
    ELSE
        -- y false si no se agregó
        RETURN 0;

    END IF;



-- finalizamos la definición de la función y declaramos el lenguaje
END
$$ language plpgsql
