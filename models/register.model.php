<?php

function inputDataInToDB($firstname, $lastname, $email, $password, $phone)
{
    global $connection;
    $password = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO users(First_name, Last_name, email, password, phone_number) 
    VALUES(?,?,?,?,?)";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$firstname, $lastname, $email, $password, $phone]);
    
}
function getIdUser($email){
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE email = :email;");
    $statement->execute([
        ':email' => $email
    ]);
    return ($statement->rowCount() == 1);
}

