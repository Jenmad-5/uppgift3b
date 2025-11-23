FROM php:8.2-apache
# Kopiera alla filer till Apache root COPY . /var/www/html/
# Öppna port 80
EXPOSE 80