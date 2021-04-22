<?php ob_start(); ?>
<section class="main-container">


    <h1>Erreur 404</h1>
    <div class="all-articles">
        <p class="text erreurtext">Cette page n'existe pas !</p>
    </div>

</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>