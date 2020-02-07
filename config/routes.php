<?php

/**
 * @var AegisFang\Router\Router $route
 */

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

$route->any(
    [
        '/wildcard' => static function () {
            echo 'wildcard bitches!';
        }
    ]
);
