<?php

namespace App\Controllers;

use AegisFang\Controller\ApiController;
use App\Models\Users;

/**
 * Class UsersController
 */
class UsersController extends ApiController
{
    protected array $guarded = ['user_password'];

    public function index(Users $users)
    {
        $this->response->setHeader(['Access-Control-Allow-Origin' => '*']);

        $user = $users->findById(1);

        return $this->dispatch(
            $user->array()
        );
    }

    public function store(Users $model)
    {
        return $model->createUser();
    }

    public function getUser(Users $users)
    {
        return $this->dispatch(
            $users->findById(2)
        );
    }
}
