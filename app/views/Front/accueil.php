<?php ob_start(); ?>


<section class="main-container">
     
    <h1>Bienvenue sur Blog-ludik!<br>le blog sur les jeux de société modernes </h1>


    <article id="slider">
        <img src="app/public/Front/images/jeux-slide1.jpg" alt="jeux de société" id="slide">
        <div id="precedent" onclick="ChangeSlide(-1)"><</div>
        <div id="suivant" onclick="ChangeSlide(1)">></div>
    </article>


    <article id="accueiltext"class="text">
            Ce site a pour but de parler des jeux de société modernes,<br>
        je donne mon avis perso sur les jeux présents dans ma ludothèque. 
    </article> 
    <article id="apropos">
        <h2 id="aproposbutton">En savoir plus sur Blog-ludik</h2>
        <p id="apropostext" class="displayed">
        Je m'appelle Olivier, je suis tombé dans la marmite des jeux de société il y a quelques années en adhérant à une asso de jeux : <a href="https://lvl56.forumactif.com/"title="lien vers la lVL" target="_blank"> la ligue des Vannetais Ludiques</a>.<br><br>
            Cette association organise chaque année un festival :  <a href="https://ramene-tes-jeux.fr/" title="lien vers ramène tes jeux" target="_blank">Ramène tes jeux</a>  situé à Theix dans le Morbihan.<br><br>
            Cela fait plusieurs années que je participe à l'animation de ce festival et également au festival  <a href="https://ludouest.fr/" title="lien vers ludouest" target="_blank">Ludouest</a>  qui est organisé par une asso voisine.<br><br>
            Cette expérience m'a fait découvrir cette passion sous plusieurs angles, non seulement jouer mais aussi partager, expliquer des règles, faire découvrir aux autres les petites pépites ludiques qui font tout le sel de cette passion.<br>
            <br>
            Quel joueur je suis ?<br>
            J'aime la plupart des jeux que ce soit ameritrash, kubenbois, coopératif, compétitif ou solo mais j'ai un net penchant pour les jeux de deckbuilding et les jeux de gestion de ressources.<br>
            La plupart du temps je joue dans le cadre de mon asso ou en famille et j'aime aussi le jeu solo. Je pratique également sur <a href="https://fr.boardgamearena.com/" title="lien vers BGA" target="_blank">Board Game Arena</a>.<br><br>
            Ludiquement vôtre, Olivier.
        </p>
    </article> 

</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>