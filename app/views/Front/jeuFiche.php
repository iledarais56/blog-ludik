<?php ob_start(); ?>


<?php $jeu =$getJeuFiche->fetch(); ?>
<?php  $commentaires = $getCommentaires->fetchAll(); ?>
<?php $moyenne = $getMoyenne->fetch(); ?>
<section class="main-container">
    <article id="jeu-container">
        <h1 id="jeutitre"><?= $jeu['title']?></h1> 
        <div id="entetejeu">
            <div id="imagejeu">
                <img src="app/public/Front/images/<?= $jeu['img'] ?>.jpg" alt="<?=  htmlspecialchars($jeu['title']) ?>" ><br>
            </div> 
            <div id="description">
                <h3 class="soulign titrejeufiche">Description: </h3>
                <p id="blocdescription">
                    <?=  htmlspecialchars($jeu['content']) ?>              
                </p>
            </div>  
        </div>    
        <div id="blocjeu">  
            <div id="moyennenote">
                <div class="bloc rond">
                    <p>Ma note :</p>
                    <p class="note" ><?=  htmlspecialchars($jeu['note']) ?>/20</p>
                </div>
                <div class="bloc rond">
                    <p>Moyenne des avis :</p>
                    <p class="note" ><?=  htmlspecialchars($moyenne['moyenne']) ?></p>
                </div>
            </div>    
            <div id="avisjeu">
                <h3 class="soulign">Mon avis :</h3>
                <p id="avisjeutext">&emsp;<?=  htmlspecialchars($jeu['avis']) ?></p>
            </div>
        </div>       
           
        
         <div>
            <h3 class="soulign titrejeufiche">Vidéo-règle sur ce jeu:</h3>
            
            <figure class="all-articles">
                <iframe id="videojeu" src="https://www.youtube.com/embed/<?=  htmlspecialchars($jeu['videojeu']) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </figure>
        </div> 
        <h3 class="soulign titrejeufiche ">Derniers commentaires sur ce jeu:</h3>
            
        <div id="commentairesjeufiche">
           <div class="bloccomment">
                <?php foreach($commentaires as $commentaire){ ?>
                                                
                        <a  class="articlecomment" href="index.php?action=getCommentaire&id=<?= htmlspecialchars($commentaire['id']) ?>" title="Avis complet">
                            <p class="click">Cliquez pour voir l'avis complet.</p>
                            <div class="descriptionjeu" >
                                <p class="soulign">Posté par:</p><p> <?=  htmlspecialchars($commentaire['pseudo']) ?></p>
                            </div>
                            <div class="descriptionjeu" >
                                <p class="soulign">Résumé: </p><p> <?=  htmlspecialchars($commentaire['content']) ?></p>
                            </div>
                        </a>
                   

                <?php } ?>
           
            </div>
            
            <div class="all-articles" >
               
                    <a class="btn" title="écrire un commentaire" href="index.php?action=createCommentaire&id=<?= htmlspecialchars($jeu['id']) ?>&categorie=<?= htmlspecialchars($jeu['categorie']) ?>&title=<?=  htmlspecialchars($jeu['title']) ?>">poster un commentaire</a>
                
                    <a class="btn" title="tous les commentaires" href="index.php?action=getAllcommentaires&id=<?= htmlspecialchars($jeu['id']) ?>&categorie=<?= htmlspecialchars($jeu['categorie']) ?>">voir tous les commentaires</a>
                    
            </div> 
        </div>
        
    </article>
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>