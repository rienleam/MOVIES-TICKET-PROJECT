<?php

require 'models/register.model.php';
function validate_username(string $username) : bool
{
   return !ctype_alnum( $username);
}

function validate_email(string $email) : bool
{
   return !filter_var( $email,FILTER_VALIDATE_EMAIL);
}

$firstname_error = '';
$lastname_error = '';
$email_error = '';
$phone_error = '';
$password_error = '';
$password_comfrm_error = ''; 

$task_complete = 0;


   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
      $firstname = $_POST['firstname'] ? $_POST['firstname'] : '';
      $lastname = $_POST['lastname'] ? $_POST['lastname'] : '';
      $email = $_POST['email'] ? $_POST['email'] : '';
      $phone = $_POST['phone'] ? $_POST['phone'] : '';
      $password = $_POST['password'] ? $_POST['password'] : '';
      $password_comfrm = $_POST['password_comfrm'] ? $_POST['password_comfrm'] : '';
      
      if (empty($firstname))
      {
         $firstname_error = "First name required";
      }
      else
      {
         $fristname_validate = validate_username($firstname);
         if ($fristname_validate)
         {
            $firstname_error = "First name required only letters and numbers";
         } else 
         {
            $task_complete += 1;
      
         }
      }
      if (empty($lastname))
      {
         $lastname_error = "Last name required";
      }
      else
      {
         $lastname_validate = validate_username($lastname);
         if ($lastname_validate)
         {
            $lastname_error = "Last name required only letters and numbers";
         }
         else 
         {
            $task_complete += 1;
      
         }
      }
      if (empty($phone))
      {
         $phone_error = "Phone number required";
      }
      else if (!empty($phone))
      {
         $task_complete +=1;   
      }
      if (empty($password))
      {
         $password_error = "Password required";
      }
      else
      {
         if(strlen(($password))<8)
         {
            $password_error = "Password should be at least 8 characters";
         }
         else 
         {
            $task_complete += 1;
          
         }
      }
      
      if (empty($password_comfrm))
      {
         $password_comfrm_error = "Password comfrm required";
      }
      else 
      {
         if ($password === $password_comfrm)
         {
            $task_complete += 1;
          
         }
         else {
            $password_comfrm_error = "password comfrm is wrong";
         }
         
      }
      if (empty($email))
      {
         $email_error = "Email required";
      }
      else
      {
         $email_validate = validate_email($email);
         if ($email_validate)
         {
            $email_error = "Email required '@";
         }
         else 
         {
            $task_complete += 1;
            $getEmailInDB =  getIdUser($email);
            if ($getEmailInDB) 
            {
               $email_error = "Your Email already have account ";
            }
            else{
               $task_complete += 1;
            }
         }
      }
      if ($task_complete == 7)
      {
         inputDataInToDB($firstname, $lastname, $email, $password, $phone);
         header("Location: /");
      }
   }

require 'views/register/register.view.php'; 