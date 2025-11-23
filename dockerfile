#använder dockerfile för att kunna öppna php filerna via webbservern render
#använd officiell PHP med Apache
FROM php:8.2-apache

#kopiera alla filer från projektmappen till Apache root
COPY . /var/www/html/

#se till att Apache använder index.php och index.html som startsida
RUN echo "DirectoryIndex index.php index.html" >> /etc/apache2/apache2.conf

#ge rättigheter till Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

#berättar för docker att servern körs på port 80
EXPOSE 80

#starta Apache i förgrunden
CMD ["apache2-foreground"]
