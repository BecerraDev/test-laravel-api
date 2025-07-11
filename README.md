#  Proyecto Laravel - Prueba Técnica ( test-laravel-api )
Este proyecto fue desarrollado como parte de una prueba técnica. Consiste en una interfaz de gestión de usuarios utilizando Laravel, con datos obtenidos desde una API interna de prueba proporcionada por la empresa.

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

Para facilitar la instalación, el proyecto incluye el archivo `.env` con la llave de aplicación (`APP_KEY`) ya generada, eliminando la necesidad de ejecutar comandos adicionales como `php artisan key:generate`. En cuanto al diseño, se aplicó un estilo visual limpio y moderno, utilizando Bootstrap como base y combinando componentes con una paleta en tonos celeste. La intención fue lograr una interfaz clara, funcional y agradable a la vista.

Durante el desarrollo se consultaron diversas fuentes (documentación, foros, videos de YouTube) para resolver errores puntuales y reforzar el enfoque en buenas prácticas con Laravel. El objetivo principal fue presentar una solución funcional y comprensible, sin necesidad de base de datos local, que permitiera evaluar fácilmente la lógica de consumo y edición de datos vía API. 

El proyecto usa una estructura organizada con plantillas reutilizables para las vistas y un controlador dedicado para la conexión con la API externa. El código está comentado para facilitar su mantenimiento. Además, se mejoró la experiencia de usuario con una pantalla de carga y estilos limpios usando Bootstrap.

