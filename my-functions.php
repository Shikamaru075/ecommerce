<?php

function formatPrice (int $price):void {
    $price= $price/100 ;
    echo number_format($price,2)."€";
}

function calculeHT (int $priceTTC, int $TVA=20) :int{
    return ((100*$priceTTC)/(100+$TVA));
}

function discountedPrice (int $price,$discount): int  {
    return $price-$price*$discount/100;
}

function total ( int $price,$quantity) : int {
    return  $price*$quantity;


}