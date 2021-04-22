<?php ob_start(); ?>




    
    <h1>Votre top a été mis a jour avec succès !</h1>
       
    
    <div class="container">
        <a class="btn " href="indexAdmin.php?action=top">retour au top</a>
    </div>



 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>