FROM php:8.2-alpine3.18
COPY src/ /var/www/html
EXPOSE 80
