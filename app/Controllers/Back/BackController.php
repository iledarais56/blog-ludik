<?php
namespace Project\Controllers\Back;
Use Project\Models\UserManager;

class BackController{

//administration---------------------------------------------------------------------

    //redirige vers la page connexionAdmin
    function connexionAdmin(){
        
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-connexionAdministrateur";

        require'app/views/Back/connexionAdmin.php';
    }

    //utilisé a l'initialisation du projet pour créer l'admin
    function creatAdmin($firstName,$mdp,$mail){      

        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-creation administrateur";

        $userManager = new \Project\Models\UserManager();
        $user = $userManager->creatAdmin($firstName,$mdp,$mail);

    }

    

    //redirige vers la page tableauDeBord
    function tdbAdmin(){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-tableau de bord";

        require'app/views/Back/tableauDeBord.php';
    }

    //redirige vers la page mails ou on applique la fonction getMails() de ContactManager
    function mails(){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-mails";

        $mails = new \Project\Models\ContactManager();
        $allMails = $mails->getMails();

        require'app/views/Back/mails.php';
    }

    //redirige vers l'action mails ou on applique la fonction deleteMail($id) de ContactManager
    function deleteMail($id){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-maildeleted";

        $mail = new \Project\Models\ContactManager();
        $deleteMails = $mail->deleteMail($id);

        $message = "Votre mail a été supprimé";
        $action = "mails";
        require'app/views/Back/message.php';
    }
    

//gestion des jeux------------------------------------------------------------------------------

    //redirige vers la page gestionjeu ou on applique la fonction getJeuAdmin($id) de JeuManager
    function jeu($id){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-gestion jeu";

        $jeu = new \Project\Models\JeuManager();
        $getJeuAdmin = $jeu->getJeuAdmin($id);
       
        require'app/views/Back/gestionjeu.php';
    }

    //redirige vers la page listejeux ou on applique la fonction getJeux() de JeuManager
    function jeuxListe(){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-liste jeux";

        $jeux = new \Project\Models\JeuManager();
        $allJeux = $jeux->getJeux();

        require'app/views/Back/listeJeux.php';
    }

    //redirige vers l'action jeuxListe ou on applique la fonction deleteJeux($id) de JeuManager
    function deleteJeu($id){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-liste jeux";

        $jeu = new \Project\Models\JeuManager();
        $deleteJeux = $jeu->deleteJeux($id);
        $action = "jeuxListe";
        $message = "Votre jeu a bien été supprimé !";
        require 'app/views/Back/message.php';
    }

    //redirige vers la page createJeu
    function createJeu(){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-créer jeu";

       
        require'app/views/Back/createJeu.php';
    }

    //redirige vers l'action jeuxListe ou on applique la fonction newJeu() de JeuManager
    function newJeu($newTitle,$newContent,$newImage,$newVideojeu,$newCategorie,$newAvis,$newNote){
        $jeu = new \Project\Models\JeuManager();
        $newJeu = $jeu->newJeu($newTitle,$newContent,$newImage,$newVideojeu,$newCategorie,$newAvis,$newNote);

        $action = "jeuxListe";
        $message = "Votre jeu a bien été créé !";
        require 'app/views/Back/message.php';
    }

    
    //redirige vers la page jeu ou on applique la fonction getJeuCategorieName($id) de CategorieManager  et la fonction getJeu($id) de JeuManager
    function editionJeu($id){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-jeu";

        $categorie = new \Project\Models\CategorieManager();
        $getCategorie = $categorie->getJeuCategorie($id);

        $jeu = new \Project\Models\JeuManager();
        $getJeu = $jeu->getJeuAdmin($id);

        require'app/views/Back/jeu.php';
    }

