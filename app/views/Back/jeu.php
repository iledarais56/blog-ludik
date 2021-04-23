<?php ob_start(); ?>
<?php $jeu =$getJeu->fetch(); ?>
<?php $categorie = $getCategorie->fetch(); ?>

    <h1>Edition du jeu <?= htmlspecialchars($jeu['title']) ?> </h1>
    
    <section class="container">
                         
        <form  class="bloc" action="indexAdmin.php?action=updateJeu&id=<?=htmlspecialchars($jeu['id']) ?>" method="post">
            <label for="title">titre</label>
            
            <textarea id="title" name="title" ><?= htmlspecialchars($jeu['title']) ?></textarea>
            
            <label for="content">contenu</label>
            
            <textarea id="content" name="content" style="height:200px" ><?= htmlspecialchars($jeu['content']) ?></textarea>
            
            
            
            
            <label for="img">Titre de votre image</label>
            <p>(choisir dans la bibliothèque)</p>
           <?php   //permet de scanner la liste des images dans le repertoire front des images
                $dir = "app/public/Front/images/";
                $imagesNames = scandir($dir);
           ?>
            <select id="img" name="img" >
                <option value="<?= htmlspecialchars($jeu['img']) ?>"><?= htmlspecialchars($jeu['img']) ?></option>
                <?php foreach($imagesNames as $imageName){ 
                    $imageName= substr($imageName,0,-4);//pour enlever le .jpg
                    ?>

                    <option value="<?php print($imageName) ?>"><?php print($imageName) ?></option>

                <?php }?>
            </select>
            

            <label for="videojeu">Video-règle de ce jeu</label>
            <p>(code d'indentation de la video youtube)</p>
            <textarea id="videojeu" name="videojeu" ><?= htmlspecialchars($jeu['videojeu']) ?></textarea>
            
            <label for="categorie">Catégorie du jeu</label>
            <select id="categorie"name="categorie">
                <option value="<?= htmlspecialchars($jeu['categorie']) ?>"><?= htmlspecialchars($categorie['title']) ?></option>
                <option value="1">familiaux</option>
                <option value="2">enfant</option>
                <option value="3">d'ambiance</option>
                <option value="4">expert</option>
            </select>
            
            <label for="note">note</label>
            
            <select id="note"name="note">
                <option value="<?= htmlspecialchars($jeu['note']) ?>"><?= htmlspecialchars($jeu['note']) ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
            
            <label for="avis">Mon avis</label>
            
            <textarea id="avis" name="avis" style="height:200px" ><?= htmlspecialchars($jeu['avis']) ?></textarea>
            
            <input id="submit" type="submit" value="Editer">
            
        </form>
             
    </section>


<?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>