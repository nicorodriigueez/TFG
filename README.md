📚 Despliegue de Laravel 11 con Breeze (Blade)

Este proyecto corresponde al TFG de DAW y consiste en un e-commerce desarrollado con Laravel 11, utilizando Breeze con Blade para el sistema de autenticación. Está preparado para ejecutarse en local de forma rápida y ordenada.

🛠️ Requisitos Previos

Antes de comenzar, asegúrate de tener instalados en tu sistema:

- PHP 8.2 o superior  
- Composer  
- Node.js y npm  
- MySQL o MariaDB  

Puedes verificar que están instalados ejecutando:

```bash
php -v
composer -V
node -v
npm -v
mysql --version
🚀 Instalación y Puesta en Marcha

bash
Copiar
Editar
git clone https://github.com/tu-usuario/tu-repo.git
cd tu-repo
composer install
cp .env.example .env
php artisan key:generate
# Editar .env manualmente para configurar tu base de datos
php artisan migrate
composer require laravel/breeze --dev
php artisan breeze:install blade
# Si da error por no encontrar welcome.blade.php:
echo "<h1>Laravel</h1>" > resources/views/welcome.blade.php
npm install
npm run dev
php artisan serve
📌 Accede a la aplicación desde http://127.0.0.1:8000/login

🔄 Comandos Útiles

bash
Copiar
Editar
# Detener el servidor:
Ctrl + C

# Ver rutas registradas en Laravel:
php artisan route:list

# Volver a ejecutar migraciones desde cero:
php artisan migrate:fresh

# Recompilar assets tras cambios en el CSS/JS:
npm run dev
🧹 Limpiar el proyecto (opcional)

bash
Copiar
Editar
rm -rf vendor node_modules package-lock.json
composer clear-cache
composer install
npm install
🎯 Notas Finales

Las vistas Blade se encuentran en: resources/views

El archivo de rutas está en: routes/web.php

El CSS se compila con Tailwind desde resources/css/app.css

Este proyecto no usa Vue ni React, solo Blade y TailwindCSS

