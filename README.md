# Sistema de Gestión de Servicios para Autotrónica

Este es un sistema de gestión de servicios diseñado específicamente para talleres de autotrónica. Permite llevar un registro de los servicios realizados, clientes, empleados y más.

## Características

- **Gestión de Servicios:** Registra y gestiona los servicios realizados en los vehículos.
- **Clientes y Vehículos:** Permite mantener un registro de los clientes y sus vehículos.
- **Empleados:** Administra la información de los empleados que realizan los servicios.

## Tecnologías Utilizadas

- **PHP:** Lenguaje de programación utilizado para la lógica del servidor.
- **MySQL:** Base de datos relacional para almacenar la información.
- **HTML/CSS:** Para la estructura y el diseño de la interfaz de usuario.

## Requisitos Previos

- Servidor web (Apache).
- PHP 8.1 instalado.
- MySQL.

## Instalación

1. **Clona el repositorio:**

2. **Configuración de la Base de Datos:**

- Crea una base de datos MySQL/MariaDB para el proyecto.
- Importa el archivo `database.sql` en tu base de datos para crear las tablas necesarias.

3. **Configuración de la Conexión a la Base de Datos:**

- En el archivo `config.php`, modifica las variables de conexión (`DB_HOST`, `DB_USER`, `DB_PASS`, `DB_NAME`) según tu entorno.

4. **Inicio del Servidor:**

- Inicia tu servidor web.

5. **Accede al Sistema:**

- Abre tu navegador web y visita `http://localhost/SistemaAutotronica/` para comenzar a utilizar el sistema.

## Uso

- **Inicio de Sesión:**
- Ingresa con las credenciales de administrador para acceder al panel de administración.

- **Panel de Administración:**
- Administra los servicios, clientes, empleados y genera reportes según sea necesario.

## Créditos

Desarrollado por 
- Gustavo Franco Ruiz Nina
- Erika Mendoza Apaza

