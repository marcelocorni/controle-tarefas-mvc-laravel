FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libpq-dev unzip zip curl git \
    && docker-php-ext-install pdo pdo_pgsql \
    && apt-get clean

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

RUN composer create-project laravel/laravel . --no-interaction

COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

COPY app/Models/Tarefa.php /var/www/html/app/Models/Tarefa.php
COPY app/Http/Controllers/TarefaController.php /var/www/html/app/Http/Controllers/TarefaController.php
COPY resources/views/tarefas/index.blade.php /var/www/html/resources/views/tarefas/index.blade.php
COPY routes/web.php /var/www/html/routes/web.php
COPY database/migrations/2025_01_01_000000_create_tarefas_table.php /var/www/html/database/migrations/2025_01_01_000000_create_tarefas_table.php

RUN a2enmod rewrite \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html