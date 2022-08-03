<?php

require_once "my-functions.php";

$iphone = [
    "name" => "iPhone",
    "price" => 750,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "img/iphone.jpeg"];

$ipad = [
    "name" => "iPad",
    "price" => 1200,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "img/ipad.jpeg"];

$imac = [
    "name" => "iMac",
    "price" => 2000,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "img/imac.jpeg"];




?>

<div>
    <h3> Nom du produit : <?= $iphone["name"]?>            </h3>

    <img src="         <?= $iphone["picture_url"] ?>    " width="250px" height="250"     >

    <p>prix du produit <?= formatPrice($iphone ["price"])?>         </p>

    <p>Hors taxe :  <?= formatPrice (calculeHT($iphone ["price"])) ?>  </p>

</div>


<div>
    <h3> Nom du produit : <?= $ipad["name"]?>              </h3>

    <img src="            <?= $ipad["picture_url"] ?>    " width="250px" height="250"     >

    <p>prix du produit    <?=formatPrice($ipad ["price"])?>         </p>

    <p>Hors taxe :  <?= formatPrice (calculeHT($ipad ["price"])) ?>  </p>
</div>


<div>
    <h3> Nom du produit :   <?= $imac["name"]?>             </h3>

    <img src="              <?= $imac["picture_url"] ?>    " width="250px" height="250"     >

    <p>prix du produit      <?=formatPrice($imac ["price"])?>       </p>

    <p>Hors taxe :  <?= formatPrice (calculeHT($imac ["price"])) ?>  </p>
</div>




