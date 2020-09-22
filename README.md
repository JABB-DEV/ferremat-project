# Ferremat Project

_Es una simple web desarrollada en laravel para un proyecto escolar_

## Comenzando 🚀

### Pre-requisitos 📋

_Instalar laragon FULL v.4.0.16_

[Laragon FULL 4.0.16](https://laragon.org/download/index.html) - Entorno de desarrollo web para Laravel

### Instalación 🔧

_Pasos para la instalación del proyecto_

_Ubicado en la carpeta del proyecto instalar todas las dependencias php que ocupa el proyecto:_

```
composer install
```

_Copiar el archivo .env.example a .env_

```
cp .env.example .env

```

_y configurar los parámetros de la base de datos en el archivo .env_

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ferremat
DB_USERNAME=root
DB_PASSWORD=

```
Ejecutar el comando

```
php artisan key:generate
```

_Ir a mysql y crear una base de datos llamada 'ferremat'_

```
create database ferremat
```

_Ejecutar las migraciones para crear las tablas en la base de datos_

```
php artisan migrate
```
_Instalación de las dependencias Javascript_

```
npm install 
npm run dev
```

## Construido con 🛠️

[Laragon FULL 4.0.16](https://laragon.org/download/index.html) - Entorno de desarrollo web para Laravel, [Laravel](https://laravel.com/) - Framework de PHP, [Composer](https://getcomposer.org/) - Manejador de paquetes para PHP, [Bootstrap 4](https://getbootstrap.com/) - Framework CSS y JS para la creación de interfaces WEB, [JQuery](https://jquery.com/) - Libreria de Javascript, [FontAwesome](https://fontawesome.com/) - Framework de iconos Vectoriales y CSS

## Autores ✒️

* **José Alberto Barrueta** - *Desarrollor de todo el sitio web* - [JABB-DEV](https://github.com/JABB-DEV)