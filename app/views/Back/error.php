<?php ob_start(); ?>

    <h1>Erreur</h1>
    
    <p class="text"><?=  htmlspecialchars($errorMessage) ?></p>
    


 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>