FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    autoconf \
    procps \
    net-tools \
    iputils-ping \
&& docker-php-ext-install -j$(nproc) iconv \
&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
&& docker-php-ext-install -j$(nproc) gd \
&& docker-php-ext-install mysqli \
&& docker-php-ext-enable mysqli \
&& docker-php-ext-configure pdo_mysql \
&& docker-php-ext-install pdo_mysql \
&& yes 'no' | head -2 | pecl install redis-4.3.0 \
&& pecl install swoole \ 
&& docker-php-ext-enable swoole \
&& docker-php-ext-enable redis