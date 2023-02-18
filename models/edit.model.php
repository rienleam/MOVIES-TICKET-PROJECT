<?php
function getMovieData(int $show_id) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM list_shows WHERE show_id = :show_id");
    $statement->execute([
        ':show_id'=>$show_id
    ]);
    $item = $statement->fetch();
    return $item;
}

function editDataInDB($theatername, $date, $cost,$description,$time, $duration, $trailer, $new_img_name, $show_id)
{
    global $connection;
    $sql = "UPDATE list_shows SET show_name = :theatername, date = :date, cost = :cost, description=:description, time=:time, duration=:duration, trailer= :trailer, image = :new_img_name WHERE show_id = $show_id";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':show_id',$show_id);
    $stmt->execute([':theatername'=>$theatername,
        ':date'=>$date,
        ':cost'=>$cost,
        ':description'=>$description,
        ':time'=>$time,
        ':duration'=>$duration,
        ':trailer'=>$trailer,
        ':new_img_name'=>$new_img_name,
        
    ]);
    
}
