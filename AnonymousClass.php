<?php
interface HelloWorld
{
    function sayHello(): void;
}
// Ini kalau tidak pakai anonymous class
// class SampleHelloWorld implements HelloWorld{
//     public function sayHello(): void
//     {
//         echo "Hello World";
//     }
// }
// $helloWorld = new SampleHelloWorld();
// $helloWorld->sayHello();

$helloWorld = new class("Ramadhan") implements HelloWorld
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }


    function sayHello(): void
    {
        echo "Hello $this->name";
    }
};
$helloWorld->sayHello();
