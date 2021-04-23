<?php ob_start(); ?>

        <h1>Liste des jeux</h1>

 
        <div class="container">
            <a class="btn" href="indexAdmin.php?action=createJeu">Créer un jeu</a>
        </div> 
        
        <div id ="jeulist" class="container"> 

            <?php foreach($allJeux as $jeu){ ?>

                <a href="indexAdmin.php?action=Jeu&id=<?=htmlspecialchars($jeu['id']) ?>">
                    <?= htmlspecialchars($jeu['title']) ?>
                </a>        
                
            <?php }  ?> 

        </div>
                      
       
       
        
  

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>