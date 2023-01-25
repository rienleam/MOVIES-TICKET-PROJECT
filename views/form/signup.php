<?php 
require("../partials/header.php");
require("../partials/nav.php");
?>
<form>
    <h1 class="mb-4">Create New Account</h1>
    <div class="username">
        <div class="firstname">
            <label class="mt-2" for="firstname">First Name</label>
            <input type="text" name="firstname" placeholder="Enter First name" required>
        </div>
        <div class="lastname">
            <label class="mt-2" for="lastname">Last Name</label>
            <input type="text" name="lastname" placeholder="Enter Last name" required>
        </div>
    </div>
    <label class="mt-2" for="phone">Phone Number</label>
    <input type="number" name="phone" placeholder="Enter your phone number" required>
    <label class="mt-2" for="email">Email</label>
    <input type="email" name="email" placeholder="Enter your email" required>
    <label class="mt-2" for="password">Password</label>
    <input type="password" name="password" placeholder="Enter your password" required>
    <label class="mt-2" for="password1">Comfrm Password</label>
    <input type="password" name="password1" placeholder="Enter your password again to comfirm" required>

    <button id="login" type="submit">Sign up</button>

    <p id="ask">Have an account? <a href="login.php"> Log In</a></p>
    
</form>

<!-- <div class="picture">
    <img src="../images/signup.png">
</div> -->