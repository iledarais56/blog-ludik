
<?php ob_start(); ?>

<?php  $name = $getJeuCategorieName->fetch(); ?>
<?php  $commentaire = $getAllcommentaires->fetch(); ?>


    <h1>les commentaires sur le jeu <?php echo  htmlspecialchars($name['title']) ?></h1>
        
    <div class="container">
        <?php foreach($getAllcommentaires as $commentaire){ ?>
            <div class="bloc">
            
                <p>posté par:&ensp; <?=  htmlspecialchars($commentaire['pseudo']) ?></p>
                
                <p>résumé:&ensp; <?=  htmlspecialchars($commentaire['content']) ?></p>
                
                
                <p>Contenu: </p>
                <p><?=  htmlspecialchars($commentaire['totalContent']) ?></p>
                
                
                <a class="btn" href="indexAdmin.php?action=deletecommentaire&id=<?=htmlspecialchars($commentaire['id']) ?>">Supprimer ce commentaire</a>
            
            </div>    
            
            

        <?php } ?>
        
    </div>

            
     


 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>