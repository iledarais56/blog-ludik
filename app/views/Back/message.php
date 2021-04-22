<?php ob_start(); ?>




    
    <h1>Blog-ludik  Admin</h1>
    <div class="container">
        <p id="message"> <?= $message ?></p>
    </div>
    <div class="container">
        <a class="btn " href="indexAdmin.php?action=<?= $action  ?>">Retour</a>
    </div>



 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>