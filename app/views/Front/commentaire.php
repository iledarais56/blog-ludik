<?php ob_start(); ?>

<section class="main-container">
    <div class="form-container">
        <div class="formbloc">
            <h1>Votre commentaire sur le jeu <?= $title ?> </h1>
            <form class="form" action="index.php?action=postCommentaire&id_jeu=<?php echo  htmlspecialchars($id_jeu) ?>&categorie=<?php echo  htmlspecialchars($categorie)?>" method="post">

                <div class="formarticle">
                    <label for="pseudo">Votre pseudo&emsp;</label>
                    <input type="text" id="pseudo" name="pseudo">
                </div>
                <div class="formarticle">
                    <label for="content">Résumé de votre commentaire&emsp;</label>
                    <textarea name="content"></textarea>
                </div>
                <div class="formarticle">
                    <label for="totalContent">Votre commentaire&emsp;</label>
                    <textarea  id="totalcontent" name="totalContent"></textarea>
                </div>
                <div class="formarticle">
                <label for="notepost">Votre note&emsp;</label>
                <select id="notepost"name="notepost">
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
                </div>
                <div class="sub_btn">
                    <input type="submit" value="Envoyer" name="submit"  class="submit">
                </div>

            </form>
        </div>
                
    </div>    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>