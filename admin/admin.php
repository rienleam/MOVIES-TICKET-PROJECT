<?php
require "login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method ="post" >
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?></p>;
        <?php } ?>  
        
        <label>User Name</label>
        <small><?php echo $message; ?></small>
        <input type="text" name="uname"placeholder ="User Name"><br>

        <label>User Password</label>
        <input type="password" name="password" placeholder ="password"><br>

        <button type ="submit">Login</button>
    </form>
</body>