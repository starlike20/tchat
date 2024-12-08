# Projet Web2 2023 - Starlike20

## Description
Ce projet est une application web réalisée dans le cadre du cours de Web2. Il permet aux utilisateurs de créer un profil, de se connecter, d'échanger des messages via un tchat et de gérer leurs interactions. Ce projet illustre les compétences en développement web à travers l'utilisation de PHP, MySQL, CSS et HTML.

## Fonctionnalités principales
- **Inscription et connexion** : Les utilisateurs peuvent créer un compte et se connecter à l'application.
- **Gestion de profil** : Chaque utilisateur peut personnaliser son profil.
- **Tchat en temps réel** : Une interface de messagerie permet aux utilisateurs d'échanger des messages.
- **Pagination** : Implémentation de la pagination pour une navigation facile dans les différentes pages.
- **Confirmation d'actions** : Les utilisateurs reçoivent des confirmations visuelles lors de diverses actions comme l'inscription ou la suppression.

## Structure du projet

### Dossiers et fichiers principaux
- **Documentation** :
  - `Projet Web2 2022.pdf` : Détails sur les spécifications et les objectifs du projet.

- **Base de données** :
  - `source_db.sql` : Script SQL pour créer et peupler la base de données.

- **Code backend** :
  - Fichiers PHP dans le répertoire racine et sous `model/` pour gérer les fonctionnalités.
  - `connexiontrait.php`, `profiltrait.php`, `tchattrait.php` : Gestion des différents processus (connexion, profil, messagerie).

- **Vues (Frontend)** :
  - Dossier `view/` contenant les fichiers PHP pour les pages principales (ég. `connexion.php`, `profil.php`, `tchat.php`).

- **Styles** :
  - Dossier `style/` contenant les fichiers CSS pour personnaliser l'apparence (ég. `connexion.css`, `profil.css`, `tchat.css`).

- **Médias** :
  - Dossier `avatar/` contenant les images et avatars utilisés dans l'application.

## Installation et exécution

1. **Prérequis** :
   - Un serveur web (Apache, Nginx ou autre).
   - PHP 7.4 ou supérieur.
   - MySQL 5.7 ou supérieur.

2. **Configuration de la base de données** :
   - Importez le fichier `source_db.sql` dans votre serveur MySQL.
   - Modifiez les paramètres de connexion dans `model/connexion.php` si nécessaire.

3. **Déploiement du projet** :
   - Placez les fichiers dans le répertoire racine de votre serveur web.
   - Accédez à l'application via un navigateur web (ég. http://localhost/).

## Utilisation
1. Ouvrez l'application dans votre navigateur.
2. Créez un compte ou connectez-vous.
3. Accédez à votre profil pour le personnaliser.
4. Utilisez le tchat pour échanger avec d'autres utilisateurs.

## Technologies utilisées
- **Langages** : PHP, SQL, HTML, CSS.
- **Base de données** : MySQL.
- **Frameworks et bibliothèques** : Aucun (développement à partir de bases).

## Auteurs
- Ce projet a été réalisé dans le cadre d’un cours universitaire.
- Contributions : [Ajoutez ici les noms ou pseudonymes des participants si nécessaire.]

## Licence
Ce projet est distribué sous une licence [ajoutez ici le type de licence, ég. MIT, GPL, etc.].

## Remerciements
- Merci à l'équipe enseignante pour le soutien et les ressources fournies.
- Merci à tous les collaborateurs ayant participé à ce projet.

---

Pour toute question ou suggestion, n'hésitez pas à nous contacter à [ajoutez un contact, ég. email].

