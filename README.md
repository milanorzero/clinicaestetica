# Clinica estética Karis Pereira

Proyecto de pagina web para una clinica estética de Concepción.

 Comenzando

Instrucciones para obtener una copia del proyecto en funcionamiento en una máquina local.

 Prerrequisitos

- **Docker**: Asegúrate de tener Docker instalado en tu máquina.

 Instalación

Pasos detallados para instalar el proyecto.
// clonar repositorio

git clone https://github.com/milanorzero/clinicaestetica.git
// entrar al directorio

cd clinicaestetica
// copiar variables de entorno

cp .env.example.docker .env

//instalar dependencias usando composer

docker run --rm -v $(pwd):/app composer install

// abrir directorio docker

cd ./docker

//levantar contenedor

docker-compose up -d

// llave de aplicacion y migraciones

docker-compose exec php php artisan key:generate

docker-compose exec php php artisan migrate

docker-compose exec php php artisan db:seed

para acceder a la aplicacion: http://localhost:8000
panel de administrador: http://localhost:8000/login
Entorno de Desarrollo y Pruebas
Este proyecto fue diseñado en un entorno específico, por lo que se recomienda utilizar las mismas versiones de software.

Entorno de Desarrollo
Sistema Operativo: Ubuntu 22.04

PHP: 8.2

Servidor Web: Apache 2.4

Construido con
Laravel - Framework PHP para aplicaciones web.

MySQL - Base de datos relacional.

Docker - Contenedores para desarrollo y despliegue.

Contribuciones
Instrucciones para quienes deseen contribuir al proyecto.

Haz un fork del repositorio.

Crea una nueva rama (git checkout -b feature/nueva-funcionalidad).

Realiza tus cambios y haz commit (git commit -am 'Añadir nueva funcionalidad').

Haz push a la rama (git push origin feature/nueva-funcionalidad).

Abre un Pull Request.

Licencia
Este proyecto está licenciado bajo la licencia MIT. Ver el archivo LICENSE para más detalles.