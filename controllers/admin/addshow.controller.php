<?php
require "../../models/addshow.model.php";


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
       $theaterimage = $_POST['theater-image'] ? $_POST['theater-image'] : '';

       
        
        if (empty($theaterimage)){
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
            require "../../databases/database.php";
            if (isset($_POST["submit"]) && isset($_FILES['theater-image'])){
                $description_error = $_FILES['theater-image']['name'];
                $img_name = $_FILES[$theaterimage]['name'];
                $tmp_name = $_FILES[$theaterimage]['tmp_name'];
                $error = $_FILES[$theaterimage]['error'];
                
                // $duration_error = $duration;
                // $time_error = $time;
                // $date_error = $date;
                // $cost_error = $cost;
                // $description_error = $description;
                // $theatername_error = $theatername;
                // $trailer_error  = $trailer;
                // $image_error = $image;
                if($error === 0){
                   $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                   $img_ex_to_lc = strtolower($img_ex);
       
                   $allowed_exs = array('jpg', 'jpeg', 'png');
                   if(in_array($img_ex_to_lc, $allowed_exs)){
                        $new_img_name = uniqid($theatername, true).'.'.$img_ex_to_lc;
                        $img_upload_path = '../assets/images/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);
                        inputShowInToDB($theatername, $date, $cost,$description,$time, $duration, $new_img_name, $trailer);
                        header("Location: /movie");
                   }
                }
            }

        }
    }
require '../../views/seller/addshow.view.php'; 