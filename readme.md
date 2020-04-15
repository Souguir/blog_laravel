## Guide d'installation du projet

## Commandes à exécuter :
   
 
  <p>composer update</p>
  <p>génerer la clé .env :  php artisan key:generate</p>
  <p>créer la base de données : database.sqlite </p>
  <p>modifier le fichier .env.exemple en .env </p>
  <p>php artisan migrate: refresh --seed</p>
             
  ## Les parties implémentées
     
   1- Gestion des commentaires
   ------------------------------
  * Commenter des articles. Ses commentaires se trouveront sur la page de l’article correspondant</br>
  * Modifier et supprimer tous les commentaires par tous les admins</br>
  * Des avatars sont ajoutés automatiquement pour chaque commentaire</br>
  * Exemple d'URL pour modifier les commentaires: http://localhost:8080/posts/106
 
   2- CRUD des articles
   ----------------------
   * Les utilisateurs peuvent créer, consulter, modifier et supprimer leurs propres articles.
   * URL pour créer des articles: http://localhost:8080/posts/create
   * URL pour consulter les articles: http://localhost:8080/articles
   * Pour modifier et supprimer les articles procéder comme suit :
   Sur la page « Mes articles » cliquez sur « consulter » pour voir l’article ou sur « modifier » pour le modifier ou le supprimer.
     
   3- Identification/Authentification
   ----------------------------------------------------------------------------------
   Pour permettre la création, la modification et la suppression des articles. Elle est donc obligatoire</br>
      Dummy account for testing : 
      souguir@gmail.com
      Mot de passe : 111111

    URLs pour tester:
   * http://localhost:8080/login
   * http://localhost:8080/register
     
        
   4- Identification avec Google et Github (via Socialite)
   --------------------------------------------------------------
  On a créé le bouton permettant de s’identifier avec GitHub (Je vous invite à consulter le design du bouton). Malheureusement, la         version Laravel 5.4 ne permet pas l’utilisation de Socialite
