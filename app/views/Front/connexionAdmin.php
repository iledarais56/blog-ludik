<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="app/public/Back/css/styleback.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="icon" href="app/public/Front/images/dés.jpg" sizes="32x32">

        <title>admin-blog-ludik</title>
    </head>
    <body>
        <main>
            <h1>Connexion Administrateur</h1>
            <div id="connexioncontainer" class="container">
                
                    <form id="connexionbloc" class="bloc" action="index.php?action=connexionAdmin" method="post">
                    
                            <!-- 
                                <label for="firstname">Prénom:</label>
                                <input type="text" placeholder="votre prénom" name="firstName" id="firstname">
                            -->
                            
                                <label for="mail">Email:</label>
                                <input type="text" placeholder="votre mail" name="mail" id="mail">
                            
                            
                                <label for="password">Mot de passe:</label>
                                <input type="text" placeholder="votre mot de passe" name="pass" id="pass">
                            
                            
                            
                                <input id="submit" type="submit" value="Se connecter">
                            
                        
                    </form>
                    <a href="index.php">Retour a l'accueil</a>
                
            </div>
        </main>
    </body>
</html>