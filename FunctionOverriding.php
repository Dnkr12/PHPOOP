<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Danker";
$manager->sayHello("DIO");
echo "<br>";
$vp = new VicePresident();
$vp->name = "Ramadhan";
$vp->sayHello("Helya");
