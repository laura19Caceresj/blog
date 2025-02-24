#  Aplicación  en Laravel para el BackEnd del proyecto Blog

Guía para la ejecución del proyecto

### Pre-requisitos

A continuación, se detalla  se detalla los pre-requisitos necesarios para poner en marcha el proyecto

* PHP
* Composer
* Xammp
* MySQL
* Git batch
* Postman
* Visual Studio Code

### Instalación y ejecución del backend

Paso a paso para ejecutar el proyecto

 1. Clona el repositorio del proyecto de backend del proyecto Blog con el siguiente comando:
    ```
    git clone https://github.com/laura19Caceresj/blog.git
    ```
 2. Ingresa a la carpeta donde se descargó el repo en su entorno local
    ```
    cd repositorio
    ```
 3. Abril el repo en Visual Studio Code
    
 4. Instalar las dependencias del proyecto, esto se hace abriendo una terminal en Visual Studio Code y ejecutando el comando
    ```
    composer install
    ```
 5. Buscar el archivo ".env" dentro del árbol del proyecto y cambiar valores de su Base de datos si lo requiere en las siguientes lineas o dejar por default para el motor MySQL.
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=blog
    DB_USERNAME=root
    DB_PASSWORD=
    ```
 6. Iniciar en Xammp el motor de Base de datos MySQL y Apache.
 7. Ejecute las migraciones con el siguiente comando para crear la BD blog y las respectivas tablas con sus campos y relaciones
    ```
    php artisan migrate
    ```
 8. Inicialice el servidor local
    ```
    php artisan serve
    ```
 9. Se inicia el servidor local y se puede visualizar en la siguiente dirección y su respectivo puerto:
    ```
    http://127.0.0.1:8000
    ```

### Servicios API Expuestos
A continuación, se detallan los endpoints disponibles para consumir y gestionar los recursos de la aplicación.

### GET - Consultas de Datos

 1. Gestionar Autor por ID
    * Endpoint: http://127.0.0.1:8000/api/autores/listar_id/{id}
    * Método HTTP: GET
    * Descripción: Obtiene los detalles de un autor por su ID.
    * Ejemplo de URL: http://127.0.0.1:8000/api/autores/listar_id/1

 2. Gestionar Publicación por ID
    * Endpoint: http://127.0.0.1:8000/api/publicacion/listar_id/{id}
    * Método HTTP: GET
    * Descripción: Obtiene los detalles de una publicación por su ID.
    * Ejemplo de URL: http://127.0.0.1:8000/api/publicacion/listar_id/1

 3. Listar Todos los Autores
    * Endpoint: http://127.0.0.1:8000/api/autores/listar
    * Método HTTP: GET
    * Descripción: Lista todos los autores registrados.
    * Ejemplo de URL: http://127.0.0.1:8000/api/autores/listar 

 4. Listar Todas las Publicaciones
    * Endpoint: http://127.0.0.1:8000/api/publicaciones/listar
    * Método HTTP: GET
    * Descripción: Lista todas las publicaciones registradas.
    * Ejemplo de URL: http://127.0.0.1:8000/api/publicaciones/listar

### POST - Creación de Recursos

 1. Crear Autor
    * Endpoint: http://127.0.0.1:8000/api/autores/crear
    * Método HTTP: POST
    * Descripción: Crea un nuevo autor asignándole un nombre y apellido.
    * Ejemplo de URL: http://127.0.0.1:8000/api/autores/crear
    * Cuerpo (Body):
    json
    Copiar
        {
          "nombre": "Carlos",
          "apellido": "Perez"
        }

 2. Crear Publicación
    * Endpoint: http://127.0.0.1:8000/api/publicaciones/crear
    * Método HTTP: POST
    * Descripción: Crea una nueva publicación con título, contenido, imagen y autor.
    * Ejemplo de URL: http://127.0.0.1:8000/api/publicaciones/crear
    * Cuerpo (Body)
    json
    Copiar
        {
          "titulo": "Mi primer artículo",
          "contenido": "Este es el contenido de mi primer artículo.",
          "imagen": "imagen_url.jpg",
          "autor_id": 2
        }

### PUT - Actualización de Recursos

 1. Actualizar Autor
    * Endpoint: http://127.0.0.1:8000/api/autores/actualizar/{id}
    * Método HTTP: PUT
    * Descripción: Actualiza la información de un autor (nombre y apellido).
    * Ejemplo de URL: http://127.0.0.1:8000/api/actualizar/{id}
    * Cuerpo (Body)
    json
    Copiar
       {
          "nombre": "Carlos",
          "apellido": "Perez"
       }
 
 2. Actualizar Publicación

    * Endpoint: http://127.0.0.1:8000/api/publicaciones/actualizar/{id}
    * Método HTTP: PUT
    * Descripción: Actualiza la información de una publicación (título, contenido, imagen).
    * Ejemplo de URL: http://127.0.0.1:8000/api/actualizar/{id}
    * Cuerpo (Body)
    json
    Copiar
        {
          "titulo": "Mi primer artículo actualizado",
          "contenido": "Contenido actualizado.",
          "imagen": "nueva_imagen.jpg",
          "autor_id": 2
        }

### DELETE - Eliminación de Recursos

 1. Eliminar Autor
    * Endpoint: http://127.0.0.1:8000/api/autores/eliminar/{id}
    * Método HTTP: DELETE
    * Descripción: Elimina un autor por su ID.
    * Ejemplo de URL: http://127.0.0.1:8000/api/autores/eliminar/1
    
 2. Eliminar Publicación
    * Endpoint: http://127.0.0.1:8000/api/publicaciones/eliminar/{id}
    * Método HTTP: DELETE
    * Descripción: Elimina una publicación por su ID.
    * Ejemplo de URL: http://127.0.0.1:8000/api/publicaciones/eliminar/2
      

## Autor

* **Laura Valentina Cáceres Jaime**
