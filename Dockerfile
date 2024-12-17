# Usa la última versión de Ubuntu Jammy
FROM ubuntu:22.04

# Configura variables de entorno para evitar interacciones en la instalación
ENV DEBIAN_FRONTEND=noninteractive

# Instala herramientas esenciales y agrega el PPA de PHP
RUN apt-get update && apt-get upgrade -y && \
    apt-get install -y software-properties-common && \
    add-apt-repository ppa:ondrej/php -y && \
    apt-get update && apt-get install -y \
    apache2 \
    php8.2 \
    php8.2-cli \
    php8.2-fpm \
    php8.2-mysql \
    php8.2-xml \
    php8.2-mbstring \
    php8.2-curl \
    php8.2-zip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    curl \
    git \
    unzip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Configura la zona horaria
RUN ln -snf /usr/share/zoneinfo/America/Santiago /etc/localtime && echo "America/Santiago" > /etc/timezone

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Expone el puerto 80
EXPOSE 80

# Configura el comando por defecto para iniciar Apache
CMD ["apache2ctl", "-D", "FOREGROUND"]