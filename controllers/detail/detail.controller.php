<?php
require "views/partials/header.php";
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
$movies = getDetailMovies($getID);
?>

<div class="card m-auto mt-5 p-4" style="width: 90%; height: 80%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img
        src="<?=$movies['image'];?>"
        alt="Trendy Pants and Shoes"
        class="img-fluid rounded-start"
        style="width: 350px; height: 350px;"
      />
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h5 class="card-title"><?=$movies['show_name'];?></h5>
        <p class="card-text">
        <?=$movies['description'];?>
        </p>
        <p class="card-text d-flex align-items-center">
        <i class="large material-icons">business_center</i> 
          <small class="text-muted">$<?=$movies['cost'];?></small>
        </p>
        <p class="card-text d-flex align-items-center">
          <i class="large material-icons">date_range</i>
          <small class="text-muted"><?=$movies['date'];?></small>
        </p>
        <p class="card-text d-flex align-items-center">
          <i class="large material-icons">alarm_on</i>
          <small class="text-muted"><?=$movies['time'];?></small>
        </p>
        <p class="card-text d-flex align-items-center">
          <i class="large material-icons">access_alarms</i>
          <small class="text-muted"><?=$movies['duration'];?></small>
        </p>
      </div>
    </div>
  </div>
</div>
