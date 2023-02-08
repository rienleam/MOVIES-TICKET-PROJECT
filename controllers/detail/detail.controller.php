<?php
require "views/partials/header.php";
require "views/partials/nav.php";
function getDetailMovies(int $show_id) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM list_shows WHERE show_id = :show_id");
    $statement->execute([
        ':show_id'=>$show_id
    ]);
    $item = $statement->fetch();
    return $item;
}
$getID = ($_GET['show_id']);
$movies = getDetailMovies($getID);
?>

<div class="cardDetail">
  <div class="row g-0">
    <div class="col-md-4">
      <img
        src="<?=$movies['image'];?>"
        alt="Trendy Pants and Shoes"
        class="img"
      />
    </div>
    <div class="col">
      <div class="card-body">
        <h2 class="card-title"><?=$movies['show_name'];?></h2>
        <p class="card-text">
        <?=$movies['description'];?>
        </p>
        <p class="card-text">
          <small class="text-muted"><?=$movies['date'];?></small>
        </p>
        <button type="button" class="btn btn-warning w-50">Warning</button>
      </div>
    </div>
  </div>
</div>
<?php
require "views/partials/footer.php";