<?php
function deleteDataInDatabase($show_id){
    global $connection;
    $sql = "DELETE  FROM list_shows where show_id = :show_id";
    $stmt = $connection->prepare($sql);
    $stmt->execute([
        ':show_id'=>$show_id
    ]);
}

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