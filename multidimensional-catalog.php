<?php

$product = [
    "iPhone" =>[
        "name" => "iPhone",
        "price" => 750,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "img/iphone.jpeg"],

    "iPad" => [
        "name" => "iPad",
        "price" => 1200,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "img/ipad.jpeg"],

    "iMac" => [
        "name" => "iMac",
        "price" => 2000,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "img/imac.jpeg"],


];
?>

<?php    foreach($product as $key => $value){  ?>
<div>
    <h3> Nom du produit : <?= $value ["name"]?>            </h3>

    <img src="         <?= $value ["picture_url"] ?>    " width="250px" height="250"     >

    <p>prix du produit <?=$value ["price"] . " €"?>         </p>
</div>

<?php }; ?>


