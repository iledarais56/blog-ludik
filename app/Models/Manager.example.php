<?php
namespace Project\Models;

class Manager{

    

    //connection a la base de données
    protected function bdConnect(){
        try{
            $bdd = new \PDO('mysql:host=localhost;dbname=yourdbname;charset=utf8', 'yourusername','yourpassword');
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