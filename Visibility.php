<?php
require_once "data/Product.php";

$product = new Product("Apple", 10000);
echo $product->getName();
echo "<br>";
echo $product->getPrice();

echo "<br>";

$dummy = new ProductDummy("Dummy", 1000);
$dummy->info();
