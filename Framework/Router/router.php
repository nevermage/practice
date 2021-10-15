<?php

use App\Controller\MainController;

return [
    '~^hello/(.*)$~' => [MainController::class, 'sayHello'],
    '~^$~' => [MainController::class, 'zxc'],
];
