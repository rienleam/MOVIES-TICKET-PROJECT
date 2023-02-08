<?php
  require "database.php";
  require "views/partials/header.php";
  require "views/partials/nav.php";
  $items = $conn->query(" SELECT * FROM list_shows");
?>

<div id="carouselExample" class="carousel slide">
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="../../assets/images/avatar-back.jpg" class="d-block w-100" alt="First Slide">
  </div>
  <div class="carousel-item">
    <img src="../../assets/images/blackadam-back.jpg" class="d-block w-100" alt="Secound Slide">
  </div>
  <div class="carousel-item">
    <img src="../../assets/images/doctorstrange-back.jpg" class="d-block w-100" alt="Third Slide">
  </div>
  <div class="carousel-item">
    <img src="../../assets/images/starwar-back.jpg" class="d-block w-100" alt="Forth Slide">
  </div>
  <div class="carousel-item">
    <img src="../../assets/images/starwar.jpg" class="d-block w-100" alt="Fifth Slide">
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>

<div class="container_card p-5  bg-dark d-flex">
    <?php 
    foreach ($items as $item){ 
    ?>
        <div class="card m-3 bg-light text-dark">
        <img src="<?php echo $item['image']; ?>" class="card-img-top" style = "width: 100%; height: 270px" alt="Fissure in Sandstone"/>
        <div class="card-body">
            <h4 class="card-title fw-bold"><?php echo $item['show_name']; ?></h4>
            <div class="date m-0">
                <i class="large material-icons">date_range</i>
                <p class="card-text"><?php echo $item['date']; ?></p>
            </div>
            <div class="time m-0">
                <i class="large material-icons">alarm_on</i>
                <p class="card-text"><?php echo $item['time']; ?></p>
            </div>
            <div class="duration m-0">
                <i class="large material-icons">access_alarms</i>
                <p class="card-text"><?php echo $item['duration']; ?></p>
            </div>
            <a href="/detail?show_id=<?= $item['show_id']?>" class="btn details btn-outline-warning w-100 rounded-pill">Details</a>
            <a href="#" class="btn book btn-outline-warning w-100 rounded-pill">Book Now</a>
        </div>
        </div>
    <?php
    }
    ?>
</div>


  <?php require "views/partials/footer.php" ?>