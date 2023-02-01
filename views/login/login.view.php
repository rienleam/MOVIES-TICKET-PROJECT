<?php 

 require 'views/partials/header.php';
//  require 'views/partials/nav.php';

?>
<link rel="stylesheet" href="views/css/style.register.view.css">

    <form action="#" method="post" class ='form'>
     	<h1>LOGIN</h1>
         <small class="form-text text-danger small"> <?php echo $massge_error?></small>
        
     	<label>Email</label>
         <small class="form-text text-danger"> <?php echo $email_error?></small>
     	<input type="text" name="email" placeholder="Email"?>

     	<label class="mt-2">Password</label>
         <small class="form-text text-danger"> <?php echo $password_error?></small>
     	<input type="password" name="password" placeholder="Password">

     	<button id="login" type="submit" class="btn btn-primary" name = 'submit'>Login</button>
        <p id="ask">Do have any Account <a href="/register"> Register Now</a></p>
     </form>

<?php
    //require 'views/partials/footer.php';