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
            if ($email == "admin123@gmail.com")
            {
                $emailInside = getAdminId($email);
                if (empty($emailInside))
                {
                    $emailInside = '';
                    $massge_error = 'Email not found';
                }
                else 
                {
                    $emailInside = getAdminEmail($email)['email'];
                }
            }
            else
            {
                $emailInside= getIdUser($email);
                if (empty($emailInside))
                {
                    $emailInside = '';
                    $massge_error = 'Email not found';
                }
                else
                {
                    $emailInside=getIdUser($email)['email'];
                }
            }
            if ($email == "admin123@gmail.com")
            {
                // $emailInside = getAdminEmail($email)['email'];
                $db_password = getAdminPassword($email)['password'];
                $massge_error = 1;
                if(password_verify($passwordInput , $db_password)) {
                    $_SESSION['email'] = $emailInside;
                    header('location: /');
                    $_SESSION['login'] = true;
                    $massge_error = 'Email not found';
                } 
                else
                {
                    $massge_error = "Email or password incorrect "; 
                }
                          
            }     
            else
            {
    
                $emailInside=getIdUser($email)['email'];
                if ($email == $emailInside )
                {
                    $db_password = user_password($email)['password'];
                    if(password_verify($passwordInput , $db_password)) 
                    {
                        $_SESSION['email'] = $emailInside;
                        header('location: /');
                        $_SESSION['login'] = true;
                    } 
                    else
                    {
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
}
             
    

    

require 'views/login/login.view.php'; 
    
