<?php

namespace App\Controller;

use Classes\View;
use Classes\Products;

class ProductController
{
    /** @var View */
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../View/Templates');
    }
    public function product(int $id)
    {
        $product = Products::getProduct($id);
        if ($product === null) {
            $this->view->renderHtml('Errors/404.php', [], 404);
            return;
        }
        $this->view->renderHtml('Product/product.php', ['product' => $product]);
    }
}
