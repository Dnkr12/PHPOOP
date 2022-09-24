<?php
require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Ramadhan";
$student1->value = 100;
$student1->setSample("XXX");
var_dump($student1);
echo "<br>";
$student2 = clone $student1;
var_dump($student2);
echo "<br>";
$student3 = clone $student1;
var_dump($student3);
// $student3 = clone $student2->__clone();
// echo "<br>";
// var_dump($student3);
