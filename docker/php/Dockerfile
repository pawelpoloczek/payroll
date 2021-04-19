FROM php:7.4-fpm

WORKDIR /var/www

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN \
    apt-get update \
    && apt-get install -y \
        curl \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        librabbitmq-dev \
        zip \
        unzip \
        git \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd \
    && groupadd -g 1000 www && useradd -u 1000 -ms /bin/bash -g www www

USER www
