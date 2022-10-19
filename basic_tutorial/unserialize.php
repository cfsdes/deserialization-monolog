<?php

class Pet
{
    public $name;
    public $age;
}

$serial = 'O:3:"Pete":2:{s:4:"name";s:6:"Lassie";s:3:"age";i:7;}';
$p = unserialize($serial);

var_dump($p);
