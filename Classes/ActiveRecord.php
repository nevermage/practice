<?php

namespace Classes;

use phpDocumentor\Reflection\Types\Static_;

abstract class ActiveRecord
{
    /** @var int */
    protected $id;
    public function __set($name, $value)
    {
        $camelCaseName = $this->underscoreToCamelCase($name);
        $this->$camelCaseName = $value;
    }
    private function underscoreToCamelCase(string $source): string
    {
        return lcfirst(str_replace('_', '', ucwords($source, '_')));
    }
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Products[]
     */
    public static function findAll(): array
    {
        $db = new Database();
        return $db->query('SELECT * FROM `products`;', [], Products::class);
    }
    /**
     * @param int $id
     * @return array
     */
    public static function getProduct($id)
    {
        $db = new Database();
        $product = $db->query('SELECT * FROM `products` where idproducts = :id;', [':id' => $id], static::class);
        return $product;
    }
}
