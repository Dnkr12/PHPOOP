<?php
require_once "excepction/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";


$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";


try {
    validationLoginRequest($loginRequest);
    echo "Valid".PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Validation Eror : {$exception->getMessage()}" . PHP_EOL;

    var_dump($exception->getTrace());
    echo $exception->getTraceAsString() .PHP_EOL;
} finally {
    echo "Eror atau nggak akan di eksekusi".PHP_EOL;
}

