<?php
namespace Project\Models;

class JeuManager extends Manager{

 //requetes liées aux jeux
    
    //affiche tous les jeux par id decroissante
    public function getJeux(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT `id`, `title`, `categorie`, `avis`, `note`, `content`, `img`, `videojeu`FROM jeux ORDER BY id DESC');
        return $req;
    }
    public function getJeuxForTop(){
        $bdd = $this->bdConnect();
        $req = $bdd->query('SELECT id AS id_jeu,title AS titreJeu FROM jeux ');
        return $req;
    }

    //supprime le jeu a l'id=$id
    public function deleteJeux($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('DELETE FROM jeux WHERE id=?');
        $req->execute(array($id));
    }

    //affiche les jeux ont la categorie =$id
    public function getJeu($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT `id`, `title`, `categorie`, `avis`, `note`, `content`, `img`, `videojeu`FROM jeux WHERE categorie=?');
        $req->execute(array($id));
        return $req;
    }

    //affiche le jeu a l'id =$id
    public function getJeuAdmin($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT `id`, `title`, `categorie`, `avis`, `note`, `content`, `img`, `videojeu`FROM jeux WHERE id=?');
        $req->execute(array($id));
        return $req;
    }

    //affiche le jeu a l'id =$id et a la categorie =$categorie
    public function getJeuFiche($id,$categorie){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT `id`, `title`, `categorie`, `avis`, `note`, `content`, `img`, `videojeu`FROM jeux WHERE id=? AND categorie=?');
        $req->execute(array($id,$categorie));
        return $req;
    }

    //met a jour les données du jeu
    public function updateJeu($id,$updatetitle,$updatecontent,$updatecategorie,$updateimage,$updatevideojeu,$updateAvis,$updateNote){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('UPDATE jeux SET title= :title, content= :content, categorie= :categorie, img= :img, videojeu= :videojeu, avis= :avis, note= :note WHERE id=:id');
        $req->execute([
            'id'=>$id,
            'title'=>$updatetitle,
            'content'=>$updatecontent,
            'categorie'=>$updatecategorie,
            'img'=>$updateimage,
            'videojeu'=>$updatevideojeu,
            'avis'=>$updateAvis,
            'note'=>$updateNote
        ]);
    }

    //injecte un nouveau jeu dans la table jeux
    public function newJeu($newTitle,$newContent,$newImage,$newVideojeu,$newCategorie,$newAvis,$newNote){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('INSERT INTO jeux(title,content,img,videojeu,categorie,avis,note)VALUE(?,?,?,?,?,?,?)');
        $req->execute(array($newTitle,$newContent,$newImage,$newVideojeu,$newCategorie,$newAvis,$newNote));
        return $req;    
        
    }

    //affiche le nom du jeu a l'id =$id
    public function getJeuName($id){
        $bdd = $this->bdConnect();
        $req = $bdd->prepare('SELECT title FROM jeux WHERE id=?');
        $req->execute(array($id));
        return $req;
    }
    
}