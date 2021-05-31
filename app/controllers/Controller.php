<?php

namespace App\Controllers;

use AegisFang\Controller\RestController;
use App\Models\SampleModel;

/**
 * Class Controller
 */
class Controller extends RestController
{
    public function index(SampleModel $model)
    {
        $this->response->setHeader(['Access-Control-Allow-Origin' => '*']);
        return $this->dispatch(
            $model->getItem()
        );
    }

    public function store(SampleModel $model)
    {
        return $model->save('example data');
    }
}
