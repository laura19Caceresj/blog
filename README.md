#  Aplicación  en Laravel para el BackEnd del proyecto Blog

Guía para la ejecución del proyecto

### Pre-requisitos 📋

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

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=blog
    DB_USERNAME=root
    DB_PASSWORD=
    
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
    
## Autor

* **Laura Valentina Cáceres Jaime**
