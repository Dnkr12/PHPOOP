<?php

function getGenap(int $max): Iterator
{
    $array = [];
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}
foreach (getGenap(100) as $value) {
    echo "Genap : $value";
    echo "<br>";
}
function getGanjil(int $max): Iterator
{

    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}
foreach (getGanjil(100) as $value) {
    echo "Ganjil : $value";
    echo "<br>";
}
function coba(int $max)
{
    for ($i = 1; $i <= $max; $i++) {
        if ($i %  5 == 0) {
            yield $i;
        }
    }
}
foreach (coba(100) as $value) {
    echo "Coba : $value";
    echo "<br>";
}
