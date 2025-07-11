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

Para que la instalación sea más rápida, el proyecto ya incluye el archivo `.env` con la llave de aplicación (`APP_KEY`) generada, así no hace falta ejecutar comandos extra como php artisan key:generate. En cuanto al diseño, usé Bootstrap para darle un estilo limpio y moderno, con tonos celestes para que la interfaz sea clara y agradable.

Durante el desarrollo, consulté diferentes fuentes como documentación, foros y videos de YouTube para resolver errores y aplicar buenas prácticas en Laravel. La idea principal fue crear una solución funcional y fácil de entender, sin usar base de datos local, para enfocarme en la lógica de consumo y edición vía API.

El proyecto tiene una estructura ordenada con plantillas reutilizables para las vistas y un controlador específico para la conexión con la API externa. El código está comentado para facilitar su mantenimiento. También mejoré la experiencia de usuario con una pantalla de carga y estilos más limpios usando Bootstrap.

