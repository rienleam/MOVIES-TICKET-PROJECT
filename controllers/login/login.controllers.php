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
        // echo $email . "<br>";
         if ($email_validate)
         {
            $email_error = "Email required '@";
         }
        else{
            $emailInput= getIdUser($email);
            if (empty($emailInput))
            {
                $emailInput = '';
            }
            else{
                $emailInput = $emailInput= getIdUser($email)['email'];
            }
            if ($email == $emailInput )
            {
                // $login = false;
                $passwordInput  = $_POST['password'];
                $db_password = user_password($email)['password']; // From Database
        
                if(password_verify($passwordInput , $db_password)) {
                    $_SESSION['email'] = $email;
                    header('location: /');
                    // $login = true;
                } 
                else{
                    $massge_error = "Email or password incorrect "; 
                }

            }
            else 
            {
                $massge_error = "Email or password incorrect "; 
                $password_error = " ";
            }
        }
             
    }
}
require 'views/login/login.view.php'; 
    
