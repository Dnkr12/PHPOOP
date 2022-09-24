<?php

require_once "excepction/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Danker";
$request->password = "123";

//ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $username;
    public ?string $address;
    public ?string $email;

}

$register = new RegisterUserRequest();
$register->username = "A";
$register->address = "A";
$register->email = "A";

ValidationUtil::validateReflection($register);

ValidationUtil::validate($register);










