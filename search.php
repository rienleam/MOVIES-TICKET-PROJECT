
<?php 
require "views/partials/header.php"; 

require "views/partials/nav.php";
?>

<?php $search = $_POST['search'];?>
<!-- <div class="container d-flex">
  <div class="row align-items center">
    <div class="col-lg-12 py-5 ml-10">
    <div class="card px-3 ">
      
    </div>
    </div>
  </div>
</div> -->

<?php

//connect ot the database
require 'conn.php';
//get the search keyword
$search = $_POST['search'];
//SQL query to get the products based on the search keyword
$sql = "SELECT * FROM list_shows WHERE show_name LIKE 
'%$search%' OR date LIKE '%$search%' OR Time LIKE '%$search%'
";
//execute the query
$res = mysqli_query($conn, $sql);
//count the rows
$count = mysqli_num_rows($res);
//check whether the product is available
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
<!------ start of card 1 ---------------->
  
<!------ End of card 1 ---------------->


<?php
require "views/partials/footer.php";
  