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

    public function index(Users $users): void
    {
        $this->response->setHeader(['Access-Control-Allow-Origin' => '*']);

        $user = $users->findById(1);

        $this->send(
            $user->array()
        );
    }

    public function store(Users $model)
    {
        return $model->createUser();
    }

    public function getUser(Users $users)
    {
        $this->send(
            $users->findById(2)
        );
    }
}
