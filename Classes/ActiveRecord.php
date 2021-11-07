<?php

namespace Classes;

use Classes\Database;

abstract class ActiveRecord
{
    public function __set($name, $value)
    {
        $camelCaseName = $this->underscoreToCamelCase($name);
        $this->$camelCaseName = $value;
    }
    private function underscoreToCamelCase(string $source): string
    {
        return lcfirst(str_replace('_', '', ucwords($source, '_')));
    }

    /** @var int */
    protected $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return static[]
     */
    public static function findAll(): array
    {
        $db = new Database();
        return $db->query('SELECT * FROM `products`;', [], static::class);
    }

    /**
     * @param int $id
     * @return static|null
     */
    public static function getProduct(int $id): ?self
    {
        $db = new Database();
        $product = $db->query(
            'SELECT * FROM `products` WHERE idproducts=:id;',
            [':id' => $id],
            static::class
        );
        return $product ? $product[0] : null;
    }
}
