<?php

session_start();
require_once __DIR__ .'/vendor/autoload.php';




try{
    $frontController = new \Project\Controllers\Front\FrontController();
    if(isset($_GET['action'])){

//les différentes actions récupérées en front:

        //connexion admin
        if($_GET['action']==='admin'){ 
            $frontController->admin();
        }
        elseif($_GET['action']==='connexionAdmin'){
            $mail = $_POST['mail'];
            $mdp = $_POST['pass'];

            if(!empty($mail)&&($mdp)){
                $frontController->connexion($mail,$mdp);
            }else{
                throw new \Exception('Renseignez vos identifiants');
            }

        }
        //gestion des categories
        elseif($_GET['action']==='categories'){ 
            $frontController->categories();
        }
        elseif($_GET['action']==='categorie'){
            $id= $_GET['id'];
            $frontController->categorie($id);
        }
        elseif($_GET['action']==='jeuFiche'){
            $id= $_GET['id'];
            $categorie=$_GET['categorie'];
            $frontController->jeuFiche($id,$categorie);
        }

        //gestion des commentaires
        elseif($_GET['action']==='createCommentaire'){
            $title =$_GET['title'];
            $categorie =$_GET['categorie'];
            $id_jeu= $_GET['id'];
            $frontController->createCommentaire($id_jeu,$categorie,$title);
        }
        elseif($_GET['action']==='postCommentaire'){
            $id =$_GET['id_jeu'];
            $categorie =$_GET['categorie'];
            $newIdJeu =$_GET['id_jeu'];
            $newPseudo = $_POST['pseudo'];
            $newContent = $_POST['content'];
            $newTotalContent = $_POST['totalContent'];
            $newNotepost = $_POST['notepost'];

            if(!empty($newPseudo)&&!empty($newContent)&&!empty($newTotalContent)&&!empty($newNotepost)){
                $frontController->newCommentaire($newIdJeu,$newPseudo,$newContent,$newTotalContent,$newNotepost,$categorie,$id);
            }
            elseif(empty($newPseudo)&&!empty($newContent)&&!empty($newTotalContent)&&!empty($newNotepost)){
                throw new \Exception("Vous n'avez pas indiqué votre pseudo !");
            }
            elseif(!empty($newPseudo)&& empty($newContent)&&!empty($newTotalContent)&&!empty($newNotepost)){
                throw new \Exception("Vous n'avez pas indiqué le résumé de votre commentaire !");
            }
            elseif(!empty($newPseudo)&&!empty($newContent)&& empty($newTotalContent)&&!empty($newNotepost)){
                throw new \Exception("Vous n'avez pas indiqué votre commentaire!");
            }
            elseif(!empty($newPseudo)&&!empty($newContent)&&!empty($newTotalContent)&& empty($newNotepost)){
                throw new \Exception("Vous n'avez pas indiqué votre note !");
            }
            else{
                throw new \Exception('Tous les champs ne sont pas remplis !');
            }
            
        }
        elseif($_GET['action']==='getCommentaire'){
            $id= $_GET['id'];
            $frontController->getCommentaire($id);
        }
        elseif($_GET['action']==='commentaires'){
            $frontController->commentaires();
        }
        elseif($_GET['action']==='getAllcommentaires'){
           
            $id_jeu= $_GET['id'];
            $frontController->getAllcommentaires($id_jeu);
        }
        elseif($_GET['action']==='mentions'){
            $frontController->mentions();
        }
        
        //gestion des tops
        elseif($_GET['action']==='top'){
            $frontController->top();
        }
        
        
        //gestion des contacts
        elseif($_GET['action']==='contact'){
            $frontController->contact();
        }
        //envoi du mail en bdd
        elseif($_GET['action']==='contactMail'){
            $_lastname = htmlspecialchars($_POST['lastname']);
            $_firstname = htmlspecialchars($_POST['firstname']);
            $_mail = htmlspecialchars($_POST['mail']);
            $_sujet = htmlspecialchars($_POST['sujet']);
            $_content = htmlspecialchars($_POST['content']);


            if(!empty($_lastname) && (!empty($_firstname) && (!empty($_mail) && (!empty($_sujet) && (!empty($_content)))))){
                $frontController->contactMail($_lastname,$_firstname,$_mail,$_sujet,$_content);
            }
                elseif(empty($_lastname) && !empty($_firstname) && !empty($_mail) && !empty($_sujet) && !empty($_content)){
                    throw new \Exception("Vous n'avez pas indiqué votre nom");
                }
                elseif(empty($_firstname) && !empty($_lastname) && !empty($_mail) && !empty($_sujet) && !empty($_content)){
                    throw new \Exception("Vous n'avez pas indiqué votre prénom");
                }
                elseif(empty($_mail) && !empty($_firstname) && !empty($_lastname) && !empty($_sujet) && !empty($_content)){
                    throw new \Exception("Vous n'avez pas indiqué votre adresse mail");
                }
                elseif(empty($_sujet) && !empty($_firstname) && !empty($_mail) && !empty($_lastname) && !empty($_content)){
                    throw new \Exception("Vous n'avez pas indiqué le sujet de votre message");
                }
                elseif(empty($_content) && !empty($_firstname) && !empty($_mail) && !empty($_sujet) && !empty($_lastname)){
                    throw new \Exception("Vous n'avez pas écrit votre message");
                }
            else{
               throw new \Exception('Tous les champs ne sont pas remplis !');
            }
        }
        
        //redirection pour htaccess
        elseif($_GET['action']==='404'){
            $errorMessage = "page introuvable !";
            $frontController->error($errorMessage);
        }
        else {
            $errorMessage = "page introuvable !";
            $frontController->error($errorMessage);;
        }

    }else{ //Si aucune action n'est réalisée, la page est redirigée sur la page d'accueil
        $frontController->accueil();
    }

}catch(\Exception $e){;
    $errorMessage = $e->getMessage() ;
    $frontController->error($errorMessage);
  
};