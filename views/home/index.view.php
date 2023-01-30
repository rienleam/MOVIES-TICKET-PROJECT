
  <?php require "views/partials/header.php" ?>
  <?php require "views/partials/nav.php" ?>
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../assets/images/avatar.jpg" class="d-block w-100" alt="First Slide">
    </div>
    <div class="carousel-item">
      <img src="../../assets/images/spiderman.jpg" class="d-block w-100" alt="Secound Slide">
    </div>
    <div class="carousel-item">
      <img src="../../assets/images/batman.jpg" class="d-block w-100" alt="Third Slide">
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

<?php require "views/partials/footer.php" ?>