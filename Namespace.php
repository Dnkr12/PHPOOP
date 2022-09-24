<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new \Data\one\Conflict();
$conflict2 = new \Data\Two\Conflict();

echo Helper\APPLICATION;
echo "<br>";
Helper\helpMe();
