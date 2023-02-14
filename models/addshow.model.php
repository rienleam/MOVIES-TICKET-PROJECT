<?php
function inputShowInToDB($theatername, $date, $cost,$description,$time, $duration, $trailer, $new_img_name)
{
    global $connection;
    $sql = "INSERT INTO list_shows(show_name, date, cost, description, time, duration, trailer, image) 
    VALUES(?,?,?,?,?,?,?,?)";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$theatername, $date, $cost,$description,$time, $duration, $trailer, $new_img_name]);
    
}