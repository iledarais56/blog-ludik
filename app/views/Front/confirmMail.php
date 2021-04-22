<?php ob_start(); ?>

<section class="main-container">
<div class="confirmMail">
    <h1>Votre message a été envoyé avec succès !</h1>
</div>
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>