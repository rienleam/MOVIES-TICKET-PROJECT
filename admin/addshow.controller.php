<?php
require "models/addshow.model.php";


$image_error = '';
$theatername_error = '';
$description_error = '';
$cost_error = '';
$date_error = '';
$time_error = ''; 
$duration_error = '';
$trailer_error = '';
$task_complete = 0;
$isbutton = 2;

if (isset($_POST["button"]))
    {
        $isbutton = $_POST["button"];
    }
if ($isbutton == 0)
{
    header("Location: /movie");
}
   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
        $theatername = $_POST['theater-name'] ? $_POST['theater-name'] : '';
        $description = $_POST['description'] ? $_POST['description'] : '';
        $cost = $_POST['cost'] ? $_POST['cost'] : '';
        $date = $_POST['date'] ? $_POST['date'] : '';
        $time = $_POST['time'] ? $_POST['time'] : '';
        $duration = $_POST['duration'] ? $_POST['duration'] : '';
        $trailer = $_POST['theater-trailer'] ? $_POST['theater-trailer'] : '';
        $image_name = $_FILES['theater-image']['name'];

       
        
        if (empty($image_name)){
            $image_error = "Theater image required";
        }
        else{
            $task_complete += 1;
            
        }
        if (empty( $trailer)){
            $trailer_error  = "Theater trailer required";
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
        if ($task_complete == 8)
        {
            require "databases/database.php";
            if (isset($_POST["button"]) == 1){
                $img_type = $_FILES['theater-image']['type'];
                $tmp_name = $_FILES['theater-image']['tmp_name'];
                $error = $_FILES['theater-image']['error'];
                
                
                if($error === 0){
                    $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
                    $img_ex_lower = strtolower($img_ex);
       
                   $allowed_ex = array('jpg', 'jpeg', 'png');
                   if(in_array($img_ex_lower, $allowed_ex)){
                        $folder = '../../assets/images/'. $image_name;
                        move_uploaded_file($tmp_name, $folder);
                        inputShowInToDB($theatername, $date, $cost,$description,$time, $duration, $trailer,$image_name);
                        header("Location: /movie");
                   }
                }
            }

        }
    }
require 'views/seller/addshow.view.php'; 