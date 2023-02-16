<?php
    require "models/delete.model.php";
    $getID = ($_GET['show_id']);
    $movies =  getMovieData($getID);
    $show_id = $getID;
    $isbutton = 2;
    if (isset($_POST["button"]))
    {
        $isbutton = $_POST["button"];
    }
    if ($isbutton == 0)
    {
        header("Location: /movie");
    }
    if ($isbutton == 1)
    {
        deleteDataInDatabase($show_id);
        header("Location: /movie");
    }
require "views/seller/delete.view.php";