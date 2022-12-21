FROM php:8.1-apache

RUN apt-get update && \
    apt-get install libpq-dev -y &&\
    apt-get install -y git && \
    docker-php-ext-install -j$(nproc) pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN /usr/sbin/a2enmod rewrite

COPY default.conf /etc/apache2/sites-available/000-default.conf

RUN chmod -R 765 /var/www//html