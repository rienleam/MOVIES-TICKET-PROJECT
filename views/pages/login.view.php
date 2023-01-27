<?php
 require '../partials/header.php';
 require '../partials/nav.php';
 require '../../controllers/pages/login.controllers.php';
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
<!-- <form action= "<?php $action ?>"  method="post" class ='form'>
        <h1 class="mb-4">Login Account</h1>

        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

        <label class="mt-2" for="email">Email</label>
        <input type="text" name="email" placeholder="Enter your email">
        <small class="form-text text-danger"> <?php echo $email_error; ?></small>

        <label class="mt-2" for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your password">
        <small class="form-text text-danger"> <?php echo $password_error; ?></small>

        <button id="login" type="submit" name = 'submit'>Login</button>

        <p id="ask">Don't have an account? <a href="register.view.php"> Register</a></p>
        
    </form> -->

    <form action="#" method="post" class ='form'>
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="text" name="email" placeholder="Email"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" class="btn btn-primary">Login</button>
     </form>

<?php
    require '../partials/footer.php';