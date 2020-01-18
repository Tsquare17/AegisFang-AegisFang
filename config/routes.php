<?php

/**
 * @var AegisFang\Router\Router $route
 */

$route->get(
    [
        '/' => 'Controller::index',
	    '/test' => function() {
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
        '/about' => function () {
            echo 'how bout dat';
        },
    ]
);

$route->any(
	[
		'/wildcard' => function () {
			echo 'wildcard bitches!';
		}
	]
);
