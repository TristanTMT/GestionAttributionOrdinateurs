# GestionAttributionOrdinateurs

Vous disposez d'une semaine pour réaliser ce test technique.
Voici le cahier des charges du test technique intitulé "Gestion d'attribution d'ordinateurs" :

Objectif :  
Créer une application sécurisée qui permet de gérer l’attribution des postes informatiques à des
visiteurs d’un centre culturel sur les horaires d’ouvertures.

À noter :  
Chaque ordinateur ne peut avoir qu’une seule personne à la fois qui l’utilise.  
C’est le/la secrétaire du centre qui gère l’attribution des postes et qui sera donc administrateur de l’application.

Stories :
- En tant qu’administrateur, je veux pouvoir me connecter à une interface sécurisée.
- En tant qu’administrateur, je veux pouvoir créer / modifier / supprimer un utilisateur.
- En tant qu’administrateur, je veux pouvoir créer / modifier / supprimer un ordinateur.
- En tant qu’administrateur, je veux pouvoir attribuer un ordinateur à un utilisateur, à une date et sur un créneau horaire.
- En tant qu’administrateur je veux voir toutes les attributions.
- En tant qu’administrateur je veux pouvoir annuler une attribution.

Technologies à utiliser :
- Langages backend : PHP ou Javascript.
- Base de données : au choix.
- Framework : au choix. Il est important d’avoir un design agréable et ergonomique.

Mes choix de technologies :
- Langages backend : PHP.
- Base de données : MySQL.
- Framework : HTML/CSS, Bootstrap.

A fournir :
- Lien du repo git (Github, Gitlab, Bitbucket,..)
- Lien vers l’application en ligne et information de connexion (identifiant et mot de passe)
- Lien tableau Kanban avec le découpage des tâches (Trello, Jira, Framaboard,..)

# Lancer l'application depuis GitHub

Vous devez avoir PHP et MySQL d'installer sur votre machine

1 - Cloner ce repository  
2 - Créer une base de données dans MySQL nommée "test_simplon"  
3 - Importer le fichier "reservationOrdinateurSimplon.sql" dans votre BDD "test_simplon"  
4 - Mettre vos infos dans le fichier "config.php" comme le MDP :   
````
$db=mysqli_connect("localhost","root","process.env.YOUR_PASSWORD","test_simplon"); 
````
5 - Dans le terminal, à la racine du dossier lancer le server local intégré à PHP, puis ouvrez le lien :
````
$ php -S localhost:8000
````

INFOS CONNEXION de l'administrateur :
````
email : admin@admin.com  
motdepasse : admin
````

ENJOY
