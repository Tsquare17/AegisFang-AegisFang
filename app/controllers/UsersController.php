<?php

namespace App\Controllers;

use AegisFang\Router\JsonController;
use App\Models\Users;

/**
 * Class UsersController
 */
class UsersController extends JsonController
{
    protected array $guarded = ['user_password'];

    public function index(Users $model): void
    {
        $this->response->setHeader(['Access-Control-Allow-Origin' => '*']);
        $this->send(
            $model->getUsers()
        );
    }

    public function store(Users $model)
    {
        return $model->createUser();
    }
}
