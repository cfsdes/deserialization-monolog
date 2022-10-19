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

    function __sleep()
    {
        echo "__sleep() foi executado!\n";
        return ['name', 'age'];
    }

    function __wakeup()
    {
        echo "__wakeup() foi executado!\n";
    }

    function __destruct()
    {
        echo "__destruct() foi executado!\n";
    }
}

//Creating object
$p = new Pet("Lassie", 7);
var_dump($p);

//Serialize
echo "Serializando objeto.. \n";
$ser = serialize($p);
echo $ser . "\n";

//Unserialize
echo "Deserializando objeto.. \n";
$new_p = unserialize($ser);
var_dump($new_p);
