<?php
session_start();
require_once 'config.php';
  if(isset($_POST["send"])) {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message =htmlspecialchars($_POST["message"]) ;
    $date=date("F j, Y, g:i a"); 
    $insert = $bdd->prepare('INSERT INTO messagerie(expediteur,subject,email,message,date ) VALUES(:expediteur,:subject,:email, :message,:date)');
    $insert->execute(array(
         'expediteur' => $name,
         'subject' => $subject,
         'email' =>  $email,
         'message' => $message,
         'date' => $date

                                  
         ));
         header('Location:acceuilClient.php?reg_err=success');die();
    
   
  }
?>