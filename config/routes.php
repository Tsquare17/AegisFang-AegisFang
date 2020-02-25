<?php

/**
 * @var AegisFang\Router\Router $route
 */

use App\Http\Middleware\FirstMiddleware;
use App\Http\Middleware\SecondMiddleware;
use AegisFang\Auth\AuthGuard;

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
)->middleware(FirstMiddleware::class)
    ->middleware(SecondMiddleware::class);

$route->get([
        '/auth' => 'AuthController::index'
])->middleware(AuthGuard::class);

$route->post([
	'/auth/register' => 'AuthController::register'
]);
