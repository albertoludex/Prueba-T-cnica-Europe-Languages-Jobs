![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Node.js](https://img.shields.io/badge/Node.js-43853D?style=for-the-badge&logo=node.js&logoColor=white)
![Vue.js](https://img.shields.io/badge/Vue.js-4FC08D?style=for-the-badge&logo=vue.js&logoColor=white)
![Quasar](https://img.shields.io/badge/Quasar-1976D2?style=for-the-badge&logo=quasar&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

<table>
  <tr>
    <td><img src="ff8080814d95d26a014d95f8f6b80022-large.png" alt="logo" width="100"></td>
    <td><h1>Prueba Técnica Europe Languages Jobs</h1></td>
  </tr>
</table>

## indice
1. [Instalacion](#instalacion)
2. [Descripcion](#descripcion)
3. [Funcionalidades](#funcionalidades)

## instalacion

Servidor
  Los requisitos para tener nuestra parte de backend son:
  
  -Tener instalado PHP en tu sistema ([PHP.net](https://www.php.net))

  -Tenemos que instalar el composer:
  1. Abrimos nuestro directorio del proyecto de laravel y escribir en la terminal 
    composer install
  2. Configura el .env
  3. Para comprobar que funciona inicia el servidor: 
    php artisan serve

Cliente
  Los requisitos para tener nuestro frontend son:
  
  1. Asegurarnos que tenemos node.js instalados ([Node.js](https://www.nodejs.org))

  2. Abrimos nuestro directorio del proyecto de nodejs
    
  3. Realizamos la instalacion de nuestro npm: 
    
    npm install
    
  4. Para comprobar que funciona iniciamos el cliente: npm run dev
  
  Esto es para nodejs, para quasar necesitamos lo siguiente:
   
  1. Tener lo anterior realizado

  2. instalar quasar:

    npm install -g @quasar/cli

  3. Creamo nuestro proyecto:

    npm init quasar nombre_proyecto

  4. Iniciamos el cliente:

    quasar dev

  5. estamos corriendo en la siguiente url:

    http://localhost:9000/#/

### ⚠️Importante⚠️

Para que el proyecto funcione correctamente, debes tener en cuenta lo siguiente:

- El servidor y el cliente deben estar corriendo simultáneamente.
- Asegúrate de que ambos estén configurados correctamente antes de iniciar el proyecto.




    
## descripcion
En esta prueba realizaremos un clasificador de perros, con posibilidad de detallar informacion como:
Nombre de raza 
Tamaño
Color de pelo
...
Ademas nosotros hemos añadido el campo fecha de nacimiento para tenerlo tambien 

La prueba se realizara con Laravel, VueJS 3 usando composition API y Quasar.
El objetivo principal es crear una SPA donde se pueda subir una foto de un perro, junto a un formulario donde se puedan insertar los detalles mencionados al principio

## funcionalidades:

En cuanto a la realizacion de nuestra parte de frontend tenemos los siguiente elementos creados:

AyudaPagina.vue: mostramos un poco de ayuda para la pagina y documentacion, incluido este readme.

DetallesDogPagina.vue: importamos el componente DetallesDog.vue, este componente muestra una lista de perros con detalles como la raza, tamaño... Tambien tiene la funcionalidad de borrar un perro de la lista y paginar a traves de la lista 

ErrorNotFoundPage.vue: Control de errores entre paginas

FormularioDogPagina.vue: importamos el componente FormularioDogPagina.vue, este componente proporciona un formulario para poner todos los campos del perro que queremos poner en nuestra base de datos

IndexPage.vue: pagina de bienvenida con links al resto de paginas que tenemos.

En cuanto al backend tenemos lo siguiente:

Controller llamado Dog_Controller.php, el cual maneja las operaciones CRUD de crear, leer y eliminar en la entidad perro.
Modelo del Eloquent en laravel llamado perros.php, que permite interactura con la base de datos, cada modelo corresponde a una tabla en la base de datos

En cuanto a las rutas, en nuestro api.php, estamos manejando nuestra solicitudes de get, post delete y put, definiendo asi las URLs de la API

Para insertar nuestra base de datos haremos una migracion, la cual hemos creado con mariaDB, creando la siguiente base de datos:
```sql     
    CREATE DATABASE perros_db;
    USE perros_db;
    CREATE TABLE perros (
    id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    foto VARCHAR(255) NOT NULL,
    raza VARCHAR(255) NOT NULL,
    tamaño VARCHAR(255) NOT NULL,
    color VARCHAR(255) NOT NULL,
    fecha_nacimiento DATE NOT NULL
);
  ```

Y la migramos en laravel de la siguiente forma:
   
    php artisan migrate


# maquetacion de la web   

## descripcion
Nos pide que repliquemos la maquetacion de la siguiente web: 
https://www.europelanguagejobs.com/companies

Para ello nos pide usar una libreria de maquetacion, por lo tanto hemos usado boostrap
### como usarlo

Para poder visualizar la web, simplemente tenemos que abrir el archivo `index.html` en nuestro navegador

## Autor

**Alberto Ludeña**

|   |   |
|---|---|
| <img src="https://raw.githubusercontent.com/github/explore/main/topics/github/github.png" width="30" style="background-color:white;">  | [GitHub](https://github.com/albertoludex)  |
| <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" width="30" style="background-color:white;">  | [LinkedIn](https://www.linkedin.com/in/alberto-lude%C3%B1a-7932aa1ab/)  |
