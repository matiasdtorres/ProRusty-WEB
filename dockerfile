# Usa la imagen base de PHP con Apache
FROM php:8.1-apache

# Copia los archivos de tu aplicación al directorio de trabajo en el contenedor
COPY ./ /var/www/html/

# Instala la extensión mysqli
RUN docker-php-ext-install mysqli

# Expone el puerto 80 para que la aplicación sea accesible desde fuera del contenedor
EXPOSE 80