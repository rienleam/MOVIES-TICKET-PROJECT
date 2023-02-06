<?php


$image_error = '';
$theatername_error = '';
$description_error = '';
$cost_error = '';
$date_error = '';
$time_error = ''; 
$duration_error = '';

$task_complete = 0;


   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
        $image = $_POST['theater-image'] ? $_POST['theater-image'] : '';
        $theatername = $_POST['theater-name'] ? $_POST['theater-name'] : '';
        $description = $_POST['description'] ? $_POST['description'] : '';
        $cost = $_POST['cost'] ? $_POST['cost'] : '';
        $date = $_POST['date'] ? $_POST['date'] : '';
        $time = $_POST['time'] ? $_POST['time'] : '';
        $duration = $_POST['duration'] ? $_POST['duration'] : '';
      
        if (empty($image)){
            $image_error = "Theater image required";
        }
        else{
            $task_complete += 1;
        }
        if (empty($theatername)){
            $theatername_error = "Theater name required";
        }
        else{
            $task_complete += 1;
        }
        if (empty($description)){
            $description_error = "Description required";
        }
        else{
            $task_complete +=1;   
        }
        if (empty($cost)){
            $cost_error = "Cost required";
        }
        else{
            $task_complete +=1;   
        }
        if (empty($date)){
            $date_error = "Date required";
        }
        else{
            $task_complete += 1;
        }
        if (empty($time)){
            $time_error = "Time required";
        }
        else {
            $task_complete += 1;
        }
        if (empty($duration)){
            $duration_error = "Duration required";
        }
        else{
            $task_complete += 1;
        }
        if ($task_complete == 7)
        {
            header("Location: /");
        }
    }
require '../../views/seller/addshow.view.php'; 