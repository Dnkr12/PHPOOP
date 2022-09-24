<?php
require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name;
echo "<br>";

MathHelper::$name = "Ramadhan";
echo MathHelper::$name;
echo "<br>";
$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result";
