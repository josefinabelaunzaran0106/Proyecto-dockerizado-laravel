# Mi Proyecto Laravel

Proyecto desarrollado con **Laravel 13**, utilizando Docker para reproducir el entorno de desarrollo.

## Tecnologías

* PHP 8.3
* Laravel 13
* MySQL 8.0
* Apache
* Composer
* Node.js 22
* npm
* Vite
* Docker
* Docker Compose

## Requisitos

Para ejecutar el proyecto solamente es necesario tener instalado:

* Docker
* Docker Compose
* Git

No es necesario instalar PHP, Composer, Node.js, npm ni MySQL en la computadora host, ya que todos estos servicios se ejecutan dentro de Docker.

## Instalación

### 1. Clonar el repositorio

```bash
git clone <URL_DEL_REPOSITORIO>
cd mi-proyecto
```

### 2. Crear el archivo `.env`

Copiar el archivo de configuración de ejemplo:

```bash
cp .env.example .env
```

Verificar que la configuración de la base de datos sea la siguiente:

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel
```

### 3. Construir los contenedores

```bash
docker compose build
```

### 4. Levantar el proyecto

```bash
docker compose up -d
```

Verificar que los contenedores estén funcionando:

```bash
docker compose ps
```

### 5. Instalar las dependencias de PHP

```bash
docker compose exec app composer install
```

### 6. Generar la clave de Laravel

```bash
docker compose exec app php artisan key:generate
```

### 7. Ejecutar las migraciones

```bash
docker compose exec app php artisan migrate
```

### 8. Instalar las dependencias de Node

```bash
docker compose exec app npm install
```

### 9. Compilar los recursos frontend

```bash
docker compose exec app npm run build
```

## Acceso al proyecto

Una vez levantados los contenedores, el proyecto está disponible en:

http://localhost:8000

## Contenedores

El proyecto utiliza dos contenedores principales:

### Laravel / Apache

* Nombre: `mi-proyecto-app`
* Puerto: `8000`

### MySQL

* Nombre: `mi-proyecto-mysql`
* Puerto externo: `3307`
* Puerto interno: `3306`

La aplicación se conecta a MySQL utilizando el nombre del servicio Docker:

```env
DB_HOST=mysql
DB_PORT=3306
```

El puerto `3307` solamente se utiliza para acceder al servidor MySQL desde la computadora host.

## Estructura principal

```text
mi-proyecto/
├── app/
├── bootstrap/
├── config/
├── database/
├── docker/
│   └── apache/
│       └── 000-default.conf
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── Dockerfile
├── docker-compose.yml
├── artisan
├── composer.json
├── composer.lock
├── package.json
└── package-lock.json
```

## Comandos útiles

### Ver el estado de los contenedores

```bash
docker compose ps
```

### Ver los logs

```bash
docker compose logs -f app
```

### Entrar al contenedor de Laravel

```bash
docker compose exec app bash
```

### Ejecutar Artisan

```bash
docker compose exec app php artisan
```

Por ejemplo:

```bash
docker compose exec app php artisan route:list
```

### Ejecutar migraciones

```bash
docker compose exec app php artisan migrate
```

### Limpiar las cachés de Laravel

```bash
docker compose exec app php artisan optimize:clear
```

### Detener los contenedores

```bash
docker compose down
```

### Detener los contenedores y eliminar el volumen de MySQL

```bash
docker compose down -v
```

> Este último comando elimina también los datos almacenados en el volumen de MySQL.

## Base de datos

La base de datos se ejecuta dentro de un contenedor MySQL y utiliza un volumen Docker para conservar los datos:

```yaml
volumes:
  - mysql_data:/var/lib/mysql
```

El volumen no forma parte del repositorio Git.

Al clonar el proyecto en otra computadora se creará una nueva base de datos. Las tablas pueden generarse ejecutando:

```bash
docker compose exec app php artisan migrate
```

## Variables de entorno

El archivo `.env` contiene información específica del entorno y **no debe subirse al repositorio**.

El repositorio incluye `.env.example` como plantilla para crear la configuración local.

Después de clonar el proyecto:

```bash
cp .env.example .env
```

## Desarrollo

El código fuente se encuentra en el directorio principal del proyecto y se monta dentro del contenedor mediante Docker Compose.

Los comandos de Laravel, Composer y npm se ejecutan dentro del contenedor `app`.

Ejemplos:

```bash
docker compose exec app php artisan make:controller UsuarioController
```

```bash
docker compose exec app composer require laravel/breeze
```

```bash
docker compose exec app npm run build
```

---

## Objetivo del proyecto

Este proyecto también se utiliza como entorno de aprendizaje de **Laravel**, trabajando progresivamente conceptos como:

* Rutas
* Controllers
* Blade
* Models
* Eloquent ORM
* Migraciones
* Formularios
* Validaciones
* CRUD
* Autenticación
* Relaciones entre modelos
* Docker y entornos reproducibles

