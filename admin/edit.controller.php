<?php
require "models/edit.model.php";
require "databases/database.php";

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

$getID = ($_GET['show_id']);
$movies =  getMovieData($getID);
$show_id = $getID;

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
        if ($task_complete == 7)
        {
            if (isset($_POST["button"]) == 1){
                if (empty($image_name))
                {
                    global $connection;
                    $sql = "UPDATE list_shows SET show_name = :theatername, date = :date, cost = :cost, description=:description, time=:time, duration=:duration, trailer= :trailer WHERE show_id = $show_id";
                    $stmt = $connection->prepare($sql);
                    $stmt->bindParam(':show_id',$show_id);
                    $stmt->execute([':theatername'=>$theatername,
                        ':date'=>$date,
                        ':cost'=>$cost,
                        ':description'=>$description,
                        ':time'=>$time,
                        ':duration'=>$duration,
                        ':trailer'=>$trailer
                    ]);
                    header("Location: /movie");
                }
                else
                {
                    $img_type = $_FILES['theater-image']['type'];
                    $tmp_name = $_FILES['theater-image']['tmp_name'];
                    $error = $_FILES['theater-image']['error'];
                    $image_name = $movies['image'];
                    $image_error = $image_name;
                    
                    
                    if($error === 0){
                        $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
                        $img_ex_lower = strtolower($img_ex);
                        $image_error = 1;
           
                       $allowed_ex = array('jpg', 'jpeg', 'png');
                       if(in_array($img_ex_lower, $allowed_ex)){
                            $folder = 'assets/images/'. $image_name;
                            move_uploaded_file($tmp_name, $folder);
                            
                            editDataInDB($theatername, $date, $cost,$description,$time, $duration, $trailer,$image_name,$show_id);
                            header("Location: /movie");
                       }
                    }
                }
            
        }

    }
}
