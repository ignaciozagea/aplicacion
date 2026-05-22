<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


📝 Task Manager - Laravel

Aplicación web simple de gestión de tareas desarrollada con Laravel siguiendo el patrón MVC. Permite a los usuarios crear y eliminar tareas, con actualización en tiempo real en la interfaz.

✨ Funcionalidades

· ✅ Agregar nuevas tareas
· ❌ Eliminar tareas existentes
· 💾 Persistencia en base de datos
· 🔄 Actualización dinámica de la lista de tareas

🛠️ Tecnologías utilizadas

· Laravel (PHP Framework)
· MySQL / SQLite
· Blade (motor de plantillas)
· Bootstrap (estilos)
· JavaScript (interacciones básicas)

📁 Estructura del proyecto

```
├── app/               # Controladores y modelos
├── database/          # Migraciones y seeders
├── resources/views/   # Vistas Blade
├── routes/            # Definición de rutas web/api
├── public/            # Archivos públicos (CSS, JS, assets)
├── tests/             # Pruebas automatizadas
└── config/            # Configuración del proyecto
```

🚀 Instalación y configuración

Requisitos previos

· PHP >= 8.1
· Composer
· MySQL (o SQLite)
· Node.js (opcional, para assets)

Pasos de instalación

```bash
# Clonar el repositorio
git clone https://github.com/tu-usuario/task-manager.git
cd task-manager

# Instalar dependencias de PHP
composer install

# Copiar archivo de entorno
cp .env.example .env

# Generar clave de aplicación
php artisan key:generate

# Configurar base de datos en .env y ejecutar migraciones
php artisan migrate

# (Opcional) Instalar dependencias frontend
npm install
npm run build

# Iniciar servidor de desarrollo
php artisan serve
```

🧪 Uso

1. Accede a http://localhost:8000
2. Escribe una tarea en el campo de texto y haz clic en "Agregar"
3. La tarea aparecerá en la lista
4. Haz clic en el botón "Eliminar" para borrarla

📄 Licencia

MIT
