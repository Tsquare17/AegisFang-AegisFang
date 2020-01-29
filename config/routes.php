<?php

/**
 * @var AegisFang\Router\Router $route
 */

$route->get(
    [
        '/' => 'Controller::index',
        '/test' => static function () {
            echo 'test';
        }
    ]
);

$route->post(
    [
        '/' => 'Controller::store',
    ]
);

$route->get(
    [
        '/about' => static function () {
            echo 'how bout dat';
        },
    ]
);

$route->any(
    [
        '/wildcard' => static function () {
            echo 'wildcard bitches!';
        }
    ]
);
