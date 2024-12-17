# Usar la imagen base de Ubuntu 22.04
FROM ubuntu:22.04

# Actualizar e instalar dependencias
RUN apt-get update && apt-get upgrade -y && \
    apt-get install -y \
    apache2 \
    php8.4 \
    php8.4-cli \
    php8.4-fpm \
    php8.4-mysql \
    php8.4-xml \
    php8.4-mbstring \
    php8.4-curl \
    php8.4-zip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    curl \
    git \
    unzip

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Configurar la zona horaria
RUN ln -snf /usr/share/zoneinfo/America/Santiago /etc/localtime && echo "America/Santiago" > /etc/timezone

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Copiar el contenido del proyecto
COPY . /var/www/html

# Instalar las dependencias de PHP utilizando Composer
RUN composer install

# Exponer el puerto 80
EXPOSE 80

# Comando para ejecutar Apache en modo foreground
CMD ["apache2ctl", "-D", "FOREGROUND"]
