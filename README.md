# NiceBase

NiceBase es una aplicación de seguimiento de clientes sencilla, construida para el proyecto del último trimestre en el SENA con Laravel 11, permite realizar operaciones CRUD de forma eficiente. Ideal para consecionarios de motos o grupos de ventas.

## Características
- Creación, edición y eliminación de registros
- Interfaz basada en Bootstrap
- Autenticación y validaciones
- Gestión de clientes
- Gestión de vendedores
- Gestión de motocicletas
- Gestión de ventas (Con un estado para el seguimiento)
- Generación de reporte de ventas en PDF
- Soporte para bases de datos MySQL

## Requisitos previos
- PHP >= 8.1
- Composer
- MySQL
- Node.js y NPM (para correr Vite, para el frontend)

## Instalación (de manera local)
1. Clonar el repositorio:
    git clone https://github.com/EmmanuelOG-dev/NiceBase.git

2. Ir al directorio del proyecto:
    cd NiceBase

3. Instalar las dependencias de PHP con Composer:
    composer install

4. Instalar las dependencias de Node.js:
    npm install
    npm run dev

5. Crear el archivo .env y configura tus variables de entorno (base de datos, etc):
    cp .env.example .env
    php artisan key:generate

7. Ejecuta las migraciones de la base de datos:
    php artisan migrate

8. Ejecuta la aplicación (para acceder desde tu navegador en http://localhost:8000):
    php artisan serve
