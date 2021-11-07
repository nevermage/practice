<?php

namespace Classes;

use Classes\ActiveRecord;

class Products extends ActiveRecord
{
    /** @var string */
    protected $name;
    /** @var string */
    protected $descr;
    /** @var float */
    protected $price;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->descr;
    }
    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
