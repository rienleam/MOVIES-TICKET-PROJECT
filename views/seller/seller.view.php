<?php
    require "views/partials/header.php";
    require "views/partials/nav.php";
    require "database.php";
    $items = $connection->query("SELECT * FROM list_shows");
?>
<link rel="stylesheet" href="views/css/seller.view.css">
<div class="showlist">
    <div class="title">
        <h1 class="heading">Theater List</h1>
        <a href="controllers/admin/addshow.controller.php"><button id="add" type="submit" class="btn-add text-white" name ='add'>Add new Theater</button></a>
    </div>
   
    <?php 
    foreach ($items as $item){
    ?>
    <div class="cardshows">
        <img src="<?= $item['image'];?>" class="image" style="width: 15%; heigt : 5px;" />
        <div class="details">
            <p class="theatername"><?php echo $item['show_name']; ?></p>
            <p class="description"><?php echo $item['description']; ?></p>
            <p class="cost"><i class="large material-icons">business_center</i> $<?php echo $item['cost']; ?></p>
            <p class="dates"><i class="large material-icons">date_range</i><?php echo $item['date']; ?></p>
            <p class="times"><i class="large material-icons">alarm_on</i><?php echo $item['time']; ?></p>
            <p class="durations"><i class="large material-icons">access_alarms</i><?php echo $item['duration']; ?></p>
        </div>
        <div class="action" style="width: 10%">
        <a href=""><button id="edit">Edit</button></a>
        <a href=""><button id="delete">Delete</button></a>
        </div>
    </div>
    <?php
    }
    ?>
</div>