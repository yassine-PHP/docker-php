FROM php:8.4-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
WORKDIR /var/www/html
# After your COPY or WORKDIR commands
RUN chown -R www-data:www-data /var/www/html

