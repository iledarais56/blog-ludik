projet-blog-jeu

https://blog-ludik.lesdeveloppeursbretons.com

sujet: blog sur les jeux de société 

site web réalisé avec une structure MVC (php-html-css-javascript) avec composer


le site comprends 2 parties:

 -une partie front visible par tous:

    -un accueil:
        (avec slider et un texte de présentation caché rendu visible en cliquant sur un bouton)
    -une page jeux:
        rangés en 4 catégories:
            -familiaux
            -enfant
            -ambiance
            -expert
            chaque catégorie renvoie aux jeux de cette catégorie.
                pour chaque jeu on a une page jeu avec:
                    -image
                    -description
                    -note de l'admin
                    -moyenne des notes des commentaires
                    -avis de l'admin sur ce jeu
                    -une vidéorègle sur ce jeu
                    -les 4 derniers commentaires sur ce jeu
                    -un bouton pour poster un commentaire
                    -un bouton pour voir tous les commentaires
    -une page top:
        avec un lien vers les trois meilleurs jeux selon l'admin

    -une page contact:
        contient un formulaire de contact avec autocompletion de l'adresse par une API
 
 -une partie back accessible uniquement par l'administrateur permettant de gerer la partie front:

    -visualisation-suppession des messages recus
    
    -création-édition-suppression de jeux
    
    -suppression des commentaires sur chaque jeu

    -insertion/suppression des images dans la bibliothèque
    
    -edition du top


diagramme uml de la base de données:

<img width="100%" alt="uml-jeuxblog" src="https://user-images.githubusercontent.com/73837618/114027552-c646f000-9877-11eb-85e5-80dc4915b555.png">



pour l'installation de l'application:

clone git du projet: https://github.com/iledarais56/blog-ludik.git

pour lier votre base de données renommer le fichier Manager.example.php en Manager.php
et y remplacer:

    -yourdbname par le nom de votre base de données

    -yourusername par le nom de votre nom d'utilisateur

    -yourpassword par votre mot de passe



