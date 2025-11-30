# Architecture du Projet

## Vue d'ensemble

Plateforme web de connexion entre alumni et étudiants de la filière MIAGE de l'Université Félix Houphouët-Boigny.

## Objectifs

- Faciliter le recrutement des étudiants par les alumni
- Créer un réseau professionnel actif entre générations
- Améliorer l'insertion professionnelle des étudiants
- Centraliser les opportunités d'emploi

## Stack Technique

### Backend
- Framework: Laravel 11.x
- PHP: 8.2+
- Base de données: MySQL 8.0+
- ORM: Eloquent

### Frontend
- Templates: Blade
- CSS Framework: Bootstrap 5.1.3
- Icons: Font Awesome 6.0.0
- JavaScript: jQuery 3.6.0

## Architecture MVC

### Modèles (Models)
- **NewUser**: Utilisateurs (Alumni/Étudiants)
- **JobPosting**: Offres d'emploi publiées par les alumni
- **StudentCv**: CVs uploadés par les étudiants
- **Message**: Messages entre utilisateurs
- **CvView**: Statistiques de consultation des CVs

### Contrôleurs (Controllers)
- **DashboardController**: Tableaux de bord personnalisés
- **JobPostingController**: Gestion des offres d'emploi
- **StudentCvController**: Gestion des CVs
- **MessageController**: Système de messagerie
- **Auth/**: Authentification et inscription

### Vues (Views)
- **layouts/**: Templates de base
- **auth/**: Connexion et inscription
- **dashboards/**: Tableaux de bord (Alumni/Étudiant)
- **jobs/**: Offres d'emploi
- **cvs/**: CVs des étudiants
- **messages/**: Messagerie interne

## Schéma de Base de Données

### Table: new_users
Stocke tous les utilisateurs (alumni et étudiants)
- id, first_name, last_name, email, password
- role (alumni/student)
- phone, bio, level, matricule, linkedin_url

### Table: job_postings
Stocke les offres d'emploi publiées par les alumni
- id, alumni_id, title, company, location
- contract_type, description, requirements
- salary_range, application_deadline
- contact_email, contact_phone, status, views_count

### Table: student_cvs
Stocke les CVs uploadés par les étudiants
- id, student_id, file_name, file_path
- file_size, mime_type, is_active
- views_count, downloads_count

### Table: messages
Stocke les messages entre utilisateurs
- id, sender_id, receiver_id
- subject, message, is_read, read_at

### Table: cv_views
Statistiques de consultation des CVs
- id, cv_id, viewer_id, viewed_at

## Sécurité

### Mesures Implémentées
- CSRF Protection sur tous les formulaires
- Password Hashing avec Bcrypt
- Role-Based Access Control (RBAC)
- Validation des fichiers uploadés
- Protection XSS (Blade auto-escape)
- Protection SQL Injection (Eloquent ORM)
- Contrôle d'accès par middleware

## Flux de l'Application

### Flux Alumni
1. Connexion au système
2. Accès au dashboard avec statistiques
3. Création/gestion d'offres d'emploi
4. Consultation des CVs étudiants
5. Téléchargement des CVs
6. Communication via messagerie

### Flux Étudiant
1. Connexion au système
2. Accès au dashboard avec statistiques
3. Upload et gestion de CVs
4. Consultation des offres d'emploi
5. Communication via messagerie
6. Suivi des statistiques de visibilité

## État Actuel du Projet

### Phase 1: Fondations (Complété)
- Structure des dossiers MVC
- Migrations de base de données
- Modèles Eloquent (structure)
- Contrôleurs (structure)
- Vues de base

### Phase 2: Authentification (En cours)
- Système de login
- Système d'inscription
- Guards personnalisés
- Middleware de rôles

### Phases Suivantes (Planifié)
- CRUD complets
- Upload de fichiers
- Messagerie complète
- Dashboards avec statistiques
- Notifications
- Tests unitaires
