<?php

namespace Project\Controllers\Front;

class FrontController {

    //pour aller sur la page accueil
    function accueil(){

        
        $meta_description = "Blog-ludik Avis,tests jeux de plateaux et jeux de société modernes ";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik--le blog sur les jeux de société modernes";

        require'app/views/Front/accueil.php';
    }

//connexion admin-------------------------------------------

    //redirige vers la page connexionAdmin
    function admin(){
        
        
        $meta_description = "Blog-ludik connexion administration";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik--connexion ";

        require'app/views/Front/connexionAdmin.php';
    }

    //verifie les bons identifiants puis redirige vers le tableau de bord de l'admin
    function connexion($mail,$mdp){
        
        $meta_description = "Blog-ludik administration ";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik--administration ";

        try{
            $userManager = new \Project\Models\UserManager();
            $connexionAdm = $userManager->recupMdp($mail,$mdp);
            $result = $connexionAdm->fetch();
            
            $isPasswordCorrect = password_verify($mdp,$result['mdp']);

            $_SESSION['mail'] = $result['mail'];
            $_SESSION['mdp'] = $result['mdp'];
            $_SESSION['id'] = $result['id'];
            $_SESSION['firstname'] = $result['firstname'];

            if($isPasswordCorrect){
                require'app/views/Back/tableauDeBord.php';
            }else{
                throw new \Exception("Vos identifiants sont incorrects ! "); 
            }
        }catch(\Exception $e){
            $errorMessage = $e->getMessage() ;
            require'app/views/Front/error.php';
        }
        
    }
//categories--------------------------------------------------------------

    //redirige vers  la page categories ou on applique la fonction getCategories() de CategorieManager
    function categories(){
        
        
        $meta_description = "Blog-ludik-catégories de jeux ";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik catégories";

        $categorie = new \Project\Models\CategorieManager();
        $Categories = $categorie->getCategories();

        require'app/views/Front/categories.php';
    }

    //redirige vers  la page categorie ou on applique la fonction getJeu($id) de jeuManager et getCategorie de categorie Manager
    function categorie($id){
        
        
        $meta_description = "Blog-ludik categorie";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik--categorie ";

        $categorie = new \Project\Models\CategorieManager();
        $CategorieName = $categorie->getCategorie($id);

        $jeu = new \Project\Models\JeuManager();
        $jeux = $jeu->getJeu($id);

        require'app/views/Front/categorie.php';
    }

//jeux--------------------------------------------------------------   

    //redirige vers  la page jeufiche ou on applique la fonction getMoyenne($id) de CommentaireManager, la fonction getJeuFiche($id,$categorie) de jeuManager et la fonction getCommentaires($id) de CommentaireManager
    function jeuFiche($id,$categorie){

        
        $meta_description = "Blog-ludik jeu,avis note commentaires règles ";

        $meta_robots = "index,nofollow";

        $meta_title = "Blog-ludik--jeu";

        $moyenne = new \Project\Models\CommentaireManager();
        $getMoyenne = $moyenne->getMoyenne($id);
        $jeu = new \Project\Models\JeuManager();
        $getJeuFiche = $jeu->getJeuFiche($id,$categorie);
        $commentaire = new \Project\Models\CommentaireManager();
        $getCommentaires =$commentaire->getCommentaires($id);
      

        require'app/views/Front/jeuFiche.php';
    }
//top--------------------------------------------------------------   

    //redirige vers  la page top ou on applique la fonction getJeuFromTop() de TopManager
    function top(){
        
        $meta_description = "Blog-ludik top jeux ";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik--top";

        $top = new \Project\Models\TopManager();
        $tops = $top->getJeuFromTop();

        require'app/views/Front/top.php';
    }  
    

//commentaires--------------------------------------------------------------

    //redirige vers  la page commentaire
    function createCommentaire($id_jeu,$categorie,$title){
    
        
        $meta_description = "Blog-ludik-commentaires sur le jeu";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik--commentaires ";

        require'app/views/Front/commentaire.php';
    }

