<?php 
session_start();
if (isset($_SESSION['email']) and !empty($_SESSION['email']))
{
    unset($_SESSION["email"]);
    header("Location: /");
}else{
    header("Location: /");
}