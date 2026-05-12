FROM php:8.4-fpm

# Installation dépendances système
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libicu-dev \
    libpq-dev \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        zip \
        intl

# Installation Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définition dossier de travail
WORKDIR /var/www

# Permissions Laravel
RUN chown -R www-data:www-data /var/www

EXPOSE 9000

CMD ["php-fpm"]
