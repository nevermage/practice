<?php

return [
    '~^hello/(.*)$~' => [App\Controller\MainController::class, 'sayHello'],
    '~^product/(.*)$~' => [App\Controller\ProductController::class, 'product'],
    '~^cart(.*)$~' => [App\Controller\CartController::class, 'cart'],
    '~^$~' => [App\Controller\MainController::class, 'catalog'],
];
