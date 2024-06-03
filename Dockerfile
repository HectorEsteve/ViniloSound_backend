#imagen oficial de PHP con Apache
FROM php:8.1-apache

#Establecer el directorio de trabajo
WORKDIR /var/www/html

# Instala dependencias del sistema recomendadas para laravel
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    nano

# Instala extensiones de PHP requeridas
RUN docker-php-ext-install pdo pdo_mysql gd

# Instala Composer desde imagen oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instalar Node.js y npm
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash -
RUN apt-get install -y nodejs

# Copia el contenido de la aplicación al contenedor
COPY . .

# Activa el módulo de reescritura de Apache
RUN a2enmod rewrite

# Copia el archivo de configuración del VirtualHost
COPY laravel.conf /etc/apache2/sites-available/laravel.conf

# Habilita el VirtualHost
RUN a2ensite laravel.conf

# Deshabilita el sitio por defecto de Apache
RUN a2dissite 000-default.conf

# Asigna permisos de escritura a los directorios necesarios
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN composer install
RUN npm install
RUN php artisan key:generate

# Exponer el puerto 80
EXPOSE 80

# Ejecuta el comando de inicio de Apache
CMD ["apache2-foreground"]
