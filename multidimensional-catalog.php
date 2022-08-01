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

<div>
    <h3> Nom du produit : <?= $product["iPhone"]["name"]?>            </h3>

    <img src="         <?= $product ["iPhone"]["picture_url"] ?>    " width="250px" height="250"     >

    <p>prix du produit <?=$product["iPhone"]["price"] . " €"?>         </p>
</div>


<div>
    <h3> Nom du produit : <?= $product["iPad"]["name"]?>              </h3>

    <img src="            <?= $product["iPad"]["picture_url"] ?>    " width="250px" height="250"     >

    <p>prix du produit    <?=$product["iPad"]["price"] . " €"?>         </p>
</div>


<div>
    <h3> Nom du produit :   <?= $product["iMac"]["name"]?>             </h3>

    <img src="              <?= $product["iMac"]["picture_url"] ?>    " width="250px" height="250"     >

    <p>prix du produit      <?=$product["iMac"]["price"] . " €"?>       </p>
</div>


