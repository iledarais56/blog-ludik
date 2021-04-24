<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- SEO - Meta: Description  -->
    <meta name="Description" content="<?= $meta_description ?>" />
     <!-- SEO - Meta: indexation  -->
    <meta name="robots" content="<?= $meta_robots ?>" />
    <!-- lien vers css -->
    <link rel="stylesheet" href="app/public/Front/css/styleFront.css">
    <!-- icone onglet -->
    <link rel="icon" href="app/public/Front/images/dés.jpg" sizes="32x32">
     <!-- SEO - Meta: Title  -->
    <title><?= $meta_title ?></title>
    
</head>
<body>
    <header>
        <!-- lien vers connection admin -->
        <a id="connect" title="connexion de l'administrateur" href="index.php?action=admin">
            <figure class="image-container">
                <img src="app/public/Front/images/dés.jpg" alt="dés" >
            </figure>
        </a>
        
            
        <nav>
            <!-- logo -->
           <section id="logo">
                <a href="index.php" title="lien vers l'accueil">
                    <p id="textforlogo">Blog-ludik</p>
                    <svg id="svg" xmlns="http://www.w3.org/2000/svg">
                        <circle id="circle" cx="50%" cy="50%" r="50%" />
                        <polygon id="polygon" points="40,60 60,160 160,140 140,40 40,60 " />
                        <text id="logotext" x="12.5%" y="50%" >Blog-ludik</text>
                        <title> logo blog-ludik</title>
                        <desc> logo créé par blog-ludik </desc>
                    </svg >
                </a>
            </section>
            <!-- barre de navigation -->
            <ul>
                <li><a href="index.php" title="page d'accueil">Accueil</a></li>
                <li><a href="index.php?action=categories" title="les différents jeux">Les jeux</a></li>
                <li><a href="index.php?action=top" title="classement des jeux">Mes tops</a></li>
                <li><a href="index.php?action=contact" title="formulaire de contact">Contact</a></li>
                
            </ul>
            <!-- icone menu burger -->
                <section id="burger"> 
                    <svg  viewBox="0 -53 384 384"  >
                        <path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                        <path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                        <path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/>
                    </svg>
                </section>
            
        </nav>    
    </header>
    <main>
     
            <?= $content ?>


        
    </main>
    <footer>
        <section id="footercontain">
            <p> Tous droits reservés 2021 - MVC -Kercode </p>
            <a href="index.php?action=mentions" title="page RGPD">Mentions légales</a>
        </section>
        
    </footer>
   <!-- scripts -->
    <script src="app/public/Front/js/slider.js"></script>
    <script src="app/public/Front/js/burger.js"></script>
    <script src="app/public/Front/js/formulaire.js"></script>
    <script src="app/public/Front/js/app.js"></script>
</body>
</html>