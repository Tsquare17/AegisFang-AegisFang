<?php

namespace App\Controllers;

use AegisFang\Router\RestController;
use App\Models\Model;


class Controller extends RestController
{
    public function index(Model $model)
    {
        return $this->send(
            $model->getItem()
        );
    }

    public function store(Model $model)
    {
        return $model->save('example data');
    }
}
