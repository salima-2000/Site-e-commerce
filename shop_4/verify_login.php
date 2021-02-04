<?php
session_start();

$client_id=0;

require_once "config.php";
 

$email = $password = "";
$email_err = $password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
 
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    

    if(empty($email_err) && empty($password_err)){
    
        $sql = "SELECT client_id, email, password FROM clients WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
      
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
           
            $param_email = $email;

            if(mysqli_stmt_execute($stmt)){
              
                mysqli_stmt_store_result($stmt);
          
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                   
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                         
                            $_SESSION["loggedin"] = true;
                            $_SESSION["client_id"] = $id;
                            $_SESSION["email"] = $email; 
                       
                            header("location: acceuil.php");
                        } else{
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    $email_err = "No account found with that username!";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later!";
            }

            mysqli_stmt_close($stmt);
        }
    }
  
}
?>

