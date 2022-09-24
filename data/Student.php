<?php
class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;


    public function setSample($sample)
    {
        $this->sample = $sample;
    }
    public function __clone()
    {
        unset($this->sample);
    }
    public function __toString(): string
    {
        return "Student id:$this->id name:$this->name, value:$this->value ";
    }
    public function __invoke(...$arguments): void
    {
        $join = join(",", $arguments);
        echo "Invoke student with arguments $join";
    }
    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sampel" => $this->sample,
            "author"=> "RAMADHAN",
            "version" => "1.0.0"
        ];
    }
}
