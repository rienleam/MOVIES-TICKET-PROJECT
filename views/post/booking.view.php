<?php 
session_start();
require 'views/partials/header.php';
// require "views/partials/nav.php";
?>

<div class="payment d-flex justify-content-start align-items-start" style="width: 100%; height:100vh;">
    <form action="<?php $action ?>" method="post" class="buy-info bg-white d-flex flex-column p-5" style="width: 40%;">
        <h2 class="text-warning align-self-center mb-3"><b>Movie Ticket Booking</b></h2>
        <div class="movie-title d-flex justify-content-between">
            <p class="p-0 m-0">Theater name:</p>
            <p class="p-0 m-0"><b><?=$_SESSION['movies']['show_name'];?></b></p>
        </div>
        <div class="movie-date d-flex justify-content-between">
            <p class="p-0 m-0">Show date:</p>
            <p class="p-0 m-0"><b><?=$_SESSION['movies']['date'];?></b> </p>
        </div>
        <div class="movie-time d-flex justify-content-between">
            <p class="p-0 m-0">Show time:</p>
            <p class="p-0 m-0"><b><?=$_SESSION['movies']['time'];?></b></p>
        </div>
        <h3 class="align-self-start"><b>Cost</b></h3>
        <div class="seat-price d-flex justify-content-between">
            <p class="p-0 m-0">Price/seat:</p>
            <p class="p-0 m-0">$<?=$_SESSION['movies']['cost'];?></p>
        </div>
        <div class="seat-number d-flex justify-content-between">
            <p class="p-0 m-0">Number of tickets:</p>
            <input type="number" name="ticket-number" style="width:20%;">
        </div>
        <small class="form-text text-danger align-self-end"><?php echo $number_ticket_error; ?></small>
        <hr class="p-0 m-0 mt-2 mb-2">
        <div class="total-price d-flex justify-content-between">
            <p class="p-0 m-0"><b>Total Price:</b></p>
            <p class="p-0 m-0"><b>$<?=$_SESSION['movies']['cost'];?></b></p>
        </div>
        <h3 class="align-self-start"><b>Your Payment</b></h3>
        <div class="payment-select d-flex justify-content-between">
            <p class="p-0 m-0">Choose payment:</p>
            <select name="choose-payment" id="choose-payment" class="p-2 bg-light" style="width: 60%;">
                <option value="none" selected disabled>---------choose your card---------</option>
                <option value="aba">ABA</option>
                <option value="wing">WING</option>
                <option value="vattanac">VATTANAC</option>
                <option value="acleda">ACLEDA</option>
            </select>
        </div>
        <small class="form-text text-danger align-self-end"> <?php echo $payment_error; ?></small>
        <div class="user-pay d-flex justify-content-between mt-4">
            <a href="/">
                <button type="button" name="submit" class="btn cancel-booking bg-warning">Cancel</button>
            </a>
            <a href="/printable">
                <button type="submit" name="button" value="1" class="btn pay-now bg-warning">Pay now</button>
            </a>
        </div>
    </form>
</div>