#  Proyecto Laravel - Prueba Técnica ( test-laravel-api )
Este proyecto es una prueba técnica que muestra una interfaz de gestión de usuarios con Laravel. Los datos se obtienen desde una API externa de prueba. La tabla muestra los usuarios y permite editar su información a través de un modal que muestra datos adicionales. Al guardar los cambios, se muestra un mensaje de éxito y una pantalla de carga (overlay) para mejorar la experiencia de usuario.

#

---

## Descripción

Aplicación web desarrollada en Laravel que permite:

- Obtener una tabla de usuarios desde una API externa interna.
- Visualizar datos en una tabla estilizada.
- Editar la información de un usuario a través de un formulario modal.
- Sin necesidad de base de datos local.

---

## Tecnologías utilizadas

- PHP 8.3
- Laravel 12
- Blade (motor de plantillas)
- Bootstrap 5 (para el diseño responsivo)
- Fetch API y JavaScript (para acciones dinámicas)

---

## Dependencias principales

```
"php": "^8.2",
"laravel/framework": "^12.0",
"laravel/tinker": "^2.10.1"
```
## Instalación

Pasos para ejecutar el proyecto localmente:

1. Clonar el repositorio

```bash
git clone https://github.com/BecerraDev/test-laravel-api.git
cd test-laravel-api
```
2. Ejecutar
```bash
composer install
```
3. Ejecutar
```bash
php artisan serve
```
## Solución Propuesta

Este proyecto está enfocado en cumplir cada requerimiento mencionado en la prueba técnica. Consume datos desde una API externa de prueba y valida que al editar un usuario la respuesta sea un código 200.

La tabla muestra los campos solicitados:
- ID
- Código
- Monto (formateado con separadores de miles)
- Fecha (formato dd-mm-yyyy)
- Acciones (con botón "Editar")

Al hacer clic en "Editar", se abre un modal con información adicional para modificar el usuario. La edición muestra un mensaje de éxito y una pantalla de carga (overlay) para mejorar la experiencia.

El proyecto utiliza una estructura organizada con plantillas para las vistas y un controlador dedicado para la conexión con la API externa. El código está comentado para facilitar el mantenimiento y se aplicaron estilos limpios con Bootstrap para una interfaz clara y agradable.

Además, para agilizar la instalación, el archivo .env incluye la llave de aplicación (APP_KEY) ya generada, evitando pasos extra como php artisan key:generate. No usa base de datos local, enfocándose en la lógica de consumo y edición vía API.

