<?php ob_start(); ?>


    <h1>inserer une image dans la biblihothèque d'images</h1>
    <?php
      if( !empty($message) ) 
      {
        echo '<p>',"\n";
        echo "\t\t<strong>", htmlspecialchars($message) ,"</strong>\n";
        echo "\t</p>\n\n";
      }
    ?>
    <div class="container">

        <form  class="bloc" action="indexAdmin.php?action=creatImage" method="post" enctype="multipart/form-data">

            <input type="file" id="fileToUpload" name="fileToUpload" class="filesImg">
            <input id="submit" type="submit" value="envoyer" name="submit"  class="submit">
          
        </form>

    </div>


<?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>