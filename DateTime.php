<?php
$datetime = new DateTime();
$datetime->setDate(1990, 1, 20);
$datetime->setTime(10, 01, 10);
$datetime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;

$datetime->add($minusOneMonth);


var_dump($datetime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string".PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s" , "salah" , new DateTimeZone("Asia/Tokyo"));
if($date){
    var_dump($date);
}else{
    echo "Format salah".PHP_EOL;
}
