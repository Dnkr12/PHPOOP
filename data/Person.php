<?php

class Person
{

    const AUTHOR = "MOON";
    var string $name;
    var ?string $address;
    var string $country = "Indonesia";

    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name <br>";
        } else {
            echo "Hello $name, my name is $this->name";
        }
    }

    function info()
    {
        echo "AUTHOR : " . self::AUTHOR;
    }
    function __destruct()
    {
        echo "Object person $this->name is destroyed ";
    }
}
