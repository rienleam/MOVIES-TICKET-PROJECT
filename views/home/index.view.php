
<?php
    require "database.php";
    $items = $conn->query(" SELECT * FROM list_shows");
?>
<div class="container_card p-5  bg-dark d-flex">
    <?php 
    foreach ($items as $item){ 
    ?>
        <div class="card m-3 bg-light text-dark">
        <img src="<?php echo $item['image']; ?>" class="card-img-top" style = "width: 100%; height: 270px" alt="Fissure in Sandstone"/>
        <div class="card-body">
            <h4 class="card-title fw-bold"><?php echo $item['show_name']; ?></h4>
            <div class="date">
                <i class="large material-icons">date_range</i>
                <p class="card-text"><?php echo $item['date']; ?></p>
            </div>
            
            <div class="time">
                <i class="large material-icons">access_alarms</i>
                <p class="card-text"><?php echo $item['time']; ?></p>
            </div>

            <a href="#" class="btn btn-outline-warning w-100 rounded-pill">Booking Now</a>
        </div>
        </div>
    <?php
    }
    ?>
</div>