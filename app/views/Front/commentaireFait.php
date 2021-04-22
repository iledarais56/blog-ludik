<?php ob_start(); ?>

<?php  $jeu = $getJeuAdmin->fetch(); ?>
<section  class="main-container">
    
    <h1> Votre commentaire sur le jeu <?php echo  htmlspecialchars($jeu['title']) ?> a été ajouté avec succès !</h1>
    <br>
        
    <div class="all-articles" >
      
            <a class="btn" title="vers la fiche du jeu <?php echo  htmlspecialchars($jeu['title']) ?> " href="index.php?action=jeuFiche&id=<?= htmlspecialchars($jeu['id']) ?>&categorie=<?= htmlspecialchars($jeu['categorie']) ?>">retour au jeu</a>
        
                    
    </div> 
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>