<?php
require_once "data/Programmer.php";
$company = new Company();
$company->programer = new Programmer("Danker");
// var_dump($company);

$company->BackendProgrammer = new Programmer("Danker");
// var_dump($company);

$company->FrontendProgrammer = new Programmer("Danker");
// var_dump($company);
$company->JavaDeveloper = new Programmer("Danker");


sayHelloProgrammer(new Programmer("Danker"));
echo "<br>";
sayHelloProgrammer(new BackendProgrammer("Ramadhan"));
echo "<br>";
sayHelloProgrammer(new FrontendProgrammer("Dan"));
echo "<br>";
sayHelloProgrammer(new JavaDeveloper("Danker"));
