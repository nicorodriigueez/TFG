
![logolargoSF](https://github.com/user-attachments/assets/b755d695-43d7-4e28-a0eb-03c300b757f1)


# E-SNEAKERS / e-comerce laravel 11 (TFG JUNIO 2025)

Bienvenido al proyecto **E-SNEAKERS**, este proyecto corresponde al TFG de DAW y consiste en un e-commerce desarrollado con Laravel 11, utilizando Breeze con Blade para el sistema de autenticación. Está preparado para ejecutarse en local de forma rápida y ordenada.

## 🚀 Tecnologías utilizadas

- **Frontend**: Blade,html,javascript,css.
- **Backend**: php.
- **Base de datos**: PostgreSQL
- **Contenedores**: Docker

## 🎯 Funcionalidades principales

- **Landing Page** pública:
  - Hero llamativo (imagen/vídeo)
  - Sección "Quiénes somos" y "Servicios"
  - Carrito
  - Catalogo
  - Sistemas de pago

- **Sistema de login y gestión de roles (CRUD)**:
  - **Compradores**: comprar e interactuar con productos.
  - **Administradores**: Gestionar y editar productos y funcionalidades de la tienda. Posibilidad de analisis.
  - **Vendedores**: interactuar y editar productos.

- **Gestión de Productos**:
  - Creación manual de eventos (admin)
  - Solicitud de eventos (usuarios)
  - Estados de eventos: disponible, reservado, cancelado

- **Panel de usuario**:
  - Gestión de perfil
  - Visualización de solicitudes
  - Vista calendario con solicitudes y estado

- **Panel de administrador**:
  - Gestión avanzada de solicitudes y usuarios
  - Estadísticas de actividad
  - Integración opcional con calendarios externos (Google Calendar, Outlook)
 
- **Panel de Vendedor**:
  - Posibilidad de solicitar nuevos eventos
  - Visualización de eventos activos
  - Visualización de eventos pasados



# 📚 Despliegue de una Aplicación Symfony y Angular con Docker Compose
Este proyecto utiliza Docker y Docker Compose para desplegar una aplicación que incluye un backend Symfony, un frontend Angular y una base de datos PostgreSQL de manera rápida y sencilla.

---

## 🛠️ Requisitos Previos
Antes de comenzar, asegúrate de tener instalados en tu sistema:

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)
- PHP 8.2 o superior
- Composer
- Node.js y npm
---
Puedes verificar que están instalados ejecutando:

- php -v
- composer -V
- node -v
- npm -v

## 🚀 Instalación y Puesta en Marcha

### 1️⃣ Clonar el repositorio
Ejecuta el siguiente comando para clonar el proyecto:
```bash
git clone git@github.com:nicorodriigueez/TFG.git
cd TFG
```

### 2️⃣ Instalar las dependencias de Laravel

Para instalar las dependencias:
```bash
composer install
```

### 3️⃣ Configurar el entorno

Genera una clave de aplicacion

```bash
php artisan key:generate
```
✏️ Edita el archivo .env y configura los datos de conexión a tu base de datos.

Ejemplo:

DB_CONNECTION=//tu base de datos(mysql,postgre...)
DB_HOST=1//IP
DB_PORT=//Puerto que usa
DB_DATABASE=//nombre de la BBDD
DB_USERNAME=//usuario
DB_PASSWORD=//contraseña

Asegurate de tener tus datos correctos para que no haya errores al migrar.

### 4️⃣ Ejecutar las migraciones

```bash
php artisan migrate
```

## 5️⃣ Instalar Breeze con Blade

```bash
composer require laravel/breeze --dev
php artisan breeze:install blade
```
📌 Si lanza error por falta de la vista welcome.blade.php, puedes crearla manualmente con:

```bash
echo "<h1>Laravel</h1>" > resources/views/welcome.blade.php
```
---

## 6️⃣ Instalar las dependencias del frontend y compilar assets

importante ejecutar npm run dev cada vez que se vuelva a iniciar el proyecto
```bash
dnpm install
npm run dev
```
## 7️⃣ Levantar el servidor de desarrollo

importante ejecutar npm run dev cada vez que se vuelva a iniciar el proyecto
```bash
php artisan serve
```
📌 Accede a la aplicación en tu navegador desde:
http://127.0.0.1:8000/login

## 🔄 Comandos Útiles

- Detener el servidor:
```bash
 Ctrl + C en la terminal
```
- Volver a compilar assets al cambiar el CSS/JS: 
```bash
npm run dev
```
- Ver las rutas disponibles: 
```bash
php artisan route:list
```
- Volver a ejecutar migraciones: 
```bash
php artisan migrate:fresh
```
- 🧹 Limpiar el proyecto (opcional)

Si quieres empezar desde cero, puedes eliminar vendor, node_modules, y limpiar cachés:
```bash
rm -rf vendor node_modules package-lock.json
composer clear-cache
composer install
npm install
```

## 🎯 Notas Finales
-Las vistas Blade se encuentran en: resources/views

La ruta principal del login se encuentra en: routes/web.php

Si modificas el CSS, asegúrate de compilarlo de nuevo con npm run dev

Este proyecto no usa Vue ni React, solo Blade y TailwindCSS

Para más información sobre **Symfony**, **Angular** o **PostgreSQL**, consulta sus respectivas documentaciones oficiales.

🧑‍💻 Autor

Nicolás Rodríguez Vázquez– Proyecto de Desarrollo de Aplicaciones Web (DAW 2025)
