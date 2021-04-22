<?php ob_start(); ?>

        <h1>Gestion de jeu</h1>
        <div class="container">

            <?php $jeu =$getJeuAdmin->fetch(); ?>

        
                <h2><?= htmlspecialchars($jeu['title']) ?></h2>
                
                <div class="container">
                    <img src="app/public/Front/images/<?= htmlspecialchars($jeu['img']) ?>.jpg" alt="<?= htmlspecialchars($jeu['title'])?>" >
                </div>
                
                <a class="btn" href="indexAdmin.php?action=deleteJeu&id=<?=htmlspecialchars($jeu['id']) ?>">Supprimer</a>
                
                <a class="btn" href="indexAdmin.php?action=editionJeu&id=<?=htmlspecialchars($jeu['id']) ?>">Editer</a>
                
                <a class="btn" href="indexAdmin.php?action=commentaires&id_jeu=<?=htmlspecialchars($jeu['id']) ?>">Commentaires</a>
                         
                      
        </div>
  

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>