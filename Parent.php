<?php
require_once 'data/Shape.php';

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner();
echo "<br>";

$rectangle = new Rectangle();
echo $rectangle->getCorner();
echo "<br>";
echo $rectangle->getParentCorner();
