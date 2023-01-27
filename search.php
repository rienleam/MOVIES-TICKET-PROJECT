
<?php 
require "views/partials/header.php"; 

require "views/partials/nav.php";
?>



<?php $search = $_POST['search'];?>
<div class="container  ">
  <div class="row align-items center">
    <div class="col-lg-12 py-5 ml-10">
    <div class="card px-3 ">
      
    </div>
    </div>
  </div>
</div>

<?php

//connect ot the database
require 'conn.php';
//get the search keyword
//$search = $_POST['search'];
//SQL query to get the products based on the search keyword
$sql = "SELECT * FROM list_shows WHERE show_name LIKE 
'%$search%' OR description LIKE '%$search%' OR date LIKE '%$search%' OR cost LIKE '%$search%'
";
//execute the query
$res = mysqli_query($conn, $sql);
//count the rows
$count = mysqli_num_rows($res);
//check whether the product is available
if ($count > 0) {
while ($row  = mysqli_fetch_assoc($res)) {
$Id = $row['show_id'];
$Show_Name = $row['show_name'];
$Date = $row ['date'];
$Price =$row['cost'];
$Description = $row ['description'];
$Time = $row ['time'];
$Show_img = $row ['image'];
?>
<div class="container">
  <div class="row-lg-3 m-10 d-flex flex-wrap w-100">
    <form action="" method="post" class="m-5">
    <div class="row card shadow d-flex f-row">
    <div class="card-body">
    <div> 
        <img src="<?php echo $Show_img;?>" class="img-fluid px-5 prdimg" alt="ff">
    </div><br>
    <h4 name="product_name"><b><?php echo $Show_Name ;?></b></h4>
    <h6 class="secondary" name="price"><small><?php echo "Time : " . $Time ;?></small></h6>
    <h6 class="secondary" name="price"><small><?php echo "Date : " . $Date ;?></small></h6>
    <h6 class="price"><small> <?php echo "Prize :$ " . $Price ;?></small></h6>
    <h6 class="secondary"> <small><?php echo "Description : " . $Description ;?></small></h6>
    <button class="btn btn-warning" type="submit" name="add"> 
        <i class="fa fa-shopping-cart"> </i>  Booking Now</button>
    </div>
    </div>
    </form>
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

      </div>
    </div>
  </div>
</div>
<br>


<?php
require "views/partials/footer.php";
  