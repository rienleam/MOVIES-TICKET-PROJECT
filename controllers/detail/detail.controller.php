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

<div class="card m-auto mt-5 p-4 mb-5" style="width: 90%;">
  <div class="row g-0">
    <div class="col-md-4 p-3" style="width: 30%">
      <img
        src="<?=$movies['image'];?>"
        alt="Trendy Pants and Shoes"
        class="img-fluid rounded-start"
        style="width: 100%; height: 100%;"
      />
    </div>
    <div class="col-md-7 pl-4 pr-3" style="width: 70%">
      <div class="card-body">
        <h1 class="card-title text-warning"><b><?=$movies['show_name'];?></b></h1>
        <p class="card-text">
        <?=$movies['description'];?>
        </p>
        <p class="card-text d-flex align-items-center m-0 mb-1">
        <i class="large material-icons">business_center</i> 
          <small class="text-muted">$<?=$movies['cost'];?></small>
        </p>
        <p class="card-text d-flex align-items-center m-0 mb-1">
          <i class="large material-icons">date_range</i>
          <small class="text-muted"><?=$movies['date'];?></small>
        </p>
        <p class="card-text d-flex align-items-center m-0 mb-1">
          <i class="large material-icons">alarm_on</i>
          <small class="text-muted"><?=$movies['time'];?></small>
        </p>
        <p class="card-text d-flex align-items-center m-0 mb-1">
          <i class="large material-icons">access_alarms</i>
          <small class="text-muted"><?=$movies['duration'];?></small>
        </p>
        <div class="user-click d-flex justify-content-between mt-3">
          <button type="button" class="btn btn-back btn-warning">BACK</button>
          <button type="button" class="btn btn-book btn-warning">BOOKING NOW</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
require('views/partials/footer.php');
