# La symphonie des employés heureux

_Per Francesco_  

<img src="happy_employees.png" width=750>

Projet de prise en main du framework Symfony pour l'élaboration d'une API REST.

J'ai repris pour cela une partie d'un TP de LP consistant à faire générer par [Swagger](https://swagger.io/) un service web à partir d'une spécification OpenAPI, puis à remplir le squelette obtenu pour que le service fonctionne. L'API fournie était constituée d'une seule requête GET pour obtenir une liste d'employés.

J'ai adapté cet exercice à Symfony (sans utiliser Swagger) avec, dans un premier temps, utilisation d'une classe de service pour fournir des données inscrites en dur dans le code. J'ai ensuite étendu le service web avec :
- création d'une base de données avec une table contenant les données précédentes
- ajout de requêtes PUT, POST et DELETE

A venir :
- ajout de liens HATEOAS
- utilisation de APIPlatform ?


### Installation et utilisation

Pour installer le projet :
- avoir préalablement installé PHP, Composer, Symfony et tutti quanti pour pouvoir développer des applications web avec Symfony et les servir en local (_ma hai tutto questo adesso, Francesco, no ?_)
- après avoir cloné le dépôt, lancer `composer install` dans le répertoire créé
- pour créer la base de données, sa table et des enregistrements :
  - modifier la ligne 30 du fichier `.env` pour l'adapter à son SGBDR (voir ligne 29 pour le format attendu)
  - créer la base de données, soit directement dans le SGBDR (pour PostgreSQL, par ex : `CREATE DATABASE <nom_base> OWNER <nom_role>`), soit avec la commande `symfony console doctrine:database:create`
  - exécuter les fichiers `create.sql` et `insert.sql` pour créer la table `employee` et y insérer des données

Une fois ces étapes réalisées :
- lancer le service avec `symfony server:start --no-tls`
- effectuer des requêtes avec un navigateur et une extension de type [RESTClient](http://restclient.net/), un logiciel de type Postman (ou développer un client web de son propre cru...)