    //redirige vers  la page commentaireFiche ou on applique la fonction getCommentaire($id) de CommentaireManager
    function getCommentaire($id){
        
        
        $meta_description = "Blog-ludik-commentaire sur le jeu ";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik--commentaire";

        $commentaire = new \Project\Models\CommentaireManager();
        $getCommentaire = $commentaire->getCommentaire($id);
        require'app/views/Front/commentaireFiche.php';
    }

    //redirige vers  la page commentaires ou on applique la fonction getAllcommentaires($id) de CommentaireManager et getJeuName de CommentaireManager
    function getAllcommentaires($id_jeu){
        
        $meta_description = "Blog-ludik-commentaires sur le jeu";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik--commentaires";

        $name =new \Project\Models\JeuManager();
        $getJeuCategorieName = $name->getJeuName($id_jeu);
        $commentaire = new \Project\Models\CommentaireManager();

        $getAllcommentaires = $commentaire->getAllcommentaires($id_jeu);
        
        require'app/views/Front/commentaires.php';
    }

    //pour aller sur la page commentaires
    function commentaires(){
        
        $meta_description = "Blog-ludik-commentaires sur le jeu";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik--commentaires";

        require'app/views/Front/commentaires.php';
    }

    //redirige vers  la page commentaireFait ou on applique les fonctions newCommentaire de CommentaireManager et getJeuAdmin de jeuManager
    function newCommentaire($newIdJeu,$newPseudo,$newContent,$newTotalContent,$newNotepost,$categorie,$id){
        
        $meta_description = "Blog-ludik commentaire crée";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik--commentaire créé ";

        $commentaire = new \Project\Models\JeuManager();
        $getJeuAdmin = $commentaire->getJeuAdmin($id);

        $commentaire = new \Project\Models\CommentaireManager();
        $Commentaires = $commentaire->newCommentaire($newIdJeu,$newPseudo,$newContent,$newTotalContent,$newNotepost,$categorie,$id);

        require'app/views/Front/commentaireFait.php';
    }

    //redirige vers  la page commentairevide ou on applique la fonction  getJeuAdmin de jeuManager
    function CommentaireVide($id){
        
        $meta_description = "Blog-ludik commentaire";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik--commentaire  ";

        $commentaire = new \Project\Models\JeuManager();
        $getJeuAdmin = $commentaire->getJeuAdmin($id);

        require'app/views/Front/commentaireVide.php';
    }
   
    //redirige vers  la page commentaire ou on applique la fonction getCommentaire($id) de CommentaireManager
    function commentaire($id){
        
        $meta_description = "Blog-ludik commentaire";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik--commentaire ";

        $commentaire = new \Project\Models\CommentaireManager();
        $Commentaires = $commentaire->getCommentaire($id);
        require'app/views/Front/commentaire.php';
    }
    

// envoi de mail--------------------------------------------------------------

    //pour aller sur la page contact
    function contact(){
        
        $meta_description = "Blog-ludik contact";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik--contactez-nous ";

        require'app/views/Front/contact.php';
    }

    //redirige vers la page confirmMail après avoir verifié que le mail a bien été envoyé
    function contactMail($lastname,$firstname,$mail,$sujet,$content){
        
        $meta_description = "Blog-ludik contact";

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik--confirmation de mail ";

        $contactManager = new \Project\Models\ContactManager(); 

        //redirige vers  la page confrmMail
        if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
            $contactUserMail = $contactManager->mail($lastname,$firstname,$mail,$sujet,$content);
            require'app/views/Front/confirmMail.php';
        }else{//redirige vers  la page error
            throw new \Exception("une erreur est survenue dans l'envoi de votre message !");
            header('Location: app/views/Front/error.php');
        }
    }

    

//pour aller sur la page mentions légales----------------------------------------------
    function mentions(){
        
        $meta_description = "Blog-ludik mentions légales";

        $meta_robots = "noindex,nofollow";

        $meta_title = "Blog-ludik--mentions légales RGPD ";

        require'app/views/Front/mentions.php';
    }

//pour aller vers la page erreur-----------------------------------------------------
    function error($errorMessage){
        $meta_description = "Blog-ludik erreur";

        $meta_robots = "noindex,nofollow";

        $meta_title = "Blog-ludik--erreur ";

        require'app/views/Front/error.php';
    }

}