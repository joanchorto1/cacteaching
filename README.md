
![Devflix_logo.png](public%2Fstorage%2FDevflix_logo.png)
____________________________________
## 1. Introducción
Este proyecto es una aplicación web que permite a los usuarios registrados ver videos de cursos de programación. Los usuarios pueden ver videos de cursos de programación, marcar videos como favoritos, ver videos que han marcado como favoritos, ver videos que han visto, ver videos que han marcado como vistos

## 2. Tecnologías
- Vue.js
- Node.js
- Laravel
- Sqlite
- Tailwindcss

## 3. Instalación
### 3.1. Clonar el repositorio
```bash
git clone
```
### 3.2. Instalar dependencias
```bash
cd casteaching
composer install
npm install
```
### 3.3. Crear archivo .env
```bash
cp .env.example .env
```
### 3.4. Generar clave
```bash
php artisan key:generate
```
### 3.5. Crear base de datos
```bash
touch database/database.sqlite
```
### 3.6. Migrar base de datos
```bash
php artisan migrate
```
### 3.7. Iniciar servidor
```bash
php artisan serve
```
### 3.8. Compilar assets
```bash
npm run dev
```
## 4. Uso
### 4.1. Registro
Para registrarse, el usuario debe hacer clic en el botón "Registrarse" en la barra de navegación. Luego, el usuario debe completar el formulario de registro con su nombre, correo electrónico y contraseña. Una vez que el usuario haya completado el formulario, debe hacer clic en el botón "Registrarse". Si el usuario ha completado el formulario correctamente, se le redirigirá a la página de inicio.

### 4.2. Inicio de sesión
Para iniciar sesión, el usuario debe hacer clic en el botón "Iniciar sesión" en la barra de navegación. Luego, el usuario debe completar el formulario de inicio de sesión con su correo electrónico y contraseña. Una vez que el usuario haya completado el formulario, debe hacer clic en el botón "Iniciar sesión". Si el usuario ha completado el formulario correctamente, se le redirigirá a la página de inicio.

### 4.3. Ver videos
Para ver videos, el usuario debe hacer clic en el botón "Ver videos" en la barra de navegación. Luego, el usuario verá una lista de videos. El usuario puede hacer clic en un video para verlo.
# cacteaching
