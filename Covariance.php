<?php
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";
require_once "data/Food.php";
$catShelter = new \Data\catShelter();
$cat = $catShelter->adopt("Lumi");
$cat->eat(new \Data\AnimalFood());
echo PHP_EOL;

$dogShelter = new \Data\dogShelter();
$dog = $dogShelter->adopt("Rendi");
$dog->eat(new Data\Food());
