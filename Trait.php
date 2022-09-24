<?php
require_once "data/SayGoodBye.php";

use Data\Traits\{sayHello, sayGoodBye, Person};

$person = new Person();
$person->goodBye("Ramadhan");
echo "<br>";
$person->hello("Helya");
echo "<br>";
$person->name = "Danker";
// var_dump($person);
$person->run();
