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

$p = new Pet("Lassie", 7);

//Serialize
$ser = serialize($p);
echo $ser . "\n";
echo base64_encode($ser) . "\n";
