<?php ob_start(); ?>

<section class="main-container">
    <h1>Mon top du moment</h1>
    
        
        <div id="top-container" class="all-articles">
            
                    <?php foreach($tops as $top){ ?>
                        
                        <article class="topcard">
                            <p class="soulign top">Numero <?= htmlspecialchars($top['numero']) ?> </p>
                            <a href="index.php?action=jeuFiche&id=<?= htmlspecialchars($top['id']) ?>&categorie=<?= htmlspecialchars($top['categorie']) ?>">
                                <div class="article categorie" id="numero<?= htmlspecialchars($top['numero']) ?>">
                                    <h2><?= htmlspecialchars($top['title']) ?></h2>
                                    <div class="image-container">
                                        <img src="app/public/Front/images/<?=  htmlspecialchars($top['img']) ?>.jpg" alt="<?= htmlspecialchars($top['title'])?>" >
                                    </div> 
                                </div>
                            </a>
                        </article>

                    <?php }  ?>

        </div>
    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>