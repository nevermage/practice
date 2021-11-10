<?php
namespace App\Controller;

use Classes\View;
use Classes\Products;

class MainController
{
    /** @var View */
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../View/Templates');
    }
    public function catalog()
    {
        $products = Products::findAll();
        $this->view->renderHtml('Catalog/catalog.php', ['products' => $products]);
    }
    public function sayHello($name)
    {
        $this->view->renderHtml('Userinfo/uinfo.php', ['name' => $name]);
    }
}