<?php
require_once "my-functions.php";
require "product.php";

  foreach($product as $key => $value){  ?>
<div>
    <h3> Nom du produit : <?= $value ["name"]?>            </h3>

    <img src="         <?= $value ["picture_url"] ?>    " width="250px" height="250"     >

    <p>prix du produit :  <?php formatPrice($value ["price"]) ?>  </p>

    <p>Hors taxe :  <?php formatPrice (calculeHT($value ["price"])) ?>  </p>

    <p>Réduction : <?php formatPrice(discountedPrice  ($value ["price"] , $value ["discount"])) ?>  </p>
</div>

    <form action="cart.php" method="post">
        <p>Quantité : <input type="number" name="quantity" min="1" max="10"/></p>
        <input type="hidden" name="productName" value="<?= $value["name"] ?> " >
        <input type="hidden" name="price" value="<?= $value["price"] ?> " >
        <button type="submit">Ajouter au panier</button>

    </form>
<?php }; ?>

