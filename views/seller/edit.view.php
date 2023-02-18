<?php
    require 'views/partials/header.php';
    require 'controllers/admin/edit.controller.php';

?>
<link rel="stylesheet" href="views/css/addshow.css">
<div class="create">
    <form class="addshow-form" action= "#"  method="post" enctype="multipart/form-data">

        <h2 class="mb-2 text-warning">Edit New Theater </h2>

        

        <label class="mt-1" for="theater-name">Theater Name</label>
        <input type="text" name="theater-name"  value="<?= $movies['show_name']; ?>" placeholder="Enter theater name">
        <small class="form-text text-danger"> <?php echo $theatername_error; ?></small>

        <label class="mt-1" for="description">Description</label>
        <input type="text" name="description" value="<?= $movies['description']; ?>" placeholder="Enter theater description">
        <small class="form-text text-danger"> <?php echo $description_error;?></small>

        <label class="mt-1" for="theater-trailer">Theater Trailer</label>
        <input type="text" name="theater-trailer"  value='<?= $movies['trailer']; ?>' placeholder="Enter theater image">
        <small class="form-text text-danger"> <?php echo $trailer_error; ?></small>

        <div class="cost-date">
            <div class="the-cost">
                <label class="mt-1" for="cost">Cost</label>
                <input type="number" name="cost"  value="<?= $movies['cost']; ?>" placeholder="Enter ticket cost">
                <small class="form-text text-danger"> <?php echo $cost_error; ?></small>
            </div>
            <div class="the-date">
                <label class="mt-1" for="date">Date</label>
                <input type="date" name="date"  value="<?= $movies['date']; ?>" placeholder="Enter date">
                <small class="form-text text-danger"> <?php echo $date_error; ?></small>
            </div>
        </div>
        <div class="time-duration">
            <div class="the-time">
                <label class="mt-1" for="time">Time</label>
                <input type="text" name="time"  value="<?= $movies['time']; ?>" placeholder="Enter time">
                <small class="form-text text-danger"> <?php echo $time_error; ?></small>
            </div>
            <div class="the-duration">
                <label class="mt-1" for="duration">Duration</label>
                <input type="text" name="duration"  value="<?= $movies['duration']; ?>" placeholder="Enter duration">
                <small class="form-text text-danger"> <?php echo $duration_error; ?></small>                
            </div>

        </div>
        
        <label class="mt-1" for="theater-image">Theater Image</label>
        <input type="file" class="theater-image" name="theater-image"  value="<?= $movies['image']; ?>">
        <small class="form-text text-danger"> <?php echo $image_error; ?></small>

        <div class="click-action">
            <a href="/"><button id="cancel" name="button" value="0">Cancel</button></a>
            <a href="/"><button id="addnew" class="submit" type="submit" name="button" value="1">Comfirm</button></a>
        </div>
    </form>
</div>

