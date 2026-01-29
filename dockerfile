FROM php:8.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    zip unzip curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install mbstring exif pcntl bcmath gd

COPY . .

RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www

CMD ["php-fpm"]
