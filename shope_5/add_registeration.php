<?php
session_start();

$client_id=0;

require_once "config.php";
 
$username = $password = $confirm_password =$phone_number=$email= "";
$username_err = $password_err = $confirm_password_err = $phone_number_err=$email_err="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   
    if(empty(trim($_POST["nom"]) . " " . trim($_POST["prenom"]))){
        $username_err = "Please enter a username.";
    } else {

        $sql = "SELECT client_id FROM clients WHERE client_name = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
     
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = trim($_POST["nom"]) . " " . trim($_POST["prenom"]);
            
         
            if(mysqli_stmt_execute($stmt)){
           
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["nom"]) . " " . trim($_POST["prenom"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email.";
    } else {

        $sql = "SELECT client_id FROM clients WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
     
            mysqli_stmt_bind_param($stmt, "s", $param_email);
     
            $param_email = trim($_POST["email"]);

            if(mysqli_stmt_execute($stmt)){
              
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

    
            mysqli_stmt_close($stmt);
        }
    }
    

    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6  ){
        $password_err = "Password must have atleast 6 characters .";
    } else{
        $password = trim($_POST["password"]);
    }
    

    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    if(empty(trim($_POST["phone_number"]))){
        $phone_number_err = "Please enter your phone number.";     
    } elseif(strlen(trim($_POST["phone_number"])) != 10  ){
        $phone_number_err = "phone number must have  10 characters .";
    } else{
        $phone_number = trim($_POST["phone_number"]);
    }
   
    if(empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($phone_number_err)){
        

        $sql = "INSERT INTO clients (client_name,email,password,phone_number) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_email, $param_password,$param_phone_number);
            
            $param_username = $username;
            $param_email = $email;
            $param_phone_number=$phone_number;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            
         
            if(mysqli_stmt_execute($stmt)){
               
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
  
}
?>
 