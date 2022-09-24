<?php
class Category
{

    private string $name;
    private bool $expensive;
    private int $harga;

    public function getName(): string
    {
        return $this->name;
    }


    public function setName($name): void
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }


    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }

    /**
     * Get the value of harga
     */
    public function getHarga(): int
    {
        return $this->harga;
    }


    public function setHarga($harga): void
    {
        $this->harga = $harga;
    }
}
