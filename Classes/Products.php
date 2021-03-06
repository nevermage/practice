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
    /** @var int */
    protected $id;
    /** @var string */
    protected $image;

    public function addData($product)
    {
        $this->id = $product['id'];
        $this->name = $product['name'];
        $this->descr = $product['description'];
        $this->price = $product['price'];
        $this->image = $product['image'];
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
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
    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }
}
