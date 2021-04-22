<?php ob_start(); ?>


  

    <h1>L'image a bien été supprimée</h1>

   
    <div class="container">
        <a class="btn" href="indexAdmin.php?action=gestionImage"> Retour à la gestion des images</a>
    </div>    


 

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>