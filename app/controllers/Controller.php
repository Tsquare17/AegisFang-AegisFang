<?php

namespace App\Controllers;

use AegisFang\Router\JsonRestController;
use App\Models\Model;

/**
 * Class Controller
 */
class Controller extends JsonRestController
{
    public function index(Model $model): void
    {
        $this->response->setHeader(['Access-Control-Allow-Origin' => '*']);
        $this->send(
            $model->getItem()
        );
    }

    public function store(Model $model)
    {
        return $model->save('example data');
    }
}
