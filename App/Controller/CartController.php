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
        $this->view->renderHtml('Cart/cart.php');
    }
}
