<?php


namespace App\classes;


class HelloWorld
{

    public $message, $firstName, $lastName;

    public function __construct()
{
    $this->message = "HelloWorld";
}
    public function index()
    {
        $this->firstName = true;
        $this->lastName = "BITM";
        echo gettype($this->firstName);
    }
    public function demo()
    {
        echo $this->message;
    }
}