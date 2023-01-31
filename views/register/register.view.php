<?php
session_start();
 require 'views/partials/header.php';
 require 'views/partials/nav.php';
?>
<link rel="stylesheet" href="views/css/style.register.view.css">
<form action= "<?php $action ?>"  method="post">
        <h1 class="mb-4">Create New Account</h1>
        <div class="username">
            <div class="firstname">
                <label class="mt-2" for="firstname">First Name</label>
                <input type="text" name="firstname" placeholder="Enter First name">
                <small class="form-text text-danger"> <?php echo $firstname_error?></small>
            </div>
            <div class="lastname">
                <label class="mt-2" for="lastname">Last Name</label>
                <input type="text" name="lastname" placeholder="Enter Last name">
                <small class="form-text text-danger"> <?php echo $lastname_error; ?></small>
            </div>
        </div>
        <label class="mt-2" for="phone">Phone Number</label>
        <input type="number" name="phone" placeholder="Enter your phone number">
        <small class="form-text text-danger"> <?= $phone_error; ?></small>

        <label class="mt-2" for="email">Email</label>
        <input type="text" name="email" placeholder="Enter your email">
        <small class="form-text text-danger"> <?php echo $email_error; ?></small>

        <label class="mt-2" for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your password">
        <small class="form-text text-danger"> <?php echo $password_error; ?></small>

        <label class="mt-2" for="password_comfrm">Comfrm Password</label>
        <input type="password" name="password_comfrm" placeholder="Enter your password again to comfirm">
        <small class="form-text text-danger"> <?php echo $password_comfrm_error; ?></small>

        <button id="signup" type="submit" name = 'submit'>Sign up</button>

        <p id="ask" class="mt-2">Have an account? <a href="/login"> Log In</a></p>
        
    </form>

<?php
    require 'views/partials/footer.php';