<?php
    require "../../database.php";
    $items = $conn->query("SELECT * FROM list_shows");
?>
<div class="showlist">
    <div class="title">
        <h1 class="heading">Theater List</h1>
        <button id="add" type="submit" class="btn-add text-white" name ='add'>Add new Theater</button>
    </div>
    <!-- <div class="card-titles mt-4" >
        <h5 class="number" style="width: 5%;">No</h5>
        <h5 class="image" style="width: 15%;">Image</h5>
        <h5 class="theatername" style="width: 13%;">Theater name</h5>
        <h5 class="description" style="width: 20%;">Description</h5>
        <h5 class="cost" style="width: 8%;">Cost</h5>
        <h5 class="dates" style="width: 8%;">Date</h5>
        <h5 class="times" style="width: 13%;">Time</h5>
        <h5 class="durations" style="width: 8%;">Duration</h5>
    </div> -->
   
    <?php 
    foreach ($items as $item){ 
    ?> 
    <div class="cardshows">
        <img src="<?php echo $item['image']; ?>" class="image" style="width: 20%;" />
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