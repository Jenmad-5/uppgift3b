# Använd officiell PHP med Apache
FROM php:8.2-apache

# Kopiera alla filer från projektmappen till Apache root
COPY . /var/www/html/

# Se till att Apache använder index.php och index.html som startsida
RUN echo "DirectoryIndex index.php index.html" >> /etc/apache2/apache2.conf

# Ge rättigheter till Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exponera port 80
EXPOSE 80

# Starta Apache i förgrunden
CMD ["apache2-foreground"]
