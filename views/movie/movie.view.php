<?php
    require "views/partials/header.php";
    require "views/partials/nav.php";
    require "databases/database.php";
    $items = $connection->query("SELECT * FROM list_shows");
?>
<link rel="stylesheet" href="views/css/seller.view.css">
<div class="showlist mt-5 pt-5">
    <h1 class="heading mt-3">Movie list</h1>
       
    <?php 
    foreach ($items as $item){
    ?>
    <div class="cardshows-seller">
        <img src=" <?php echo 'assets/images/'. $item['image'];?>" class="image p-1" style="width: 20%; "/>
        <div class="details p-2">
            <p class="theatername"><?php echo $item['show_name']; ?></p>
            <p class="description mt-1 mb-2"><?php echo $item['description']; ?></p>
            <p class="cost"><i class="large material-icons">business_center</i> $<?php echo $item['cost']; ?></p>
            <p class="dates"><i class="large material-icons">date_range</i><?php echo $item['date']; ?></p>
            <p class="times"><i class="large material-icons">alarm_on</i><?php echo $item['time']; ?></p>
            <p class="durations"><i class="large material-icons">access_alarms</i><?php echo $item['duration']; ?></p>
        </div>
        <div class="action" style="width: 10%">
        <a href="/detail?show_id=<?= $item['show_id']?>"><button id="edit" style="width: 80%; ">Detail</button></a>
        </div>
    </div>
    <?php
    }
    
    ?>
    </div>
</div>
<?php
require "views/partials/footer.php";
