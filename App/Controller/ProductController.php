<?php

namespace App\Controller;

use Classes\View;
use Classes\Database;

class ProductController
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
    public function product($id)
    {
        $product = $this->db->query("select * from products where idproducts = $id");

        if ($product === []) {
            $this->view->renderHtml('Errors/404.php', [], 404);
            return;
        }
        $this->view->renderHtml('Product/product.php', ['product' => $product]);
    }
}
