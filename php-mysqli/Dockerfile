FROM php:7.2-fpm

RUN apt-get update
RUN apt-get install iputils-ping -y
RUN docker-php-ext-install mysqli 
RUN docker-php-ext-enable mysqli