# Usa la imagen base de PHP con Apache
FROM php:8.1-apache

# Instala Composer en el contenedor
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

# Copia los archivos de tu aplicación al directorio de trabajo en el contenedor
COPY ./ /var/www/html/

# Cambia al directorio de trabajo
WORKDIR /var/www/html

# Instala las dependencias de PHP mediante Composer
RUN composer install

# Instala la extensión mysqli
RUN docker-php-ext-install mysqli

# Expone el puerto 80 para que la aplicación sea accesible desde fuera del contenedor
EXPOSE 80
