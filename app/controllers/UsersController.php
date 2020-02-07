<?php

namespace App\Controllers;

use AegisFang\Router\JsonController;
use App\Models\UsersModel;

/**
 * Class UsersController
 */
class UsersController extends JsonController
{
    public function index(UsersModel $model): void
    {
        $this->response->setHeader(['Access-Control-Allow-Origin' => '*']);
        $this->send(
            $model->getUsers()
        );
    }

    public function store(UsersModel $model)
    {
        return $model->createUser();
    }
}
