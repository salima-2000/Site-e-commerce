
<?php 

require_once 'config.php';

 
if(isset($_POST['valider'])){
  
if(isset($_POST['name'])&&isset($_POST['mail'])&&isset($_POST['password'])&&isset($_POST['verification']))
  {
  

    $name=htmlspecialchars($_POST['name']);
    $mail=htmlspecialchars($_POST['mail']);
    $password=htmlspecialchars($_POST['password']);
    $retypePassword=htmlspecialchars($_POST['verification']);   
    $check = $bdd->prepare('SELECT  email FROM clients WHERE email = ?');
    $check->execute(array($mail));
    $data = $check->fetch();
    $row = $check->rowCount();
        if($row == 0){ 
            
            if(strlen($name) <= 200){
                if(strlen($mail) <= 50){
                    if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
                        if($password === $retypePassword){
                             
                            $password = password_hash($password,PASSWORD_DEFAULT);
                            
                            
                             if(!isset($_POST['phone'])){
                            
                              
                              
                              
                              $insert = $bdd->prepare('INSERT INTO clients(client_name, email, password) VALUES(:client_name, :email, :password)');
                              $insert->execute(array(
                                  'client_name' => $name,
                                  'email' => $mail,
                                  'password' => $password
                                  
                              ));
                            header('Location:formInscr.php?reg_err=success');die();
                             }else{
                                $phone=htmlspecialchars($_POST['phone']);
                                $insert = $bdd->prepare('INSERT INTO clients(client_name, email,phone_number, password) VALUES(:client_name, :email, :phone_number,:password)');
                                $insert->execute(array(
                                    'client_name' => $name,
                                    'email' => $mail,
                                    'phone_number'=>$phone,
                                    'password' => $password
                                    
                                )); header('Location:formInscr.php?reg_err=success');die();
                             
                             }
                            
                            
                           
                            
                        }else{ header('Location:formInscr.php?reg_err=password'); die();}
                    }else{ header('Location: formInscr.php?reg_err=email'); die();}
                }else{ header('Location: formInscr.php?reg_err=mail_length'); die();}
            }else{ header('Location: formInscr.php?reg_err=name_length'); die();}
        }else{ header('Location: formInscr.php?reg_err=already'); die();}
    }

  } 
    ?>  
