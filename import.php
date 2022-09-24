<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();

helpMe();
echo "<br>";
echo APPLICATION;
