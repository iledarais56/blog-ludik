<?php ob_start(); ?>


        <h1>Liste des mails</h1>
        <section class="container">
            <?php foreach($allMails as $allMail){ ?>

                <article class="bloc">
                   
                        <p class="soulign">Nouveau mail de :</p>
                        <p class="mailbox"> <?= htmlspecialchars($allMail['lastname']) ?> <?= htmlspecialchars($allMail['firstname']) ?></p>
                    
                        <p class="soulign">mail : </p>
                        <p class="mailbox"><?= htmlspecialchars($allMail['mail']) ?></p>
                    
                        <p class="soulign">sujet :</p>
                        <p class="mailbox"> <?= htmlspecialchars($allMail['sujet']) ?></p>
                    
                        <p class="soulign">message :</p>
                        <p class="mailbox"><?= htmlspecialchars($allMail['content']) ?></p>
                    
                        <a class="btn" href="indexAdmin.php?action=deleteMail&id=<?=$allMail['id'] ?>">Supprimer ce mail</a>
                   
                </article>

            <?php }  ?>    

        </section>
   

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>