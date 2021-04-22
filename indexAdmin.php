<?php

session_start();
require_once __DIR__ .'/vendor/autoload.php';

try{
    $backController = new \Project\Controllers\Back\BackController();

    if(isset($_GET['action'])){

//les différentes actions récupérées en back:


        //connexion et creation utilisateurs
        if($_GET['action']=='createAdmin'){
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $firstName = $_POST['firstName'];

            $mdp = password_hash($pass,PASSWORD_DEFAULT);
            $backController->creatAdmin($mail,$mdp,$firstName);
        }
       
        //gestion des mails
        elseif($_GET['action']=='mails'){
            $backController->mails();
        }
        //supprimer un mail
        elseif($_GET['action']=='deleteMail'){
            $id = $_GET['id'];
            $backController->deleteMail($id);
        }
       
        //retour au tableau de bord
        elseif($_GET['action']=='tdbAdmin'){
            $backController->tdbAdmin();

        }//deconnexion
        elseif($_GET['action']=='deconnexion'){
            session_destroy();
            header('location: index.php');
            
        }//gestion des jeux
        elseif($_GET['action']=='Jeu'){
            $id = $_GET['id'];
            $backController->jeu($id); 
        }
        elseif($_GET['action']=='jeuxListe'){
            $backController->jeuxListe(); 
        }
        elseif($_GET['action']=='deleteJeu'){
            $id = $_GET['id'];
            $backController->deleteJeu($id);
        }
        elseif($_GET['action']=='editionJeu'){
            $id = $_GET['id'];
            $backController->editionJeu($id);
        }
        elseif($_GET['action']=='updateJeu'){
            $id = $_GET['id'];
            $updatetitle = $_POST['title'];
            $updatecontent = $_POST['content'];
            $updatecategorie = $_POST['categorie'];
            $updateimage = $_POST['img'];
            $updatevideojeu = $_POST['videojeu'];
            $updateAvis = $_POST['avis'];
            $updateNote = $_POST['note'];
            if(empty($updatetitle)){
                throw new \Exception("Vous n'avez pas mis de titre !");
            }
            elseif(empty($updatecontent)){
                throw new \Exception("Vous n'avez pas mis de description !");
            }
            elseif(empty($updateimage)){
                throw new \Exception("Vous n'avez pas mis d'image !");
            }
            elseif(empty($updatevideojeu)){
                throw new \Exception("Vous n'avez pas mis de video !");
            }
            elseif(empty($updateAvis)){
                throw new \Exception("Vous n'avez pas mis d'avis !");
            }
            elseif(empty($updateNote)){
                throw new \Exception("Vous n'avez pas mis de note !");
            }
            else{
                $backController->updateJeu($id,$updatetitle,$updatecontent,$updatecategorie,$updateimage,$updatevideojeu,$updateAvis,$updateNote);
            }
        }
        elseif($_GET['action']=='createJeu'){
            $backController->createJeu(); 
        }
        elseif($_GET['action']=='newJeu'){
            $newTitle = $_POST['title'];
            $newContent = $_POST['content'];
            $newImage = $_POST['img'];
            $newVideojeu = $_POST['videojeu'];
            $newCategorie = $_POST['categorie'];
            $newAvis = $_POST['avis'];
            $newNote = $_POST['note'];


            if(!empty($newTitle)&&!empty($newContent)&&!empty($newImage)&&!empty($newVideojeu)&&!empty($newCategorie)&&!empty($newAvis)&&!empty($newNote)){
                $backController->newJeu($newTitle,$newContent,$newImage,$newVideojeu,$newCategorie,$newAvis,$newNote);
            }
            elseif(empty($newTitle)&&!empty($newContent)&&!empty($newImage)&&!empty($newVideojeu)&&!empty($newCategorie)&&!empty($newAvis)&&!empty($newNote)){
                throw new \Exception("Vous n'avez pas mis de titre !");
            }
            elseif(empty($newContent)&&!empty($newTitle)&&!empty($newImage)&&!empty($newVideojeu)&&!empty($newCategorie)&&!empty($newAvis)&&!empty($newNote)){
                throw new \Exception("Vous n'avez pas mis de description !");
            }
            elseif(empty($newImage)&&!empty($newTitle)&&!empty($newContent)&&!empty($newVideojeu)&&!empty($newCategorie)&&!empty($newAvis)&&!empty($newNote)){
                throw new \Exception("Vous n'avez pas mis d'image !");
            }
            elseif(empty($newVideojeu)&&!empty($newTitle)&&!empty($newContent)&&!empty($newImage)&&!empty($newCategorie)&&!empty($newAvis)&&!empty($newNote)){
                throw new \Exception("Vous n'avez pas mis de video !");
            }
            elseif(empty($newAvis)&&!empty($newTitle)&&!empty($newContent)&&!empty($newImage)&&!empty($newVideojeu)&&!empty($newCategorie)&&!empty($newNote)){
                throw new \Exception("Vous n'avez pas mis d'avis !");
            }
            elseif(empty($newNote)&&!empty($newTitle)&&!empty($newContent)&&!empty($newImage)&&!empty($newVideojeu)&&!empty($newCategorie)&&!empty($newAvis)){
                throw new \Exception("Vous n'avez pas mis de note !");
            }
            else{
                throw new \Exception('Tous les champs ne sont pas remplis !');
            }; 
             
           
        }
        elseif($_GET['action']=='commentaires'){
            $id_jeu = $_GET['id_jeu'];
            $backController->getAllcommentaires($id_jeu); 
        }
        elseif($_GET['action']=='retourCommentaires'){
            $id_jeu = $_GET['id_jeu'];
            $backController->getAllcommentaires($id_jeu); 
        }
        elseif($_GET['action']=='deletecommentaire'){
            $id = $_GET['id'];
            $backController->deletecommentaire($id); 
        }

        //gestion du top
        elseif($_GET['action']=='top'){
            $backController->top(); 
        }
        elseif($_GET['action']=='editionTop'){
            $id = $_GET['id'];
            $update = $_POST['numero'];

            $backController->editTop($update,$id);
        }
       
        
        //gestion des images
        elseif($_GET['action']=='gestionImage'){
            $backController->gestionImage(); 
        }
        elseif($_GET['action']=='image'){
            $backController->image(); 
        }
        elseif($_GET['action']=='imagedelete'){
            $backController->imagedelete(); 
        }
        elseif($_GET['action']=='deleteImage'){
            $imageToDelete = $_POST['imageToDelete'];
            $backController->deleteImage($imageToDelete); 
        }
        elseif($_GET['action']=='images'){
            $backController->tdbAdmin(); 
        }
        elseif($_GET['action']=='creatImage'){
            $backController->creatImage(); 
        }
        else{
            $errorMessage = "page introuvable" ;
            $backController->error($errorMessage);
        }

    }else{
        $backController->connexionAdmin();
    }
}catch(\Exception $e){
    $errorMessage = $e->getMessage() ;
    $backController->error($errorMessage);
  
};