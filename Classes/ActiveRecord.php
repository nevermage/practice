<?php

namespace Classes;

use Classes\Products;

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
        $pr1 = new Products();
        $product = $db->query(
            'SELECT * FROM `products` WHERE id=:id;',
            [':id' => $id],
            static::class
        );
        if ($product) {
            $pr1->_data($product[0]);
            return $pr1;
        }
        return null;
    }
}
