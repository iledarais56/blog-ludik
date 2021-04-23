<?php ob_start(); ?>

<section class="main-container">
    <h1>Les différentes catégories de jeux</h1>
    
        
        <div class="all-articles">
            
                <?php foreach($Categories as $categorie){ ?>
                
                    <article class="article">    
                        <a href="index.php?action=categorie&id=<?= htmlspecialchars($categorie['id']) ?>" title="les jeux <?= htmlspecialchars($categorie['title']) ?>">
                            
                                
                                    <h2><?= htmlspecialchars($categorie['title']) ?></h2>
                                    
                                    <div class="image-container">
                                        <svg aria-hidden="true" id="dice"  role="img" viewBox="0 0 448 512"><path fill="currentColor" d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h320c35.35 0 64-28.65 64-64V96c0-35.35-28.65-64-64-64zM128 384c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm0-96c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm0-96c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm192 192c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm0-96c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm0-96c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"></path></svg>
                                    </div>
                                    <p><?= htmlspecialchars($categorie['content']) ?></p>
                                
                            
                        </a>
                    </article>
                    
                <?php }  ?> 

        </div>
    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>