<div class="card m-auto mt-5 p-4 mb-5" style="width: 90%;">
  <div class="row g-0">
    <div class="col-md-4 p-4" style="width: 50%">
      <div class="video">
        <?= $_SESSION['movies']['trailer']; ?>
      </div>

    </div>
    <div class="col-md-7 pl-3 pr-3" style="width: 50%">
      <div class="card-body">
        <h1 class="card-title text-warning"><b><?=$_SESSION['movies']['show_name'];?></b></h1>
        <p class="card-text">
        <?=$_SESSION['movies']['description'];?>
        </p>
        <p class="card-text d-flex align-items-center m-0 mb-1">
        <i class="large material-icons">business_center</i> 
          <small class="text-muted">$<?=$_SESSION['movies']['cost'];?>/1 seat</small>
        </p>
        <p class="card-text d-flex align-items-center m-0 mb-1">
          <i class="large material-icons">date_range</i>
          <small class="text-muted"><?=$_SESSION['movies']['date'];?></small>
        </p>
        <p class="card-text d-flex align-items-center m-0 mb-1">
          <i class="large material-icons">alarm_on</i>
          <small class="text-muted"><?=$_SESSION['movies']['time'];?></small>
        </p>
        <p class="card-text d-flex align-items-center m-0 mb-1">
          <i class="large material-icons">access_alarms</i>
          <small class="text-muted"><?=$_SESSION['movies']['duration'];?></small>
        </p>
        <p class="card-text d-flex align-items-center m-0 mb-1">
          <i class="large material-icons">call</i>
          <small class="text-muted">097-73-48-624</small>
        </p>
        <p class="card-text d-flex align-items-center m-0 mb-1">
          <i class="large material-icons">location_on</i>
          <a href="https://goo.gl/maps/ovi9ijLrNgFTm5T36">រាជធានី, Street 2004, Phnom Penh 120802</a>
        </p>
        <div class="user-click d-flex justify-content-between mt-3">
          <a href="/">
            <button type="button" class="btn btn-back btn-warning">BACK</button>
          </a>
          <a href="/booking">
            <button type="button" class="btn btn-book btn-warning">BOOKING NOW</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

require('views/partials/footer.php');