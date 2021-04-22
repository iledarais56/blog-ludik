<?php
namespace Project\Models;

class ImageManager extends Manager{
   
    public function getImages(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT * FROM images');
        return $req;
    }
    public function creatImage($title,$target_file){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('INSERT INTO images(title,img)VALUE(?,?)');
        $req->execute(array($title,$target_file));
        
        return $req;
    }
}