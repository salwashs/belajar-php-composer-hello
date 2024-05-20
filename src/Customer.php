<?php

namespace Salwa\Belajar;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "You"): string
    {
        return "Hello " . $name . ", my name is " . $this->name;
    }
}