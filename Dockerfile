FROM php:8.4-apache
COPY src/ /var/www/html
EXPOSE 80
CMD ["apache2-foreground"]

