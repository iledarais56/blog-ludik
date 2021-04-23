<?php ob_start(); ?>


  

    <h1>liste des images</h1>

    <div class="container">
        <a class="btn" href="indexAdmin.php?action=image" >Insérer une image <br>dans la bibliothèque</a>
    </div>
    <div class="container">
        <a class="btn" href="indexAdmin.php?action=imagedelete" >Supprimer une image <br>dans la bibliothèque</a>
    </div>
    <!-- permet de scanner la liste des images dans le repertoire front des images -->
    <?php   
        $dir = "app/public/Front/images/";
        $imagesNames = scandir($dir);
    ?>
    <?php foreach($imagesNames as $imageName){

        $imageName= substr($imageName,0,-4);//pour enlever le .jpg 
        ?>

        <article class="container imagebox">
            <img class="imageJeu" src="app/public/Front/images/<?php print($imageName) ?>.jpg" alt="<?php print($imageName) ?>">
            <p class="imageName"><?php print($imageName) ?></p>
        </article>

    <?php }?>


 

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>