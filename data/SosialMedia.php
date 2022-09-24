<?php
class SosialMedia
{
    public string $name;
}
class Facebook extends SosialMedia
{
    final public function login(string $usename, string $password): bool
    {
        return true;
    }
}
class FakeFacebook extends Facebook
{
    // public function login(string $usename, string $password): bool
    // {
    //     return false;
    // }
}
// final tidak bisa di turunkan lagi