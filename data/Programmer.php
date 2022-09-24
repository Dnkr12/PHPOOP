<?php
class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
class BackendProgrammer extends Programmer
{
}
class FrontendProgrammer extends Programmer
{
}
class JavaDeveloper extends Programmer
{
}
class Company
{
    public Programmer $programer;
}

function sayHelloProgrammer(Programmer $programer)
{

    if ($programer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programer->name";
    } elseif ($programer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programer->name";
    } elseif ($programer instanceof JavaDeveloper) {
        echo "Hello Java Developer $programer->name";
    } elseif ($programer instanceof Programmer) {
        echo "Hello Programmer $programer->name";
    }
}
