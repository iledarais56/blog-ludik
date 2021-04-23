<?php ob_start(); ?>

        <h1>Liste des jeux</h1>

 
        <section class="container">
            <a class="btn" href="indexAdmin.php?action=createJeu">Créer un jeu</a>
        </section> 
        
        <section id ="jeulist" class="container"> 

            <?php foreach($allJeux as $jeu){ ?>

                <a href="indexAdmin.php?action=Jeu&id=<?=htmlspecialchars($jeu['id']) ?>">
                    <?= htmlspecialchars($jeu['title']) ?>
                </a>        
                
            <?php }  ?> 

        </section>
                      
       
       
        
  

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>