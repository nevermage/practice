<?php

namespace Classes;

class User
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    public function getname()
    {
        echo "my name is $this->name";
    }
}