<?php
// session_start();
require "views/partials/header.php";


$number_ticket_error = '';
$payment_error = '';
$task_complete = 0;
$isbutton =2;
if (isset($_POST["button"]))
    {
        $isbutton = $_POST["button"];
    }

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $number_ticket = $_POST["ticket-number"] ? $_POST["ticket-number"] : '';
    $payment = (isset($_POST["choose-payment"])) ? (isset($_POST["choose-payment"])) : '';

    if (empty($number_ticket))
    {
        $number_ticket_error = "Number tickets required";
    }
    else if (!empty($number_ticket))
    {
        $task_complete +=1;   
    }
    if (empty($payment))
    {
        $payment_error = "Payment required";
    }
    else if (!empty($payment))
    {
        $task_complete +=1;   
    }
    else if ($isbutton == 1)
    {
        if (empty($_SESSION['email']))
        {
            echo "<script>alert('Please Login')</script>";
        }
    }
    if ($task_complete == 2)
    {
        header("Location: /printable");
        
            
        }      
    }



require('views/post/booking.view.php');