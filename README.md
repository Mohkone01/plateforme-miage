# Plateforme CV et Emploi MIAGE

Système de connexion entre alumni et étudiants de la filière MIAGE pour faciliter l'insertion professionnelle.

## Aperçu

![Page d'accueil](CAPTURE%20HACKATON/CAP1.png)

La plateforme permet aux anciens diplômés (alumni) de publier des offres d'emploi et de consulter les CVs des étudiants, tout en offrant aux étudiants un espace pour partager leurs CVs et consulter les opportunités professionnelles.

## Fonctionnalités Principales

### Pour les Alumni

![Dashboard Alumni](CAPTURE%20HACKATON/CAP4.png)

- Création et gestion d'offres d'emploi
- Consultation des CVs des étudiants
- Téléchargement des CVs
- Messagerie interne avec les étudiants
- Statistiques en temps réel

### Pour les Étudiants

![Dashboard Étudiant](CAPTURE%20HACKATON/CAP5.png)

- Upload et gestion de CVs
- Consultation des offres d'emploi
- Messagerie avec les recruteurs
- Statistiques de visibilité des CVs

### Gestion des Offres

![Gestion des offres](CAPTURE%20HACKATON/CAP3.png)

Les alumni peuvent créer, modifier et gérer leurs offres d'emploi avec des informations détaillées sur les postes disponibles.

### Consultation des CVs

![Détails CV](CAPTURE%20HACKATON/CAP2.png)

Les recruteurs peuvent consulter les profils des étudiants, télécharger leurs CVs et les contacter directement via la messagerie intégrée.

## Stack Technique

- **Framework**: Laravel 11.x
- **PHP**: 8.2+
- **Base de données**: MySQL 8.0+
- **Frontend**: Bootstrap 5.1.3, Blade Templates
- **Icons**: Font Awesome 6.0.0

## Architecture

Le projet suit une architecture MVC stricte avec:

- **5 Modèles** Eloquent (NewUser, JobPosting, StudentCv, Message, CvView)
- **6 Contrôleurs** (Auth, Dashboard, Jobs, CVs, Messages)
- **3 Middleware** personnalisés (Authentification, Rôles)
- **17 Vues** Blade responsive
- **5 Migrations** de base de données

## Installation

```bash
# Cloner le repository
git clone https://github.com/Mohkone01/site-miage.git
cd site-miage

# Installer les dépendances
composer install

# Configuration
cp .env.example .env
php artisan key:generate

# Configurer la base de données dans .env
DB_DATABASE=miage_emploi
DB_USERNAME=root
DB_PASSWORD=

# Exécuter les migrations
php artisan migrate

# Démarrer le serveur
php artisan serve
```

Accédez à l'application sur `http://localhost:8000`

## Sécurité

- Hashage des mots de passe (Bcrypt)
- Contrôle d'accès basé sur les rôles
- Validation des fichiers uploadés



## Documentation

Consultez le dossier `Documentation/` pour:
- Architecture détaillée du projet


## Contact

Repository: https://github.com/Mohkone01/site-miage

---

**Note**: Ce projet est en cours de développement actif. La structure est complète et les fonctionnalités de base sont implémentées.
