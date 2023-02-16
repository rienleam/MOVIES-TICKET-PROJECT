<?php


$number_ticket_error = '';
$payment_error = '';

$task_complete = 0;

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
    if ($task_complete == 2)
    {
        header("Location: /printable");
    }
}
require('views/post/booking.view.php');