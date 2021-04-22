<?php ob_start(); ?>




    
    <h1>Ce message a été suprimé avec succès !</h1>
    
    <div class="container">
        <a class="btn " href="indexAdmin.php?action=mails">retour à la liste des mails</a>
    </div>



 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>