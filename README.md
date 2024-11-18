# Sistema de Autenticación en PHP

Este proyecto implementa un sistema de autenticación básico en PHP utilizando sesiones. Incluye un formulario de login, una página de bienvenida, una página de permisos para usuarios no autenticados, y una opción para cerrar sesión.

## Estructura del Proyecto

/autenticacion-php ├── sesion.html # Formulario de Login ├── sesion.php # Lógica de validación de credenciales y manejo de sesión ├── noPermisos.php # Página de acceso denegado para usuarios no autenticados ├── cierreSesion.php # Cierre de sesión y destrucción de sesión activa

## Descripción de las Páginas

1. **sesion.html**:
   - Un formulario donde el usuario puede introducir su nombre de usuario y contraseña.
   - Al enviarlo, las credenciales son validadas en `sesion.php`.

2. **sesion.php**:
   - Valida las credenciales ingresadas mediante un array predefinido.
   - Si las credenciales son correctas, se inicia la sesión y el usuario es redirigido a la página de bienvenida.

3. **noPermisos.php**:
   - Esta página se muestra cuando un usuario no autenticado intenta acceder a la página de bienvenida. Si no está autenticado, se redirige automáticamente aquí.

4. **cierreSesion.php**:
   - Permite al usuario cerrar sesión, destruye la sesión activa y redirige al formulario de login.

## Funcionamiento del Sistema

1. El usuario accede a `sesion.html` e ingresa su nombre de usuario y contraseña.
2. Si las credenciales son correctas, es redirigido a la página de bienvenida.
3. Si intenta acceder a la página de bienvenida sin autenticarse, se redirige a `noPermisos.php`.
4. El usuario puede cerrar sesión en cualquier momento, lo que destruirá su sesión y lo redirigirá nuevamente a `sesion.html`.

## Tecnologías Utilizadas

- **PHP**: Para la validación de credenciales y manejo de sesiones.
- **Sesiones PHP**: Para mantener el estado de autenticación entre páginas.
- **Redirecciones HTTP**: Usando `header()` para controlar el flujo entre páginas.

## Instrucciones de Instalación

1. Clona este repositorio en tu servidor local o en un servidor web compatible con PHP:

   git clone https://github.com/tu_usuario/tu_repositorio.git
