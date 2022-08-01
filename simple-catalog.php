<?php
$products = ["iPhone", "iPad", "iMac"];
$products = array ("iPhone", "iPad", "iMac");
sort($products);

$first_product=[$products[0]];
$last_product= end ( $products);
print_r ($first_product) ;
print_r ($last_product);

