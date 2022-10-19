<?php

class Pet
{
    public $name;
    public $age;

    function __construct($_name, $_age)
    {
        $this->name = $_name;
        $this->age = $_age;
    }
}
