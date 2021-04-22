<?php ob_start(); ?>

<h1>suppresion des images</h1>
  

    
<div class="container">

    <form class="bloc" action="indexAdmin.php?action=deleteImage" method="post" >
        
        <p>choisissez une image à supprimer</p>
            <select id="deleteSelect" name="imageToDelete">

            
                <!-- permet de scanner la liste des images dans le repertoire front des images -->
                <?php   
                    $dir = "app/public/Front/images/";
                    $imagesNames = scandir($dir);
                ?>
                <?php foreach($imagesNames as $imageName){

                    $imageName= substr($imageName,0,-4);//pour enlever le .jpg 
                    ?>
                        <option value="<?php print($imageName) ?>"><?php print($imageName) ?></option>
                    

                <?php }?>
            </select>
        <input id="submit" type="submit" value="suprimer" name="submit"  class="submit">
        
    </form>
            
</div>



 

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>