<?php

namespace App\Controllers;

use AegisFang\Router\JsonController;

/**
 * Class AuthController
 */
class AuthController extends JsonController
{
    public function index(): void
    {
        $this->send(
            ['auth']
        );
    }
}
