FROM php:8.2-apache

# Instalamos extensiones de MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# ACTIVAR MOD_REWRITE (Esto quita el Error 500)
RUN a2enmod rewrite

COPY . /var/www/html/

# Configuración de puerto para Render
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

RUN chown -R www-data:www-data /var/www/html
