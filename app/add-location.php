<?php

$auth = true;
require 'includes/config.php';
include_once "_head.php";
include_once "_navbar.php";

$alert = false;

if (isset($_GET["error"])) {
    $alert = true;
    if ($_GET['error'] == "missingInput") {
        $type = "secondary";
        $message = "Les champs requis sont vides";
    }
    if ($_GET['error'] == "pastDlc") {
        $type = "secondary";
        $message = "La date limite de consommation du produit est trop proche.";
    }
    if ($_GET['error'] == "unknownError") {
        $type = "warning";
        $message = "Une erreur s'est produite, réessayer ultérieurement.";
    }
    if ($_GET['error'] == "tooBig") {
        $type = "warning";
        $message = "L'image est trop lourde , elle doit être < 10Mo";
    }
    if ($_GET['error'] == "wrongFormat") {
        $type = "warning";
        $message = "L'image est au mauvais format : Les formats acceptés sont jpg,png,jpeg";
    }
}

?>

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ps ps--active-y">
    <form action="add-location_post.php" method="post" class="container" enctype="multipart/form-data">
        <?php echo $alert ? "<div class='alert alert-{$type} mt-2'>{$message}</div>" : ''; ?>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom du produit</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="stuliday" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prix du produit</label>
            <input type="number" min="0.01" step="0.01" class="form-control" id="exampleFormControlInput1"
                placeholder="125" name="price">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="adresse">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Image du produit</label>
            <input class="form-control" type="file" id="formFile" accept=".png,.jpg,.jpeg" name="image">
        </div>


        <div class="mb-3">
            <button type="submit" class="btn btn-outline-success btn-lg">Ajouter produit</button>
        </div>

    </form>

</main>