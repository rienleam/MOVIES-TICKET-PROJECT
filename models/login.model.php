<?php
require 'databases/database.php';

function user_login($email, $password)
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE email = :email AND password = :password ;");
    $statement->execute([
        ':email'=>$email,
        ':password'=>$password
    ]);
    return ($statement->rowCount()==1);
}

function user_password($email)
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE email = :email");
    $statement->execute([
        ':email'=>$email
    ]);
    $item = $statement->fetch();
    return $item;
}

function getIdUser($email){
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE email = :email;");
    $statement->execute([
        ':email' => $email
    ]);
    if($statement->rowCount()>0)
    {
        $item = $statement->fetch();
        return $item;
    }
    return null;
}

function getAdminEmail($email){
    global $connection;
    $statement = $connection->prepare("SELECT * FROM admins WHERE email = :email;");
    $statement->execute([
        ':email' => $email
    ]);
    if($statement->rowCount()>0)
    {
        $item = $statement->fetch();
        return $item;
    }
    return null;
}

function getAdminPassword($email)
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM admins WHERE email = :email");
    $statement->execute([
        ':email'=>$email
    ]);
    $item = $statement->fetch();
    return $item;
}

function getAdminId($email){
    global $connection;
    $statement = $connection->prepare("SELECT * FROM admins WHERE email = :email;");
    $statement->execute([
        ':email' => $email
    ]);
    if($statement->rowCount()>0)
    {
        $item = $statement->fetch();
        return $item;
    }
    return null;
}







function getDataFromDB($query,$stmt,$connection,$email,$password)
{
    $query = "SELECT * FROM users";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $stmt->bindColumn('email', $email);
    $stmt->bindColumn('password', $password);
}