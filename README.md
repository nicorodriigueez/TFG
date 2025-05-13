📚 Despliegue de Laravel 11 con Breeze (Blade)

Este proyecto corresponde al TFG de DAW y consiste en un e-commerce desarrollado con Laravel 11, utilizando Breeze con Blade para el sistema de autenticación. Está preparado para ejecutarse en local de forma rápida y ordenada.

🛠️ Requisitos Previos


Antes de comenzar, asegúrate de tener instalados en tu sistema:

- PHP 8.2 o superior
- Composer
- Node.js y npm
- MySQL o MariaDB

Puedes verificar que están instalados ejecutando:

php -v  
composer -V  
node -v  
npm -v  
mysql --version

🚀 Instalación y Puesta en Marcha

1️⃣ Clonar el repositorio y acceder al directorio

```bash
git clone https://github.com/tu-usuario/tu-repo.git
cd tu-repo
📌 Sustituye la URL por la de tu propio repositorio.

2️⃣ Instalar las dependencias de Laravel

bash
Copiar
Editar
composer install
3️⃣ Configurar el entorno

bash
Copiar
Editar
cp .env.example .env
php artisan key:generate
✏️ Edita el archivo .env y configura los datos de conexión a tu base de datos.

4️⃣ Ejecutar las migraciones

bash
Copiar
Editar
php artisan migrate
5️⃣ Instalar Breeze con Blade

bash
Copiar
Editar
composer require laravel/breeze --dev
php artisan breeze:install blade
📌 Si lanza error por falta de la vista welcome.blade.php, puedes crearla manualmente con:

bash
Copiar
Editar
echo "<h1>Laravel</h1>" > resources/views/welcome.blade.php
6️⃣ Instalar las dependencias del frontend y compilar assets

bash
Copiar
Editar
npm install
npm run dev
7️⃣ Levantar el servidor de desarrollo

bash
Copiar
Editar
php artisan serve
📌 Accede a la aplicación en tu navegador desde:
http://127.0.0.1:8000/login

🔄 Comandos Útiles

Detener el servidor: Ctrl + C en la terminal

Volver a compilar assets al cambiar el CSS/JS: npm run dev

Ver las rutas disponibles: php artisan route:list

Volver a ejecutar migraciones: php artisan migrate:fresh

🧹 Limpiar el proyecto (opcional)

Si quieres empezar desde cero, puedes eliminar vendor, node_modules, y limpiar cachés:

bash
Copiar
Editar
rm -rf vendor node_modules package-lock.json
composer clear-cache
composer install
npm install
🎯 Notas Finales

Las vistas Blade se encuentran en: resources/views

La ruta principal del login se encuentra en: routes/web.php

Si modificas el CSS, asegúrate de compilarlo de nuevo con npm run dev

Este proyecto no usa Vue ni React, solo Blade y TailwindCSS

🧑‍💻 Autor

Niko – Proyecto de Desarrollo de Aplicaciones Web (DAW 2025)
