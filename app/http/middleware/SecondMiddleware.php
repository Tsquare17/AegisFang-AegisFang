<?php

namespace App\Http\Middleware;

use AegisFang\Container\Container;

class SecondMiddleware
{
    public function __construct(Container $container)
    {
        echo __CLASS__ . ' registered' . PHP_EOL;
    }
}
