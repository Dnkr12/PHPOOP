<?php
require_once "data/Category.php";

$category = new Category();

$category->setName("Hp");
$category->setExpensive(true);
$category->setHarga(19000);

$category->setName("");

echo "Name : {$category->getName()}";
echo "<br>";
echo "Expensive : {$category->isExpensive()}";
echo "<br>";
echo "Harga: {$category->getHarga()}";
