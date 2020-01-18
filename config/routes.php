<?php

/**
 * @var AegisFang\Router\Router $route
 */

$route->get(
    [
        '/' => 'Controller::index',
    ]
);

$route->post(
    [
        '/' => 'Controller::store',
    ]
);

$route->get(
    [
        '/about' => function () {
            echo 'how bout dat';
        },
    ]
);
