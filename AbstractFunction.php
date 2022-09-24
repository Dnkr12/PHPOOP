<?php
require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Alex";
$cat->run();

echo "<br>";

$dog = new Dog();
$dog->name = "Jotaro";
$dog->run();
