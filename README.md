# Clinica estética Karis Pereira

Proyecto de pagina web para una clinica estética de Concepción.

 Comenzando

Instrucciones para obtener una copia del proyecto en funcionamiento en una máquina local.

 Prerrequisitos

- **Docker**: Asegúrate de tener Docker instalado en tu máquina. Puedes seguir las instrucciones en https://docs.docker.com/get-docker/

 Instalación

Pasos detallados para instalar el proyecto.

git clone https://github.com/milanorzero/clinicaestetica.git

cd clinicaestetica

cp .env.example.docker .env

docker run -v $(pwd):/app composer install

cd ./docker

docker-compose up -d

docker-compose exec php php artisan key:generate

docker-compose exec php php artisan migrate

docker-compose exec php php artisan db:seed

docker-compose exec php php artisan serve --host=0.0.0.0 --port=8000

Entorno de Desarrollo y Pruebas
Este proyecto fue diseñado en un entorno específico, por lo que se recomienda utilizar las mismas versiones de software.

Entorno de Desarrollo
Sistema Operativo: Ubuntu 22.04

PHP: 8.2

Servidor Web: Apache 2.4

Entorno de Pruebas
Instrucciones específicas para el entorno de pruebas.

Configuración del Entorno
Pasos detallados para replicar el entorno de desarrollo y pruebas.

Configura las variables de entorno en el archivo .env según tus necesidades.

Instala las dependencias necesarias.

Ejecuta las migraciones y seeders.

Instalación Servidor
Instrucciones para instalar el proyecto en un servidor.

Sube el contenido del proyecto al servidor.

Configura el entorno de producción en el archivo .env.

Ejecuta las migraciones en el servidor de producción.

Configura el servidor web (Apache/Nginx).



Cliente


Ejecutando las Pruebas
Instrucciones para ejecutar pruebas y verificar el correcto funcionamiento del proyecto.

Ejecuta las pruebas unitarias:
sh
php artisan test
Revisa los resultados y soluciona cualquier error.
entrar a http://127.0.0.1:8000/
PARA ENTRAR AL PANEL DE ADMINISTRADOR:
http://127.0.0.1:8000/login

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