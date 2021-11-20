<?php

$auth = true;
require 'includes/config.php';
require 'includes/connect.php';
include_once '_head.php';
include_once '_navbar.php';

include_once '_view-single.php';

?>

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ps ps--active-y">
    <div class="card container m-4 p-4">


        <form action="edit-location_post.php" method="post" enctype="multipart/form-data">
            <input type="text" class="form-control form-control-lg" name="name"
                value="<?php echo $location['name']; ?>"></input>
            <div class="col-md-4 center">
                <img src="<?php echo $location['image']; ?>" alt="<?php echo $location['name']; ?>" class="img-fluid">
            </div>
            <p class="text-bold">Description :</p>
            <textarea name="description" class="form-control" rows=3><?php echo $location['description']; ?></textarea>
            <hr>
            <p class="text-bold">Adresse :</p>
            <input type="text" class="form-control" name="adress" value="<?php echo $location['adress']; ?>" />
            <hr>
            <p class="text-bold">Prix :</p>
            <input type="number" class="form-control col-2 mb-2" name="price"
                value="<?php echo $location['price']; ?>" />
            <input type="hidden" name="id" value="<?php echo $location['location_id']; ?>">
            <button type="submit" class="btn btn-warning col-2">Modifier
                le bien</button>
        </form>
    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 600px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 333px;"></div>
    </div>
</main>

<?php

include_once '_footer.php';
?>