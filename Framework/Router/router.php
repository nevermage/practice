<?php

return [
    '~^hello/(.*)$~' => [App\Controller\MainController::class, 'sayHello'],
    '~^product/(.*)$~' => [App\Controller\ProductController::class, 'product'],
    '~^products(.*)$~' => [App\Controller\ProductController::class, 'makeProductsEndpoint'],
    '~^cart(.*)$~' => [App\Controller\CartController::class, 'cart'],
    '~^$~' => [App\Controller\MainController::class, 'catalog'],
];
