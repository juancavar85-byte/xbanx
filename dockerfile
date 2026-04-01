# Usamos una imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instalamos las extensiones de MySQL que tu panel necesita
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiamos los archivos de tu panel al servidor
COPY . /var/www/html/

# Le decimos a Apache que escuche en el puerto que Render le asigne
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Damos permisos para que no haya errores de escritura
RUN chown -R www-data:www-data /var/www/html