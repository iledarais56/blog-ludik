<?php ob_start(); ?>

<?php  $commentaire = $getCommentaire->fetch(); ?>
<section  class="main-container">
    
        <h1>Commentaire sur le jeu <?php echo  htmlspecialchars($commentaire['titreJeu']) ?></h1>
        
        <div class="all-articles">
            <div class="comment">
                <div class="commentairebloc2">
                    <div class="commentairebloc">
                        <p class="  soulign">posté par:  </p><p> <?=  htmlspecialchars($commentaire['pseudo']) ?></p>
                    </div>
                    <div class="commentairebloc">    
                        <p class=" soulign" >Impression générale: </p><p>" <?=  htmlspecialchars($commentaire['content']) ?> " </p>
                    </div>
                    <div class="commentairebloc rond">
                        <p class="soulign ">Note: </p><p id="notecommentaire" class="note">&nbsp;<?=  htmlspecialchars($commentaire['notepost']) ?>/20 </p>
                    </div>
                </div>
            </div>
            <div id="totalcomment" class="commentairebloc">
                <p>Avis complet: </p>
                <p id="aviscomplet">&nbsp;<?=  htmlspecialchars($commentaire['totalContent']) ?></p>
            </div>
        </div>   
        <div class="all-articles" >
            
                <a class="btn " href="index.php?action=jeuFiche&id=<?= htmlspecialchars($commentaire['id_jeu']) ?>&categorie=<?= htmlspecialchars($commentaire['categorieJeu']) ?>" title="vers le jeu <?php echo  htmlspecialchars($commentaire['titreJeu']) ?>">retour au jeu</a>
            
                       
        
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>