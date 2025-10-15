FROM php:8.2-fpm
RUN docker-php-ext-install pdo_mysql

# Copia los archivos del proyecto
COPY . /var/www/html/

EXPOSE 80
