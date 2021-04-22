<?php
namespace Project\Models;

class Manager{

    

    //connection a la base de données
    protected function bdConnect(){
        try{
            $bdd = new \PDO('mysql:host=localhost;dbname=dywx7694_blog-ludik;charset=utf8', 'dywx7694_iledarais','gGD4hb6auedJx6xniH');
            if (isset($bdd)){
               return $bdd; 
            }
            else{
                throw new \Exception("Vous n'êtes pas connecté à la base de données");
            }
        }
        catch(\Exception $e){
            $errorMessage = $e->getMessage() ;
            require'app/views/Front/error.php';
        }
    }

   
}