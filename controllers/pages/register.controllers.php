<?php

function validate_username(string $username)
{
    if (!ctype_alnum( $username))
    {
      return true;
    }

}

function validate_email(string $email)
{
    if (!filter_var( $email,FILTER_VALIDATE_EMAIL)){
       return true;
    }
}

function validate_number(int $phone){
   $valid_phone_number = filter_var($phone,FILTER_SANITIZE_NUMBER_INT);
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
         $uppercase    = preg_match('@[A-Z]@', $password);
         $lowercase    = preg_match('@[a-z]@', $password);
         $number       = preg_match('@[0-9]@', $password);
         $specialchars = preg_match('@[^\w]@', $password);
         
         if (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) < 8) 
         {
           $password_error = 'Password is not Strong';
           
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
           
         }
      }
      if ($task_complete === 6)
      {
         require '../../connection.php';
         $password = password_hash($password, PASSWORD_DEFAULT);
         $sql = "INSERT INTO users(First_name, Last_name, email, password, phone_number) 
         VALUES(?,?,?,?,?)";
       $stmt = $connection->prepare($sql);
       $stmt->execute([$firstname, $lastname, $email, $password, $phone]);
         
         header("Location:../../index.php");
      }


   }