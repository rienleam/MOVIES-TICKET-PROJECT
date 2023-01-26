<?php
 require '../partials/header.php';
 require '../partials/nav.php';
 require '../../controllers/pages/register.controllers.php';
if($task_complete === 6)
{
    $action = '../../index,php';
}
else
{
    $action = "#";
}
?>
<link rel="stylesheet" href="../css/style.register.view.css">
<form action= "<?php $action ?>"  method="post">
        <h1 class="mb-4">Create New Account</h1>
        <div class="username">
            <div class="firstname">
                <label class="mt-2" for="firstname">First Name</label>
				<small class="form-text text-danger"> <?php echo $firstname_error?></small>
                <input type="text" name="firstname" placeholder="Enter First name">
            </div>
            <div class="lastname">
                <label class="mt-2" for="lastname">Last Name</label>
				<small class="form-text text-danger"> <?php echo $lastname_error; ?></small>
                <input type="text" name="lastname" placeholder="Enter Last name">
            </div>
        </div>
        <label class="mt-2" for="phone">Phone Number</label>
		<small class="form-text text-danger"> <?= $phone_error; ?></small>
        <input type="number" name="phone" placeholder="Enter your phone number">
        <label class="mt-2" for="email">Email</label>
		<small class="form-text text-danger"> <?php echo $email_error; ?></small>
        <input type="text" name="email" placeholder="Enter your email">
        <label class="mt-2" for="password">Password</label>
		<small class="form-text text-danger"> <?php echo $password_error; ?></small>
        <input type="password" name="password" placeholder="Enter your password">
        <label class="mt-2" for="password1">Comfrm Password</label>
		<small class="form-text text-danger"> <?php echo $password_comfrm_error; ?></small>
        <input type="password" name="password_comfrm" placeholder="Enter your password again to comfirm">


        <button id="login" type="submit" name = 'submit'>Sign up</button>

        <p>Have an account? <a href="../login/login.html"> Log In</a></p>
        
    </form>

<?php
    require '../partials/footer.php';