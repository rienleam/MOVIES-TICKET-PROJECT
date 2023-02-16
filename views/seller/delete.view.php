<?php
require "views/partials/header.php";
?>
<link rel="stylesheet" href="views/css/delete.view.css">
<form action="#" method="post">
    <div class="alert alert-info hidden w-100">
        <h2 class="title">Do you want to delete this show?</h2>
        <div class="click-action">
            <button id="cancel" class="btn btn-secondary" name="button" value="0">Cancel</button>
            <button id="addnew" class="btn btn-danger" type="submit" name="button" value="1">Comfirm</button>
        </div>
    </div>
</form>




