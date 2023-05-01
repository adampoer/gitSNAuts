FROM php:8.1.18-apache AS php1

COPY . /var/www/html 

RUN chown -R www-data:www-data /var/www/html && \
    chmod -R u+rwX,g+rwX,o-wX /var/www/html

RUN apt update -y && apt upgrade -y 

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

FROM mysql:latest AS mysql1
COPY redlock-db.sql /docker-entrypoint-initdb.d/ 

FROM jenkins/jenkins:latest as jenkins





