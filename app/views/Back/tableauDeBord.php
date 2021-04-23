<?php ob_start(); ?>

<h1>Tableau de bord</h1>


<section class="container">
        
    <a href="indexAdmin.php?action=jeuxListe" >
        <i class="fa fa-dice"></i>&ensp;Gérer mes jeux</a>
    
    <a href="indexAdmin.php?action=mails">
        <i class="fa fa-envelope"></i>&ensp;Gérer mes mails</a>
    
    <a href="indexAdmin.php?action=top">
        <i class="fa fa-trophy"></i>&ensp;Gérer mon top</a>

        <a href="indexAdmin.php?action=gestionImage">
        <i class="fa fa-image"></i>&ensp;Gérer mes images</a>
       
        
</section>

    
        


<?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>