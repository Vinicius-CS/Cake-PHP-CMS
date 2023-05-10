FROM php:8.1-fpm
WORKDIR /cakeapp
COPY . /cakeapp
RUN apt-get update && apt-get install -y \
    git \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    unzip \
    && docker-php-ext-install \
    intl \
    mbstring \
    pdo_mysql \
    zip \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    composer install --no-interaction --optimize-autoloader
EXPOSE 80
CMD php-fpm