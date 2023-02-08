<?php
    // require "../../databases/database.php";
    require "databases/database.php";
    $items = $conn->query("SELECT * FROM list_shows");
?>
<div class="showlist">
    <div class="title">
        <h1 class="heading">Theater List</h1>
        <a href="../../controllers/admin/addshow.controller.php"><button id="add" type="submit" class="btn-add text-white" name ='add'>Add new Theater</button></a>
    </div>
   
    <?php 
    foreach ($items as $item){ 
    ?> 
    <div class="cardshows">
        <img src="../../assets/images/avatars.jpg" class="image" style="width: 20%;" />
        <div class="details">
            <p class="theatername"><?php echo $item['show_name']; ?></p>
            <p class="description"><?php echo $item['description']; ?></p>
            <p class="cost"><i class="large material-icons">business_center</i> $<?php echo $item['cost']; ?></p>
            <p class="dates"><i class="large material-icons">date_range</i><?php echo $item['date']; ?></p>
            <p class="times"><i class="large material-icons">alarm_on</i><?php echo $item['time']; ?></p>
            <p class="durations"><i class="large material-icons">access_alarms</i><?php echo $item['duration']; ?></p>
        </div>
        <div class="action" style="width: 10%">
            <button id="edit">Edit</button>
            <button id="delete">Delete</button>
        </div>
    </div>
    <?php
    }
    ?>
</div>