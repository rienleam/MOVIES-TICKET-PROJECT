<?php 
require '../partials/header.php';
require "../../controllers/booking/booking.controller.php";
?>
<div class="payment d-flex justify-content-start align-items-start" style="width: 100%;">
    <form action="<?php $action ?>" method="post" class="buy-info bg-white d-flex flex-column p-5" style="width: 40%; height:100%">
        <h2 class="text-warning align-self-center mb-3"><b>Movie Ticket Booking</b></h2>
        <div class="movie-title d-flex justify-content-between">
            <p class="p-0 m-0">Theater name:</p>
            <p class="p-0 m-0"><b>Monster Hunter</b></p>
        </div>
        <div class="movie-date d-flex justify-content-between">
            <p class="p-0 m-0">Show date:</p>
            <p class="p-0 m-0"><b>2023-02-27</b> </p>
        </div>
        <div class="movie-time d-flex justify-content-between">
            <p class="p-0 m-0">Show time:</p>
            <p class="p-0 m-0"><b>8:00AM - 11:30AM</b></p>
        </div>
        <h3 class="align-self-start"><b>Cost</b></h3>
        <div class="seat-price d-flex justify-content-between">
            <p class="p-0 m-0">Price/seat:</p>
            <p class="p-0 m-0">$30</p>
        </div>
        <div class="seat-number d-flex justify-content-between">
            <p class="p-0 m-0">Number of tickets:</p>
            <input type="number" name="ticket-number" style="width:20%;">
        </div>
        <small class="form-text text-danger align-self-end"><?php echo $number_ticket_error; ?></small>
        <hr class="p-0 m-0 mt-2 mb-2">
        <div class="total-price d-flex justify-content-between">
            <p class="p-0 m-0"><b>Total Price:</b></p>
            <p class="p-0 m-0"><b>$60</b></p>
        </div>
        <h3 class="align-self-start"><b>Your Payment</b></h3>
        <div class="payment-select d-flex justify-content-between">
            <p class="p-0 m-0">Choose payment:</p>
            <select name="choose-payment" id="choose-payment" class="p-2" style="width: 60%;">
                <option value="none" selected disabled>---------choose your card---------</option>
                <option value="aba">ABA</option>
                <option value="wing">WING</option>
                <option value="vattanac">VATTANAC</option>
                <option value="acleda">ACLEDA</option>
            </select>
        </div>
        <small class="form-text text-danger align-self-end"> <?php echo $payment_error; ?></small>
        <div class="user-pay d-flex justify-content-between mt-4">
            <button type="submit" name="submit" class="cancel-booking bg-warning">Cancel</button>
            <button type="submit" name="submit" class="pay-now bg-warning">Pay now</button>
        </div>
    </form>
</div>