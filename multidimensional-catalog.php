<?php
require_once "my-functions.php";
$product = [
    "iPhone" =>[
        "name" => "iPhone",
        "price" => 75000,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "img/iphone.jpeg"],

    "iPad" => [
        "name" => "iPad",
        "price" => 90000,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "img/ipad.jpeg"],

    "iMac" => [
        "name" => "iMac",
        "price" => 155000,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "img/imac.jpeg"],


];
?>

<?php    foreach($product as $key => $value){  ?>
<div>
    <h3> Nom du produit : <?= $value ["name"]?>            </h3>

    <img src="         <?= $value ["picture_url"] ?>    " width="250px" height="250"     >

    <p>prix du produit :  <?= formatPrice($value ["price"]) ?>  </p>

    <p>Hors taxe :  <?= formatPrice (calculeHT($value ["price"])) ?>  </p>

    <p>Réduction : <?= formatPrice(discountedPrice  ($value ["price"] , $value ["discount"])) ?>  </p>

</div>

<?php }; ?>


