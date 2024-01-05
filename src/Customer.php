<?php

namespace RezaFikkri\Belajar;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "quest"): string
    {
        return "Hello $name, my name is $this->name";
    }
}
