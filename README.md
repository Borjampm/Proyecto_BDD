# Entrega 3
## IIC2413 - Bases de Datos

### Equipo
Nombre              | Sección | Email
------------------- | ------- | ---------------------
Borja Márquez de la Plata | 3 | [bmarquezdelaplata@uc.cl]
Cristóbal Cuneo       	  | 3 | [cristobal.cuneo@uc.cl]
Lucas Vidal    	      	  | 3 | [lucas.vidal@uc.cl]
Martín Caldentey      	  | 3 | [martincaldenteyl@uc.cl]

El link a nuestra página principal es: https://codd.ing.puc.cl/~grupo13/index.php

### Credenciales
Para iniciar sesión en la aplicación, en primer lugar se deberá presionar el botón "importar usuarios", con lo que se tendrá acceso a una vista con todas las credenciales de tanto las productoras como los artistas. Utilizando cualquiera una de estas se podrá iniciar sesión.

La asignación de estas contraseñas se realiza al momento de importar los usuarios, en el cual se asigna un número aleatorio entre 10000000 y 99999999 a cada usuario.

### Aclaraciones y supuestos
- Los procedimientos almacenados que se utilizaron fueron los siguientes: ```importar_usuario.sql``` para cargar los artistas y productoras, ```crear_evento.sql``` y ```agregar_artista.sql``` para crear nuevos eventos e invitar a artistas, y por último ```accion_artista.sql``` para actualizar los eventos cuando un artista acepte o rechace la invitación.

- Un evento puede estar en 3 estados distintos: programado (si el evento es aprobado por todos los artistas invitados), en espera de aprobación (si se está a la espera de que los artistas invitados aprueben el evento), y rechazado (si alguno de los artistas invitados rechaza la invitación).

- Si a un evento están invitados múltiples artistas, basta que solo 1 de ellos rechace la invitación para que el evento quede rechazado en su totalidad. Por el otro lado, es necesario contar con la aprobación de todos los artistas para que el evento quede programado. Los eventos cargados del archivo .csv se considerarán eventos programados.

- Para mostrar las entradas de cortesía disponibles por categoría se utilizaron solamente los datos de las entradas del grupo par, dado que no fue posible establecer una relación entre los datos de ambos grupos. Al consultar por las entradas disponibles para un evento, se muestran las distintas categorías junto a la cantidad de entradas disponibles para cada una de estas.




