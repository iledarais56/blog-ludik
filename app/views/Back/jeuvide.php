<?php ob_start(); ?>




    
    <h1>Votre jeu n'a pas été crée</h1>
    <p class='text'>Certains champs sont vides !</p>
    
    <div class="container">
        <a class="btn " href="indexAdmin.php?action=createJeu">retour à la page de création</a>
    </div>



 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>