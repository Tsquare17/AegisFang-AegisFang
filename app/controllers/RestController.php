<?php

namespace App\Controllers;

use AegisFang\Controller\ApiController;
use App\Models\SampleModel;

/**
 * Class RestController
 */
class RestController extends ApiController
{
    public function index()
    {
        return $this->dispatch(
            [
                'index'
            ]
        );
    }

    public function get(SampleModel $model)
    {
        $id = $this->request->id;
        $name = $this->request->name;

        return $this->dispatch(
            [
                $id => $name,
                $model->getItem()
            ]
        );
    }

    public function post()
    {
        return $this->dispatch(
            [
                'post'
            ]
        );
    }

    public function put()
    {
        return $this->dispatch(
            [
                'put'
            ]
        );
    }

    public function delete()
    {
        return $this->dispatch(
            [
                'delete'
            ]
        );
    }

    public function options()
    {
        return $this->dispatch(
            [
                'options'
            ]
        );
    }
}
