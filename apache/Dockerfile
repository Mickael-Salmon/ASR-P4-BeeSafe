# Utilise l'image officielle PHP avec Apache
FROM php:8.0-apache

# Installe le client MySQL
RUN apt-get update && apt-get install -y default-mysql-client

# Installe l'extension mysqli pour PHP
RUN docker-php-ext-install mysqli

# Définit le chemin du socket de la base de données
ENV MYSQL_SOCKET /var/run/mysqld/mysqld.sock

# Copie les fichiers du site web dans le répertoire par défaut d'Apache
COPY site/ /var/www/html/

# Expose le port 80 pour permettre l'accès au serveur web
EXPOSE 80