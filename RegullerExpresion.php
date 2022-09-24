<?php
$matches = [];
$result = preg_match_all("/ra|ma|dhan|danker/i" , "Ramadhan", $matches);

var_dump($result);
var_dump($matches);


$result = preg_replace("/anjing|bangsat/i" , "***" , "ANJING BANGSAT luh");
var_dump($result);

$result = preg_split("/[\s,-]/" , "Ramadhan danker,Backend,apabila-kita");
var_dump($result);





