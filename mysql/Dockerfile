# Utilise l'image officielle de MySQL
FROM mysql:8.0

# Copie les scripts SQL dans le conteneur pour qu'ils soient exécutés au premier démarrage
COPY 01-schema.sql /docker-entrypoint-initdb.d/
COPY 02-data.sql /docker-entrypoint-initdb.d/

# Expose le port 3306 pour permettre l'accès à la base de données
EXPOSE 3306
