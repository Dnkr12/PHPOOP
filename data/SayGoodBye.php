<?php

namespace Data\Traits;

trait sayGoodBye
{
    function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye";
        } else {
            echo "Good bye $name";
        }
    }
}
trait sayHello
{
    function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello";
        } else {
            echo "Hello $name";
        }
    }
}
trait HasName
{
    public string $name;
}
trait CanRun
{
    public abstract function run(): void;
}
class ParentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Good bye in person";
    }
    public function hello(?string $name): void
    {
        echo "Hello in Person";
    }
}
trait ALL
{
    use sayGoodBye, sayHello, HasName, CanRun {
        // bisa di override
        // hello as private;
        // goodbye as private;
    }
}

class Person extends ParentPerson
{
    use ALL;
    public  function run(): void
    {
        echo "Person $this->name is running";
    }
}
