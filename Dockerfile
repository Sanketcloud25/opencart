FROM php:7.4-apache

RUN docker-php-ext-install mysqli

# Copy application files and set permissions
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 755 /var/www/html/

EXPOSE 80
CMD ["apache2-foreground"]
