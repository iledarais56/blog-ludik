<?php ob_start(); ?>
<section class="main-container">


    <h1>Erreur </h1>
    <div class="all-articles">
        <p class="text erreurtext"><?=  htmlspecialchars($errorMessage) ?></p>
    </div>

</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>