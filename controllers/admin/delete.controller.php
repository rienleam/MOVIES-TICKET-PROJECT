<?php
    $isbutton = 2;
    if (isset($_POST["button"]))
    {
        $isbutton = $_POST["button"];
    }
require "views/seller/delete.view.php";