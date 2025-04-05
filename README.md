Système d'Administration de la Galerie Oselo
Il s'agit d'un système d'administration pour la Galerie Oselo, permettant la gestion des œuvres d'art et des entrepôts.

Prérequis
PHP 7.4 ou supérieur

MySQL/MariaDB

Serveur web (Apache, Nginx, etc.)

Installation
Clonez le dépôt :

bash
Copier
git clone https://github.com/yourusername/galerie-oselo.git
Importez la base de données :

Créez une base de données nommée galerie_oselo

Importez le fichier SQL database/galerie_oselo.sql

Configurez la connexion à la base de données :

Modifiez le fichier config/database.php avec vos identifiants de base de données

Configurez votre serveur web :

Définissez le répertoire racine du document sur le répertoire du projet

Assurez-vous que PHP est correctement configuré

Accédez à l'interface d'administration :

Allez à http://localhost/galerie-oselo/ dans votre navigateur web
