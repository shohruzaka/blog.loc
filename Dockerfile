# PHP versiyasini tanlash
FROM php:8.1-fpm

# Kerakli kengaytmalarni o'rnatish
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libzip-dev \
    libonig-dev \
    libxml2-dev

# PHP kengaytmalarini sozlash
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd

# Composer ni o'rnatish
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Loyiha papkasini yaratish
WORKDIR /var/www

# Portni ochish
EXPOSE 9000

# PHP-FPM ni ishga tushirish
CMD ["php-fpm"]