<?php


    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "php_project";

    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

    if (!$conn) {
       die("Connection to database failed!");
    }
?>