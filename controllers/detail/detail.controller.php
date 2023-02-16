<?php
require "views/partials/header.php";
session_start();
function getDetailMovies(int $show_id) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM list_shows WHERE show_id = :show_id");
    $statement->execute([
        ':show_id'=>$show_id
    ]);
    $item = $statement->fetch();
    return $item;
}
$getID = ($_GET['show_id']);
$_SESSION['movies'] = getDetailMovies($getID);

require('views/detail/detail.view.php');
