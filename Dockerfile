# Image de base
FROM php:apache

# Installation des dépendances
RUN apt-get update && \
    apt-get install -y \
        git \
        zip \
        unzip \
        && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
    
# Copie de tous les fichiers du projet
COPY . /var/www/html

# Installation des dépendances
RUN cd /var/www/html && \
    composer install --no-dev && \
    chown -R www-data:www-data storage

# Exposer le port 80
EXPOSE 80

# Démarrer le serveur Apache
CMD ["apache2ctl", "-D", "FOREGROUND"]
