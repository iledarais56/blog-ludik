<?php ob_start(); ?>
<?php  $categorie = $CategorieName->fetch(); ?>
<section class="main-container">
     <h1>Les différents jeux  <?= htmlspecialchars($categorie['title']) ?> </h1> 
     <p class="text"><?= htmlspecialchars($categorie['content']) ?></p>
    
        
        <div class="all-articles">
            
                    <?php foreach($jeux as $jeu){ ?>
                        
                        <a href="index.php?action=jeuFiche&id=<?= htmlspecialchars($jeu['id']) ?>&categorie=<?= htmlspecialchars($jeu['categorie']) ?>" title="le jeu <?= htmlspecialchars($jeu['title']) ?>">
                            <article class="article">
                                
                                <h2><?= htmlspecialchars($jeu['title']) ?></h2>
                                <div class="image-container">
                                    <img src="app/public/Front/images/<?=  htmlspecialchars($jeu['img']) ?>.jpg" alt="<?=  htmlspecialchars($jeu['title'])?>" >
                                </div>
                                    
                                
                            </article>
                        </a>

                    <?php }  ?> 

        </div>
    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>