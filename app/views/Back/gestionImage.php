<?php ob_start(); ?>

    <h1>liste des images</h1>

    <section class="container">

        <a class="btn" href="indexAdmin.php?action=image" >Insérer une image <br>dans la bibliothèque</a>

    </section>

    <section class="container">

        <a class="btn" href="indexAdmin.php?action=imagedelete" >Supprimer une image <br>dans la bibliothèque</a>

    </section>

    <!-- permet de scanner la liste des images dans le repertoire front des images -->

    <?php   

        $dir = "app/public/Front/images/";

        $imagesNames = scandir($dir);

    ?>

    <section>

        <?php foreach($imagesNames as $imageName){

            $imageName= substr($imageName,0,-4);//pour enlever le .jpg 

        ?>

            <article class="container imagebox">

                <img class="imageJeu" src="app/public/Front/images/<?php print($imageName) ?>.jpg" alt="<?php print($imageName) ?>">

                <p class="imageName"><?php print($imageName) ?></p>

            </article>

        <?php }?>

    </section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->

<?php require 'templates/template.php' ?>