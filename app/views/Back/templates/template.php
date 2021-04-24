<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <!-- SEO - Meta: Description  -->
        <meta name="Description" content="blog-ludik test avis jeux de plateau et de société modernes--administration " />
        <!-- SEO - Meta: indexation  -->
        <meta name="robots" content="<?= $meta_robots ?>" />
        <!-- lien vers css -->
        <link rel="stylesheet" href="app/public/Back/css/styleback.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="icon" href="app/public/Front/images/dés.jpg" sizes="32x32">
        <!-- SEO - Meta: Title  -->
        <title><?= $meta_title ?></title>
    </head>

    <body>  

        <header>
            <a id="backtdb" href="indexAdmin.php?action=tdbAdmin">Retour au tableau de bord</a>
            <a  id="deconnect" href="indexAdmin.php?action=deconnexion">Déconnexion</a>
        </header> 

        <main>
            <?= $content ?>
        </main>
        
    </body>
    
</html>