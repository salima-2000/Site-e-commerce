<?php
session_start();
require_once 'config.php';
if(isset($_POST['email']) && isset($_POST['password']))
    { 
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT id,client_name, email, password FROM clients WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        $_SESSION['id']=$data['id'];
        
        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
               
                if(password_verify($password, $data['password']))
                {
                   
                  
                        header('Location:profile.php?id='.$_SESSION['id']);die();
                    
                   
                     
                    
                }else{ header('Location:formConn.php?login_err=password'); die(); }
            }else{ header('Location:formConn.php?login_err=email'); die(); }
        } else{ header('Location:formConn.php?login_err=already'); die(); }
        }