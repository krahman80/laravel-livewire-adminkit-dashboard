# FROM php:7.4-apache
FROM php:8.0.24-apache

ARG user
ARG uid

RUN a2enmod rewrite

RUN apt-get update && apt-get install -y git unzip zip curl libpq-dev sqlite3 libsqlite3-dev

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN install-php-extensions bcmath gettext mysqli pdo_mysql zip pdo_pgsql pdo_sqlite

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user

RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /var/www/html

USER $user
