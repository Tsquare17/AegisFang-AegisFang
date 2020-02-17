<?php

namespace App\Http\Middleware;

use AegisFang\Http\Request;

class FirstMiddleware
{
    public function __construct(Request $request)
    {
        echo __CLASS__ . ' registered' . PHP_EOL;
    }
}
