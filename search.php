
<?php 
require "views/partials/header.php"; 

require "views/partials/nav.php";
?>



<?php $search = $_POST['search'];?>

<?php

require 'databases/database.php';
$search = $_POST['search'];
$sql = "SELECT * FROM list_shows WHERE show_name LIKE 
'%$search%' OR date LIKE '%$search%' OR Time LIKE '%$search%'
";
$res = mysqli_query($connection, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
  while ($row  = mysqli_fetch_assoc($res)) {
    $Show_Name = $row['show_name'];
    $Date = $row ['date'];
    $Time = $row ['time'];
    $Show_img = $row ['image'];
    $Duration = $row ['duration'];
?>
<div class="container_card p-3 d-flex">
  <div class="card bg-light text-dark">
    <img src="<?php echo $Show_img; ?>" class="card-img-top" style = "width: 100%; height: 270px" alt="Fissure in Sandstone"/>
    <div class="card-body">
      <h4 class="card-title fw-bold"><?php echo $Show_Name; ?></h4>
      <div class="date">
        <i class="large material-icons">date_range</i>
        <p class="card-text"><?php echo $Date; ?></p>
      </div>
      <div class="time">
        <i class="large material-icons">alarm_on</i>
        <p class="card-text"><?php echo $Time; ?></p>
      </div>
      <div class="duration">
        <i class="large material-icons">access_alarms</i>
        <p class="card-text"><?php echo $Duration; ?></p>
      </div>
      <a href="#" class="btn details btn-outline-warning w-100 rounded-pill">Details</a>
      <a href="#" class="btn book btn-outline-warning w-100 rounded-pill">Book Now</a>    
    </div>
  </div>
</div>
  <?php
  }
  }else {
    echo "<div class='alert alert-danger'>
    there is no list matching your search....
    </div>";
  }
  ?>
<?php
require "views/partials/footer.php";
  