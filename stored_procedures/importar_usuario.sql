CREATE OR REPLACE FUNCTION

-- declaramos la función y sus argumentos
importar_usuario (user_name varchar(100), password varchar(30), tipo varchar(30), id_tipo int)

-- declaramos lo que retorna, en este caso un booleano
RETURNS BOOLEAN as $$



-- definimos nuestra función
BEGIN

    -- verificar si existe la columna generation, si no existe la agregamos y seteamos todos los valores de esa columna en 1
    --IF username NOT IN (SELECT column_name FROM information_schema.columns WHERE table_name='pokemon1') THEN
    --    ALTER TABLE pokemon1 ADD generation int;
    --    UPDATE pokemon1 SET generation = 1;
    --END IF;

    -- si el id en el argumento no está en la tabla, agregamos el pokemon
    -- notar que ahora debemos agregar el dato de la columna generation en el values a insertar
    -- INSERT INTO usuarios VALUES(user_name , password , tipo , id_tipo);
    IF user_name NOT IN (SELECT usuarios.user_name from usuarios) THEN
        INSERT INTO usuarios values(user_name, password , tipo , id_tipo);

        -- retornamos true si se agregó el valor
        RETURN TRUE;
    ELSE
        -- y false si no se agregó
        RETURN FALSE;

    END IF;



-- finalizamos la definición de la función y declaramos el lenguaje
END
$$ language plpgsql
