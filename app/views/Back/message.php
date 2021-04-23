<?php ob_start(); ?>




    
    <h1>Blog-ludik  Admin</h1>
    <section class="container">
        <p id="message"> <?= $message ?></p>
    </section>
    <section class="container">
        <a class="btn " href="indexAdmin.php?action=<?= $action  ?>">Retour</a>
    </section>



 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>