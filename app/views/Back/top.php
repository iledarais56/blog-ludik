<?php ob_start(); ?>

<?php  $options = $getJeux->fetchAll(); ?>


    <h1>Gestion du top</h1>

    <div class="container">

        <?php foreach($tops as $top){ ?>

            <form class="bloc" action="indexAdmin.php?action=editionTop&id=<?= htmlspecialchars($top['numero']) ?>" method="post">
                
                <label for="numero<?= htmlspecialchars($top['numero']) ?>">Numero <?= htmlspecialchars($top['numero']) ?>: </label>
                    
                <select name="numero">
                    <option value="<?= htmlspecialchars($top['id']) ?>"><?= htmlspecialchars($top['title']) ?></option>
                        <?php foreach($options as $option){ ?>
                            <option value="<?= htmlspecialchars($option['id_jeu']) ?>"><?= htmlspecialchars($option['titreJeu']) ?></option>
                        <?php }  ?> 
                </select>
                    
                
                <input id="submit" type="submit" value="editer le numero <?= htmlspecialchars($top['numero']) ?>" name="submit"  class="submit">
                
            </form>
                    

        <?php }  ?>    

    </div>
 

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>