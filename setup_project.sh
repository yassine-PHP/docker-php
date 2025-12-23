#!/bin/bash
PROJECT_NAME="my-php-app"
mkdir -p $PROJECT_NAME/src/public

cat <<EOP > $PROJECT_NAME/src/public/index.php
<?php
echo "<h1>Success! PHP is running on Docker (2025)</h1>";
phpinfo();
EOP

cat <<EOP > $PROJECT_NAME/Dockerfile
FROM php:8.4-apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!\${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
WORKDIR /var/www/html
COPY ./src ./
RUN chown -R www-data:www-data /var/www/html
EOP

cat <<EOP > $PROJECT_NAME/docker-compose.yml
services:
  web:
    build: .
    ports:
      - "8080:80"
    volumes:
      - ./src:/var/www/html
EOP

echo "Project folder created successfully."
