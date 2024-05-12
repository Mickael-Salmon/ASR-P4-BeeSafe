
# Site Web de BeeSafe 🐝

Ce repository GitHub est un fork qui héberge le code source du site web de BeeSafe, conçu pour être déployé dans une architecture 3-tiers.

La branche `master` contient uniquement les sources du site web, les scripts sql et les fichiers docker pour réaliser le déploiement. Ces sources sont écrites avec le langage PHP et nécessitent donc une stack [LAMP](https://fr.wikipedia.org/wiki/LAMP)

Ce déploiement permet de séparer les responsabilités entre les différents services pour optimiser la maintenance et la montée en charge.

## Structure du Repository 📂

- **Branche `master`** :
- Contient les sources du site web en PHP.
- Contient les scripts SQL pour la création de la base de données et le peuplement des données.

## Architecture Requise 🏗️

Le site est conçu pour fonctionner sur trois serveurs distincts pour garantir une performance optimale et une séparation claire des responsabilités :

- **Serveur Web** : Apache 2.4 avec PHP 8.0 pour héberger le code source.
- **Serveur de Base de Données** : MySQL 8.0 pour gérer toutes les transactions de données.
- **Serveur DNS** : Bind9 pour gérer la résolution des noms de domaine.

## Prérequis 📋

Pour exécuter ce projet, vous aurez besoin de :
- Docker et Docker Compose pour faciliter le déploiement des services.
- Accès à un système de gestion de version pour cloner ce repository (Git).

## Architecture Docker

```
BeeSafe/
│
├── docker-compose.yml
│
├── apache/
│   ├── Dockerfile
│   ├── 000-default.conf
│   └── site/
│       ├── index.php
│       ├── main.css
│       └── vars.php
│
├── mysql/
│   ├── Dockerfile
│   ├── data.sql
│   └── schema.sql
│
└── bind/
    ├── named.conf.local
    └── db.beesafe.co
```
## Architecture fichiers

```
BeeSafe/
│
├── docker-compose.yml        # Fichier Docker Compose principal
│
├── apache/                   # Contient tout ce qui est nécessaire pour le serveur web
│   ├── Dockerfile            # Dockerfile pour construire l'image Apache
│   ├── 000-default.conf      # Configuration du Virtual Host Apache
│   └── site/                 # Dossier contenant le site web
│       ├── index.php         # Page d'accueil PHP
│       ├── main.css          # Feuille de style CSS
│       └── vars.php          # Variables de configuration de la base de données
│
├── mysql/                    # Contient les scripts SQL et le Dockerfile MySQL
│   ├── Dockerfile            # Dockerfile pour construire l'image MySQL
│   ├── schema.sql            # Script SQL pour créer la structure de la base de données
│   └── data.sql              # Script SQL pour peupler la base de données
│
└── bind/                     # Contient les fichiers de configuration DNS Bind9
    ├── named.conf.local      # Fichier de configuration DNS principal
    └── db.beesafe.co         # Fichier de zone pour le domaine

```
## Déploiement avec Docker 🐳

1. **Clonez le repository** :

   ```bash
   git clone https://github.com/Mickael-Salmon/ASR-P4-BeeSafe
   cd beesafe
   ```
Lancez le déploiement :

Utilisez Docker Compose pour démarrer les services sur les différentes machines :

```bash
docker-compose up --build
```

2. Accédez au site WEB

Une fois les services démarrés, le site sera accessible via http://localhost.

Licence 📄
Ce projet est distribué sous licence MIT, permettant une utilisation large et gratuite à tous les utilisateurs.
