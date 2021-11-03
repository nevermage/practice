<?php

namespace App\Controller;

use Classes\View;
use Classes\Database;

class CartController
{
    /** @var View */
    private $view;
    /** @var Database */
    private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../View/Templates');
        $this->db = new Database();
    }
    public function cart()
    {
//        $cart = [];
        $cart = ["2" => 1, "3" => 2];
        $products = [];
        foreach ($cart as $item => $count) {
            $product = $this->db->query("select * from products where idproducts = $item");
            var_dump($products);
//            $product += ["count" => $count];
            array_push($products, $product);
        }
        var_dump($products);
        $this->view->renderHtml('Cart/cart.php', ['cart' => $cart, 'products' => $products]);
    }
}
