<?php
require_once "data/Person.php";

$person = new Person("Ramadhan", null);
$person->name = "Ramadhan";
$person->address = "Jombang";


echo "Name : $person->name <br>" . PHP_EOL;
echo "Address : $person->address <br>" . PHP_EOL;
echo "Country : $person->country <br>" . PHP_EOL;

$person2 = new Person("Ramadhan", null);
$person2->name = "Danker";
$person2->address = "Kediri";


echo "Name : $person2->name <br>" . PHP_EOL;
echo "Address : $person2->address <br>" . PHP_EOL;
echo "Country : $person2->country <br>" . PHP_EOL;
