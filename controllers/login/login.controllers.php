<?php
 session_start();
require 'models/login.model.php';

function validate_email(string $email)
{
    return ! filter_var( $email,FILTER_VALIDATE_EMAIL);
}

function validate_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

$password_error = '';
$email_error = '';
$massge_error = '';
$task_complete = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = $_POST['email'] ? $_POST['email'] : '';
    $passwordInput = $_POST['password'] ? $_POST['password'] : '';
    
    if (empty($passwordInput))
    {
        $password_error = "password required";
    }
    if (empty($email))
    {
        $email_error = 'Email is required';
    }
    else
    {
        $email_validate = validate_email($email);
         if ($email_validate)
         {
            $email_error = "Email required '@";
         }
        else{
            $emailInside= getIdUser($email);
            $nameInside= getIdUser($email);
            if (empty($emailInside))
            {
                $emailInside = '';
            }
            else{
                $emailInside = $emailInside= getIdUser($email)['email'];
            }
                // if(isset($_POST["login"]))
                // { 
                //     $_SESSION["email"]= $emailInside;
                // }
            if ($email == $emailInside )
            {
                
                $passwordwordInput  = $_POST['password'];
                $db_password = user_password($email)['password']; // From Database
        
                if(password_verify($passwordwordInput , $db_password)) {
                    $_SESSION['email'] = $emailInside;
                    header('location: /');
                    $_SESSION['login'] = true;
                } 
                else{
                    $massge_error = "Email or password incorrect "; 
                }

            }
            else 
            {
                $massge_error = "Email or password incorrect "; 
                $passwordword_error = " ";
            }
        }
             
    }
    
}
require 'views/login/login.view.php'; 
    