    //redirige vers l'action jeuxListe ou on applique la fonction updateJeu() de JeuManager
    function updateJeu($id,$updatetitle,$updatecontent,$updatecategorie,$updateimage,$updatevideojeu,$updateAvis,$updateNote){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-liste jeux";

        $jeu = new \Project\Models\JeuManager();
        $updateJeu = $jeu->updateJeu($id,$updatetitle,$updatecontent,$updatecategorie,$updateimage,$updatevideojeu,$updateAvis,$updateNote);
        
        
        $action = "jeuxListe";
        $message = "Votre jeu a bien été mis à jour !";
        require 'app/views/Back/message.php';
        
        
    }
    //recupere tous les commentaires sur le jeu dont l'id=$id_jeu et le nom du jeu
    function getAllcommentaires($id_jeu){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-commentaires";

        $name =new \Project\Models\JeuManager();
        $getJeuCategorieName = $name->getJeuName($id_jeu);
        $commentaire = new \Project\Models\CommentaireManager();
        $getAllcommentaires = $commentaire->getAllcommentaires($id_jeu);

        require'app/views/Back/commentaires.php';
    }
    //redirige vers l'action  ou on applique la fonction deleteJeux($id) de JeuManager
    function deletecommentaire($id){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-tableau de bord";

        $jeu = new \Project\Models\CommentaireManager();
        $deletecommentaire = $jeu->deletecommentaire($id);
       
        
        $action = "tdbAdmin";
        $message = "Le commentaire a bien été suprimé !";
        require 'app/views/Back/message.php';
    }


//gestion du top--------------------------------------------------------------------------------

    //redirige vers la page image ou on applique la fonction getImages() de ImageManager
    function top(){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-top";

        $jeu = new \Project\Models\JeuManager();
        $getJeux = $jeu->getJeuxForTop();

        $top = new \Project\Models\TopManager();
        $tops = $top->getJeuFromTop();

        require'app/views/Back/top.php';
    }
    function editTop($update,$id){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-top";


        $top = new \Project\Models\TopManager();
        $editTop = $top->updateTop($update,$id);

        
        $action = "top";
        $message = "Votre top a bien été mis à jour !";
        require 'app/views/Back/message.php';
    }
    
    
    
  

//gestion des images--------------------------------------------------------------------------------

    //redirige vers la page gestionImage
    function gestionImage(){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-image";


        require'app/views/Back/gestionImage.php';
    }
    //redirige vers la page imagedelete
    function imagedelete(){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-image";


        require'app/views/Back/imagedelete.php';
    }
    //supprime l'image
    function deleteImage($imageToDelete){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-image";

        
        $pathDelete = "app/public/Front/images/";
        $ext = '.jpg';
        $toDelete = ($pathDelete.$imageToDelete.$ext);
        unlink($toDelete);
        $action = "gestionImage";
        $message = "Votre image a bien été supprimée !";
        require 'app/views/Back/message.php';
    }
    
    //redirige vers la page creatimage
    function image(){     
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-image";


        require'app/views/Back/creatimage.php';
    }
    


    // ajout d'une image dans le repertoire d'images front et permet de verifier que l'image envoyée est au bon format et a la bonne taille
    function creatImage(){       
          
        $meta_robots = "index,follow";

        $meta_title = "Blog-ludik-admin-image";

        try{   
            $target_dir = "app/public/Front/images/"; //spécifie le répertoire où le fichier va être placé
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);// spécifie le chemin du fichier à télécharger
            $uploadOk = 1; // n'est pas encore utilisé (sera utilisé plus tard)
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); //contient l'extension du fichier (en minuscules)
            // on vérifie que le fichier image est une image réelle
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    // On verifie la taille du fichier
                    if ($_FILES["fileToUpload"]["size"] > 500000) {
                        throw new \Exception("Désolé, votre fichier est trop volumineux. ");
                        $uploadOk = 0;
                    }
                    // on authorize que les fichiers jpg
                    if ($imageFileType != "jpg" ) {
                            throw new \Exception( "Seuls les formats JPG sont authorisés. ");
                        $uploadOk = 0;
                    }
                    // on verifie que le fichier a bien été téléchargé
                    if ($uploadOk == 0) {
                        throw new \Exception( "Désolé, votre fichier n'a pu être téléchargé.");
                        // si c'est bon on télécharge l'image
                    } else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                           
                            
                            header('Location: indexAdmin.php?action=gestionImage');
                        } else {
                            throw new \Exception("Désolé, une erreur est survenue dans l'envoi de votre fichier. ");
                        }
                    }
                } else {
                    throw new \Exception( "Ce fichier n'est pas une image. ");
                    $uploadOk = 0;
                }
            }

        }catch(\Exception $e){
            $errorMessage = $e->getMessage() ;
            require'app/views/Back/error.php';
        }
    }

    
//pour aller vers la page erreur-----------------------------------------------------
function error($errorMessage){
    $meta_description = "Blog-ludik erreur";

    $meta_robots = "noindex,nofollow";

    $meta_title = "Blog-ludik-admin-erreur ";

    require'app/views/Back/error.php';
}


}



