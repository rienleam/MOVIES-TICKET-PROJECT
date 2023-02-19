<?php
require 'views/partials/header.php';
// echo "<script>alert('Your booking is success')</script>";
// session_start()
?>
<?php
require "views/partials/header.php";
require "views/partials/nav.php";

?>
<link rel="stylesheet" href="views/css/printable.css">
<main>
    <main class="ticket">
        <div class="header">
            <h1 class="title">MC Theatre</h1>
        </div>
        <div class="ticket-header">
            <div>
                <p>Customer Id: 11</p>
                <p>Date: 15-02/2023</p>
            </div>
        </div>
        <div class="ticket-body">
            <h3 class="movie-name">Movie Name: Star War</h3>
            <div class="ticket-body-row">
                <div>
                    <p><b>Name</b></p>
                    <p>Alone</p>
                    <p><b>Email</b></p>
                    <p>lunsocheat@gmail</p>
                    <p><b>Payment Date</b></p>
                    <p>15-02/2023</p>
                </div>
                <div>
                    <p><b>City</b></p>
                    <p>Kompong Thom</p>
                    <p><b>Phone</b></p>
                    <p>0969293520</p>
                    <p><b>Payment Amount</b></p>
                    <p>$ 3</p>
                </div>
            </div>
        </div>
        <div class="ticket-footer">
            <h3 class="footer-title">BOOKING DETAILS</h3>
            <div class="ticket-footer-row"> 
                <div class="row-top">
                    <p><b>Theater</b></p>
                    <p>No. 1</p>
                    <p><b>Date</b></p>
                    <p>20/2/2023</p>
                    <p><b>Time</b></p>
                    <p>15:00</p>

                </div>
                <div class="row-botton">
                    <p><b>Seats</b></p>
                    <p>H10</p>
                    <p><b>Total Seats</b></p>
                    <p>1</p>
                    <p><b>Total price</b></p>
                    <p>$3</p>
                </div>
            </div>
        </div>
    </main>
</main>
