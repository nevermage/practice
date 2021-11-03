<?php

namespace Classes;

use Classes\Database;

class Products
{
    /** @var int */
    private $id;
    /** @var string */
    private $name;
    /** @var string */
    private $descr;
    /** @var float */
    private $price;
    public function __set($name, $value)
    {
        $camelCaseName = $this->underscoreToCamelCase($name);
        $this->$camelCaseName = $value;
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
//    /**
//     * @return Products[]
//     */
//    public static function findAll(): array
//    {
//        $db = new Database();
//        return $db->query(
//            'SELECT * FROM `products`;',
//            [],
//            Products::class
//        );
//    }
    /**
     * @return Products[]
     */
    public static function findAll(): array
    {
        $db = new Database();
        return $db->query('SELECT * FROM `products`;', [], Products::class);
    }
    private function underscoreToCamelCase(string $source): string
    {
        return lcfirst(str_replace('_', '', ucwords($source, '_')));
    }
}
