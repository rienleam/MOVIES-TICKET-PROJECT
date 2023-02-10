<?php 
$message = '';
if (isset($_POST['uname']) && isset($_POST['password'])){
    function validate($data){
        $data  = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = $_POST['uname'];
    $pass =$_POST['password'];

    if (empty($uname)){
        // header("Location: index.php?error = User Name is required ");
        $message = 'username required';
        exit();
    }else if(empty($pass)){
        // header("Location: index.php?error = Password is required");
        exit();
    }
}else{
    // header("Location: index.php");
    exit();
}
// require 'index.php';
?>