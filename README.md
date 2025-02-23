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
 4. Ingresa a la carpeta donde se descargó el repo en su entorno local
    ```
    cd repositorio
    ```
 6. Abril el repo en Visual Studio Code
    
 5. Instalar las dependencias del proyecto, esto se hace abriendo una terminal en Visual Studio Code y ejecutando el comando
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
 7. Iniciar en Xammp el motor de Base de datos MySQL y Apache.
 8. Ejecute las migraciones con el siguiente comando para crear la BD blog y las respectivas tablas con sus campos y relaciones
    ```
    php artisan migrate
    ```
 9. Inicialice el servidor local
    ```
    php artisan serve
    ```
 10. Se inicia el servidor local y se puede visualizar en la siguiente dirección y su respectivo puerto:
    ```
    http://127.0.0.1:8000

    ```
    
### Servicios api expuestos  

Paso a paso para ejecutar el proyecto

 1. Los servicios que ya se crearon se van a consumir
    ## Get
 - Endpoint para Gestion de Autores
    Detalle: Este endpoint es usuado para buscar un autor por id del autor pasando por el id del autor
    Enpoint: url/{id}
    Metodo HTTP: get
    Parametros: el parametro en la uot {id} es el id del autor a buscar
    Direccion: http://127.0.0.1:8000/api/autores/listar_id/1
    Ejemplo: como se visualiza

 - Endpoint para Gestion de Publicaciones
    Detalle: Este endpoint es usuado para buscar una publicacion por id del la publicacion pasando por el id de la publicacion
    Enpoint: url/{id}
    Metodo HTTP: get
    Parametros: el parametro en la uot {id} es el id de la publicacion a buscar
    Direccion: http://127.0.0.1:8000/api/publicacion/listar_id/1
    Ejemplo: como se visualiza

   - Endpoint para Listar Autores
    Detalle: Este endpoint es usuado para listar todos los autores 
    Enpoint: url/listar
    Metodo HTTP: get
    Parametros: el parametro en la uot listar es el listar para listar todos los autores
    Direccion:http://127.0.0.1:8000/api/autores/listar

  - Endpoint para Listar Publicaciones
    Detalle: Este endpoint es usuado para listar todas las publicaciones 
    Enpoint: url/listar
    Metodo HTTP: get
    Parametros: el parametro en la uot listar es el listar para listar todas las publicaciones 
    Direccion:http://127.0.0.1:8000/api/publicaciones/listar

    ## Post

  - Endpoint para crear Autor
    Detalle: Este endpoint es usuado para crear un autor asignandole el nombre y apellido 
    Enpoint: http://127.0.0.1:8000/api/autores/crear
    Metodo HTTP: post
    Parametros:   El parametro de entrada es un un json del autor con los siguientes parametros como nombre y apellido debemos tener encuenta usar el BOdy 
  
    Ejemplo:
    {
    	"nombre": "carlos",
        "apellido": "perez"
    }

     Endpoint para crear Publicaciobes
    Detalle: Este endpoint es usuado para crear publicaciones  asignandole el titulo, contenido, imagen 
    Enpoint: http://127.0.0.1:8000/api/publicaciones/crear
    Metodo HTTP: post
    Parametros:   El parametro de entrada es un un json de la publicacion con los siguientes parametros como titulo, contenido, imagen debemos tener encuenta usar el BOdy 

    Ejemplo:
    {
    "titulo": "Mi primer artículo",
    "contenido": "Este es el contenido de mi primer artículo.",
    "imagen": "imagen_url.jpg",
    "autor_id": 2
    }

     ## Put

  - Endpoint para Actualizar autores
    Detalle: Este endpoint es usuado para actualizar autores asignandole el nombre y apellido y modificando el campo que sea necesario
    Enpoint: http://127.0.0.1:8000/api/autores/actualizar/1
    Metodo HTTP: put
    Parametros:El parametro de entrada es un un json de la autores con los siguientes parametros como nombre y apellido debemos tener encuenta usar el BOdy 
    Ejemplo:
    {
    	"nombre": "carlos",
        "apellido": "perez"
    }


    
  - Endpoint para Actualizar publicaciones
    Detalle: Este endpoint es usuado para actualizar publicaciones asignandole el titulo, contenido, imagen y modificando el campo que sea necesario
    Enpoint: http://127.0.0.1:8000/api/publicaciones/actualizar/1
    Metodo HTTP: put
    Parametros:El parametro de entrada es un un json de la publicaciones con los siguientes parametros como titulo, contenido, imagen, debemos tener encuenta usar el BOdy 
    Ejemplo:
    {
    "titulo": "Mi primer artículo",
    "contenido": "Este es el contenido de mi primer artículo.",
    "imagen": "imagen_url.jpg",
    "autor_id": 2
    }

     ## Delete

  - Endpoint para eliminar autores
    Detalle: Este endpoint es usuado para eliminar autores asignamos el id del autor que se desea eliminar {1}
    Enpoint: http://127.0.0.1:8000/api/autores/eliminar/1
    Metodo HTTP: Delete
    Parametros:El parametro de entrada es un parametro de eliminacion por medio del id del autor 
   

    - Endpoint para eliminar publicaciones
    Detalle: Este endpoint es usuado para eliminar publicaciones asignamos el id del publicaciones que se desea eliminar {1}
    Enpoint: http://127.0.0.1:8000/api/publicaciones/eliminar/1
    Metodo HTTP: Delete
    Parametros:El parametro de entrada es un parametro de eliminacion por medio del id del publicaciones 
   
   
    


## Autor

* **Laura Valentina Cáceres Jaime**
