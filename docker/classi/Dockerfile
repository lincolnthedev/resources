FROM php:7-apache

RUN apt update
RUN apt install nano -y
RUN apt install wget -y
RUN apt install git -y
RUN apt install redis -y

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php -r "if (ha$

WORKDIR /var/www/html

RUN git clone https://github.com/Laing-Middle-School/classi .
RUN composer require predis/predis
RUN composer require google/apiclient

VOLUME /var/www/html