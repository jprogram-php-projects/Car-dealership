FROM php:5.6-apache

RUN apt-get update \
    && apt-get install -y \
        nmap \
        vim

COPY . /var/www/html
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

RUN docker-php-ext-install mbstring pdo pdo_mysql bcmath \
    && chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite && service apache2 restart
