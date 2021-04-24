<?php ob_start(); ?>

<section class="main-container">

    <article class="confirmMail">
        <h1>Votre message a été envoyé avec succès !</h1>
    </article>

</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>