# Použijeme základní PHP obraz s Apachem
FROM php:8.0-apache

# Nainstalujeme PHP rozšíření, která vaše aplikace může potřebovat
RUN docker-php-ext-install pdo pdo_mysql

# Zkopírujeme vaši aplikaci do kontejneru
COPY storage /var/www/html/

# Ujistíme se, že Apache bude běžet na portu 80
EXPOSE 80

# Nastavení startovacího příkazu pro Apache
CMD ["apache2-foreground"]

# Nastavíme ServerName pro potlačení varování Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
