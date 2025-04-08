# PawHeaven : Refuge pour animaux

## Présentation du projet

PawHeaven est une plateforme web en PHP dédiée à la gestion d'un refuge animalier fictif. Elle permet aux utilisateurs de se connecter, de consulter des fiches d’animaux à adopter et, pour les administrateurs, de gérer ces fiches.

## Structure du projet

### Fichiers principaux
- `index.php` : Page d'accueil.
- `pres.md` : Documentation du projet.
- `style.css` : Page css principale (mise en page, typographie, couleurs).

### Dossiers

#### `inc/`
- `header.php` : En-tete HTML commun à toutes les pages.
- `footer.php` : Partie HTML d'en bas.
- `cle.php` : Clé secrète ou fichier de configuration sécurisé.

#### `pages/`
Contient les pages fonctionnelles du site :
- `connexion.php`, `signup.php`, `failed_connexion.php`, `echec.php` : Gestion des connexions/inscriptions.
- `admin.php`, `user.php` : Interfaces pour les rôles administrateur et utilisateur.
- `animals.php`, `update_animals.php`, `suppression.php`, `modification.php` : Gestion des fiches d’animaux.
- `traitement.php` : Traitement de formulaires (ajouts, modifications, connexions...).
- `contact.php` : Page de contact.

## Fonctionnalités envisagées
- Authentification utilisateur (connexion/inscription sécurisée).
- Gestion d’une base de données (à vérifier si elle est incluse).
- Interface administrateur complète pour la gestion des animaux.
- Possibilités d’ajouter, modifier et supprimer les fiches d’animaux.
- Expérience utilisateur simple et intuitive.
