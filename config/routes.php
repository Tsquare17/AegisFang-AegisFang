<?php

/**
 * @var AegisFang\Router\Router $route
 */

use App\Http\Middleware\FirstMiddleware;
use App\Http\Middleware\SecondMiddleware;

$route->get(
    [
        '/' => 'Controller::index',
        '/about' => static function () {
            echo 'about';
        },
        '/users' => 'UsersController::index',
    ]
);

$route->post(
    [
        '/' => 'Controller::store',
    ]
);

$route->rest(
    [
        '/wildcard' => static function () {
            echo 'wildcard bitches!';
        },
        '/test' => 'RestController'
    ]
);

$route->get([
        '/auth' => 'AuthController::index'
])->middleware(FirstMiddleware::class)
    ->middleware(SecondMiddleware::class);
