<?php ob_start(); ?>

<section class="main-container">
    <article class="form-container">
        <div class="formbloc">
            <h1>Contactez-nous</h1>
            <form action="index.php?action=contactMail" method="post">
                
                <div class="formarticle">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="lastname" placeholder="Votre nom">
                </div>

                <div class="formarticle">
                    <label for="firstname">Prénom</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Votre prénom">
                </div>

                <div class="formarticle">
                    <label for="adresse">adresse</label>
                    <input type="text" id="adresse" name="adresse" placeholder="Votre adresse">
                    <div id="adresssugest"></div>
                </div>

                <div class="formarticle">
                    <label for="mail">Email</label>
                    <input type="email" id="mail" name="mail" placeholder="Votre email">
                </div>

                <div class="formarticle">
                    <label for="sujet">Sujet</label>
                    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">
                </div>

                <div class="formarticle">
                    <label for="content">Message</label>
                    <textarea id="content" name="content" placeholder="Votre message" ></textarea>
                </div>

                <div class="formarticle" id="checkdata">
                    <div class="acceptbox">
                        <input type="checkbox" id="accept" name="accept">
                        <label for="accept">J'accepte la <a href="index.php?action=mentions" title="page RGPD">politique de confidentialitée</a> du site</label>
                        
                    </div> 
                </div>
                
                <div class="sub_btn">
                    <input type="submit" id="formbutton" name="formbutton" value="Envoyer" disabled>
                </div>
            
            </form>
        </div>
    </article>    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>