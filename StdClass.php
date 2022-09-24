<?php
$mahasiswa = [
    'nama' => 'saifur',
    'alamat' => 'kalinyamatan',
    'tanggal_lahir' => '5 Maret 1997',
    'umur' => 22
];

$coba = (object) $mahasiswa;
echo $coba->nama;
echo "<br>";
echo $coba->alamat;

$array = (array) $coba;
var_dump($array);

// $object = (object)$array;

// echo "$object->firstName";
// // var_dump($object);
// if (is_array($object)) {

//     echo "data berbentuk object maka gunakan $$object->firstName ";
// }

// echo "First Name $object[0]->firstName";
// echo "<br>";
// echo "Last Name $object->lastName";
// require_once "data/Person.php";
// $person = new Person("Danker", "Jombang");
// var_dump($person);

// $arrayPerson = (array) $person;
// var_dump($arrayPerson);

// $person = (array) $arrayPerson;
// var_dump($person);
