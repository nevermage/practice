<?php

class User
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        echo "My name is $this->name";
    }
}