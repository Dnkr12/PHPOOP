<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Joni";
$manager->sayHello("Joko");

echo "<br>";

$vp = new VicePresident();
$vp->name = "Ramadhan";
$vp->sayHello("Danker");
