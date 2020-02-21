<?php

namespace App\Controllers;

use AegisFang\Router\JsonRestController;
use App\Models\SampleModel;

/**
 * Class Controller
 */
class Controller extends JsonRestController
{
    public function index(SampleModel $model): void
    {
        $this->response->setHeader(['Access-Control-Allow-Origin' => '*']);
        $this->send(
            $model->getItem()
        );
    }

    public function store(SampleModel $model)
    {
        return $model->save('example data');
    }
}
