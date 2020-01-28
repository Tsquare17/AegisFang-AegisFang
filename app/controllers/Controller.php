<?php

namespace App\Controllers;

use AegisFang\Router\JsonController;
use App\Models\Model;


class Controller extends JsonController
{
    public function index(Model $model)
    {
        $this->send(
            $model->getItem()
        );
    }

    public function store(Model $model)
    {
        return $model->save('example data');
    }
}
