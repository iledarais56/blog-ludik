<?php ob_start(); ?>

<?php  $name = $getJeuCategorieName->fetch(); ?>
<?php  $commentaires = $getAllcommentaires->fetchAll(); ?>
<section class="main-container">

        <h1>les commentaires sur le jeu <?php echo $name['title'] ?></h1>
               
            <article class="all-articles">

                <?php foreach($commentaires as $commentaire){ ?>
                   
                    
                    <a class="article commentaire" href="index.php?action=getCommentaire&id=<?= htmlspecialchars($commentaire['id']) ?>" title=" commentaire de <?=  htmlspecialchars($commentaire['pseudo']) ?>sur le jeu <?php echo $name['title'] ?>">
                        
                        <p class=" click">Cliquez pour voir l'avis complet.</p>

                        <div class="descriptionjeu">
                            <p class="soulign">Posté par:</p><p> <?=  htmlspecialchars($commentaire['pseudo']) ?></p>
                        </div>

                        <div class="descriptionjeu" >
                            <p class="soulign">Résumé: </p><p> <?=  htmlspecialchars($commentaire['content']) ?></p>
                        </div>

                    </a>
                    
                 

                <?php } ?>
               
            </article>
            
        
        <article class="all-articles" >
           <a class="btn " href="index.php?action=jeuFiche&id=<?= htmlspecialchars($commentaire['id_jeu']) ?>&categorie=<?= htmlspecialchars($commentaire['categorieJeu']) ?>">retour au jeu</a>
        </article> 
        
            
    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>