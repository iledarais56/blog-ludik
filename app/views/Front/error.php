<?php ob_start(); ?>
<section class="main-container">


    <h1>Erreur </h1>
    <article class="all-articles">
        <p class="text erreurtext"><?=  htmlspecialchars($errorMessage) ?></p>
    </article>

</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>