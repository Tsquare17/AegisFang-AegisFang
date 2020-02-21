<?php

namespace App\Controllers;

use AegisFang\Router\JsonController;
use App\Models\SampleModel;

/**
 * Class RestController
 */
class RestController extends JsonController
{
    public function index(): void
    {
        $this->send(
            [
                'index'
            ]
        );
    }

    public function get(SampleModel $model): void
    {
        $id = $this->request->id;
        $name = $this->request->name;

        $this->send(
            [
                $id => $name,
                $model->getItem()
            ]
        );
    }

    public function post(): void
    {
        $this->send(
            [
                'post'
            ]
        );
    }

    public function put(): void
    {
        $this->send(
            [
                'put'
            ]
        );
    }

    public function delete(): void
    {
        $this->send(
            [
                'delete'
            ]
        );
    }

    public function options(): void
    {
        $this->send(
            [
                'options'
            ]
        );
    }
}
