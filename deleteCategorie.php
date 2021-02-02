<?php
 session_start();
 require_once 'config.php';
   if(isset($_POST['supprimer'])){
       $categorie=htmlspecialchars($_POST['nom']);
       $veri=$bdd->prepare("select * from category where name=?");
       $veri->execute(array($categorie));
       $row=$veri->rowCount();
       if($row==0){
        header('Location:supprimerCategorie.php?succes=notExist');die();
       }else{
        $req=$bdd->prepare("delete from category where name=?");
        $req->execute(array($categorie));

        header('Location:supprimerCategorie.php?succes=deleted');die();
       }
       
   }
   if(isset($_POST['annuler'])){
    header('Location:acceuilAdmin.php');die();


   }



?>