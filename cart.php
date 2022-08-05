<?php
require ("product.php");
require ("my-functions.php");

$key = $_POST['productName'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

;

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<main class="text-white text-center mt-5 ">

    <div id="panier"
         class="container justify-content-center  bg-dark border-primary border-top   ">
        <div class="row">
            <div class="col">
                <h5 class="border-bottom border-primary mb-3">Produit</h5>
                <h6 class="border-bottom border-primary mb-3"><?= $key ?></h6>
</div>
<div class="col">
    <h5 class="border-bottom border-primary mb-3">prix unitaire</h5>
    <h6 class="border-bottom border-primary mb-3"> <?php formatPrice(intval($price)) ?></h6>
</div>
<div class="col">
    <h5 class="border-bottom border-primary mb-3">Quantité</h5>
    <h6 class="border-bottom border-primary mb-3"> <?php echo $quantity ?></h6>
    <h5 class="mb-3">Total HT </h5>
    <h5 class="mb-3">TVA</h5>
    <h5 class="mb-3">Total TTC </h5>
</div>
<div class="col">
    <h5 class="border-bottom border-primary mb-3">Total</h5>
    <h6 class="border-bottom border-primary mb-3"><?php formatPrice(total($price, $quantity)) ?></h6>
    <h6 class="border-bottom border-primary mb-3"><?php formatPrice(total(calculeHT ($price), $quantity)) ?></h6>
    <h6 class="border-bottom border-primary mb-3"><?php formatPrice(total($price, $quantity) - total(calculeHT ($price), $quantity)) ?></h6>
    <h6 class="border-bottom border-primary mb-3"><?php formatPrice(total($price, $quantity)) ?></h6>
</div>
</div>
</div>
<form class="container col-10  d-flex justify-content-center bg-dark mb-0" method="post">
    <select class="me-5 rounded-pill" style="width: 60%">

        <option>LA poste</option>
        <option>Amazon</option>


    </select>
    <input type="hidden" name="" value="">
    <input style="width: 200px" class="btn btn-primary" type="submit" value="Valider">
</form>
<div class="container col-10 bg-dark d-flex justify-content-end ">
    <div class="col-4 mt-3">
        <h5 class="mb-3">Total HT <?php formatPrice(total(calculeHT ($price), $quantity)) ?></h5>
        <h5 class="mb-3">
            TVA <?php formatPrice(total($price, $quantity) - total(calculeHT ($price), $quantity)) ?></h5>
    </div>
</div>


</main>